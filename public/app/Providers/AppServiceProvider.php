<?php

namespace App\Providers;

use App\Domain\Dto\Entity\DtoCollection;
use App\Domain\Factory\Category\CategoryDtoFactory;
use App\Domain\Factory\User\RoleDtoFactory;
use App\Domain\Factory\User\UserDtoFactory;
use App\Domain\Interface\Dto\DtoCollectionInterface;
use App\Domain\Interface\Factory\Category\CategoryDtoFactoryInterface;
use App\Domain\Interface\Factory\User\RoleDtoFactoryInterface;
use App\Domain\Interface\Factory\User\UserDtoFactoryInterface;
use App\Domain\Interface\Repository\Category\CategoryRepositoryInterface;
use App\Domain\Interface\Repository\User\RoleRepositoryInterface;
use App\Domain\Interface\Repository\User\UserRepositoryInterface;
use App\Domain\Interface\Service\CategoryServiceInterface;
use App\Domain\Interface\Service\UserServiceInterface;
use App\Domain\Repository\Elequent\Category\CategoryRepository;
use App\Domain\Repository\Elequent\User\RoleRepository;
use App\Domain\Repository\Elequent\User\UserRepository;
use App\Domain\Service\Category\CategoryService;
use App\Domain\Service\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserDtoFactoryInterface::class, UserDtoFactory::class);
        $this->app->bind(RoleDtoFactoryInterface::class, RoleDtoFactory::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(DtoCollectionInterface::class, DtoCollection::class);

        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(CategoryDtoFactoryInterface::class, CategoryDtoFactory::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
