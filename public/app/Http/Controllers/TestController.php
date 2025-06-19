<?php

namespace App\Http\Controllers;

use App\Domain\Interface\Service\BaseServiceInterface;
use Illuminate\Support\Facades\Auth;

class TestController
{
    private $userService;

    public function __construct(BaseServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        var_dump($this->userService->get());
    }

    public function admin()
    {
        return view(
            'admin.admin',
            [
                'users' => $this->userService->getUsersList()->getValues()
            ]
        );
    }
}
