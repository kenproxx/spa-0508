<?php

namespace App\Http\Controllers\backend;

use App\Enum\UserStatus;
use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail()
    {
        $users = User::where('status', '!=', UserStatus::DELETED)->get();
        return view('backend.pages.email.send-mail', compact('users'));
    }
}
