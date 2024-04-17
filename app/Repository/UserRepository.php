<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class UserRepository
{
    public User $user;
    const PAGINATION_PARAMS=15;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public static function index()
    {
       return User::orderBy('id', 'desc')->paginate(self::PAGINATION_PARAMS);
    }

    /**
     * @param $attributes
     * @return void
     */
    public static function create($attributes)
    {
        $user = new User();
        $user->first_name = $attributes['first_name'];
        $user->last_name = $attributes['last_name'];
        $user->email = $attributes['email'];
        if (isset($attributes['additional_information'])) {
            $user->additional_information = $attributes['additional_information'];
        }
        $user->save();
    }
}
