<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Symfony\Component\HttpFoundation\Response;

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

    public function render($request, Throwable $exception)
{
    if ($exception instanceof PostTooLargeException) {
        // يمكنك تخصيص رسالة الخطأ أو إعادة توجيه المستخدمين إلى صفحة أخرى.
        return response()->view('pege admen/video', [], Response::HTTP_REQUEST_ENTITY_TOO_LARGE);
    }

    return parent::render($request, $exception);
}

}
