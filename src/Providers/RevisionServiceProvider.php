<?php

namespace Tec\Revision\Providers;

use Tec\Base\Supports\ServiceProvider;
use Tec\Base\Traits\LoadAndPublishDataTrait;

class RevisionServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this
            ->setNamespace('packages/revision')
            ->loadAndPublishViews()
            ->loadAndPublishConfigurations(['general'])
            ->loadMigrations()
            ->publishAssets();

        $this->app->register(HookServiceProvider::class);
    }
}
