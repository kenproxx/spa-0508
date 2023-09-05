<?php

namespace App\Http\Controllers\backend;

use App\Enum\MailLogStatus;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SendMailController;
use App\Models\Config;
use App\Models\MailLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailLogController extends Controller
{
    public function index()
    {
        $mailLogs = MailLog::where('status', '!=', MailLogStatus::DELETED)->orderBy('id', 'desc')->get();
        return view('backend.pages.email.index', compact('mailLogs'));
    }

    public function store(Request $request)
    {
        try {
            $emailFrom = Config::where([
                ['name', 'MAIL_USERNAME'],
                ['type', 'smtp_email']
            ])->first();
            $mailFrom = $emailFrom->value;
            $mailTo = $request->input('mail_to');
            $title = $request->input('title');

            $success = (new SendMailController())->sendEmailFromRequest($request);

            $mailLog = new MailLog();

            $mailLog->mail_from = $mailFrom;
            $mailLog->mail_to = $mailTo;
            $mailLog->title = $title;

            $mailLog->created_by = Auth::user()->id;
            if ($success) {
                $mailLog->status = MailLogStatus::ACTIVE;
            } else {
                $mailLog->status = MailLogStatus::INACTIVE;
            }
            $mailLog->save();
            return redirect(route('backend.admin.log.mail.show'));
        } catch (\Exception $exception) {
            return back();
        }
    }
}
