<?php

namespace LukeBouch\SublimeBlogsApi;

use LukeBouch\SublimeBlogsApi\Commands\SublimeBlogsApiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SublimeBlogsApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('sublime-blogs-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sublime-blogs-api_table')
            ->hasCommand(SublimeBlogsApiCommand::class);
    }
}
