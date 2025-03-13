<?php

namespace App\Http\Controllers;

use App\Domain\Interface\Service\BaseServiceInterface;

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
}
