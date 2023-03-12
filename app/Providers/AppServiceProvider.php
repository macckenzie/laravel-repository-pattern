<?php

namespace App\Providers;

use App\Repositories\Contract\ContractRepository;
use App\Repositories\Contract\IContractRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IContractRepository::class, ContractRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
