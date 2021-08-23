<?php

namespace App\Exceptions;

use http\Env\Request;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e)
        {

        });
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof NotFoundHttpException)
        {
            if (auth()->check())
            {
                if (auth()->user()->user_type === '1')
                {
                    return redirect()->route('home');
                }
                else if (auth()->user()->user_type === '0')
                {
                    return redirect()->route('dashboard');
                }
            }
        }

        return parent::render($request, $e);
    }
}
