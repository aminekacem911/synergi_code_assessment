<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class CreateUserController extends Controller
{
    public function __invoke(CreateUserRequest $request)
    {
        try {
            UserRepository::create($request);
            Session::flash('success_message', __('custom.USER_SUCCESS'));
            $responseData = ['message' => __('custom.USER_SUCCESS')];
            $statusCode = Response::HTTP_CREATED;
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error creating user: ' . $e->getMessage());
            // Flash error message
            Session::flash('error_message', __('custom.USER_ERROR'));
            $responseData = ['error' => __('custom.USER_ERROR')];
            $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR;
        }
        return redirect()->route('users.index')->with($responseData)->setStatusCode($statusCode);
    }
}
