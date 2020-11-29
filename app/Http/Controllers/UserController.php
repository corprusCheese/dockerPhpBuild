<?php

namespace App\Http\Controllers;

use App\Repository\UserRepositoryInterface;

class UserController extends Controller {
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index($query)
    {
        if ($query) {
            $query = ['name' => $query];
            $users = $this->userRepository->fetch($query);
        } else {
            $users = null;
        }

        return view('pages.userSearch', [
            'users' => $users
        ]);
    }
}
