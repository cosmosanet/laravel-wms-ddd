<?php

namespace App\Http\Controllers;

use App\Domain\Interface\Service\CategoryServiceInterface;


class TestController
{
    private $userService;

    public function __construct(
        CategoryServiceInterface $userService,
    )
    {
        $this->userService = $userService;
    }

    public function index(): void
    {
        var_dump($this->userService->getUsersList()->getValues());
    }
}
