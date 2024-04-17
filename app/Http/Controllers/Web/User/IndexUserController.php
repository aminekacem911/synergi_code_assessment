<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class IndexUserController extends Controller
{
    public function __invoke()
    {
        $users = UserRepository::index();
        $users_count = $users->count();
        return view('welcome', compact(['users','users_count']));

    }
}

