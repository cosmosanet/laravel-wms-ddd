<?php

namespace App\Providers;

use App\Domain\Dto\Entity\DtoCollection;
use App\Domain\Factory\User\RoleDtoFactory;
use App\Domain\Factory\User\UserDtoFactory;
use App\Domain\Interface\Dto\DtoCollectionInterface;
use App\Domain\Interface\Factory\User\RoleDtoFactoryInterface;
use App\Domain\Interface\Factory\User\UserDtoFactoryInterface;
use App\Domain\Interface\Repository\BaseRepositoryInterface;
use App\Domain\Interface\Repository\User\RoleRepositoryInterface;
use App\Domain\Interface\Repository\User\UserRepositoryInterface;
use App\Domain\Interface\Service\BaseServiceInterface;
use App\Domain\Repository\Elequent\User\RoleRepository;
use App\Domain\Repository\Elequent\User\UserRepository;
use App\Domain\Service\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepositoryInterface::class, UserRepository::class);
        $this->app->bind(BaseServiceInterface::class, UserService::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(UserDtoFactoryInterface::class, UserDtoFactory::class);
        $this->app->bind(RoleDtoFactoryInterface::class, RoleDtoFactory::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(DtoCollectionInterface::class, DtoCollection::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
