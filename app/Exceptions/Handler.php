<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\View;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Exception|Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {
                $numLog = 404;
                $message = "Không tìm thấy trang";
            }
            if ($exception->getStatusCode() == 403) {
                $numLog = 403;
                $message = "Bạn không có quyền truy cập";
            }
            if ($exception->getStatusCode() == 500) {
                $numLog = 500;
                $message = "Lỗi server";
            }
            return response()->view('backend.widgets.error', compact('numLog', 'message') , $numLog);

        }
        return parent::render($request, $exception);
    }
}
