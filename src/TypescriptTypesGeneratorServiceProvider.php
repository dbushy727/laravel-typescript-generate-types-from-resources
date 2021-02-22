<?php

namespace Dbushy727\TypescriptTypesGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dbushy727\TypescriptTypesGenerator\Commands\TypescriptTypesGeneratorCommand;

class TypescriptTypesGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-typescript-generate-types-from-resources')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_typescript_generate_types_from_resources_table')
            ->hasCommand(TypescriptTypesGeneratorCommand::class);
    }
}
