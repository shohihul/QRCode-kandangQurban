<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;

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
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into a response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {

        // MultiAuthUnAuthenticated

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'info' => Response::$statusTexts[Response::HTTP_UNAUTHORIZED],
                'status' => Response::$statusTexts[Response::HTTP_UNAUTHORIZED],
                'status_code' => Response::HTTP_UNAUTHORIZED
            ])->setStatusCode(Response::HTTP_UNAUTHORIZED, Response::$statusTexts[Response::HTTP_UNAUTHORIZED]);
        }

        switch(array_get($exception->guards(), 0)) {
            case 'admin':
                $login_route = 'admin.login';
                return redirect()->guest(route($login_route));
                break;
            case 'web':
                $login_route = 'login';
                return redirect()->guest(route($login_route));
                break;
            default:
                $login_route = 'login';
                return redirect()->guest(route($login_route));
                break;
        }

    }
}
