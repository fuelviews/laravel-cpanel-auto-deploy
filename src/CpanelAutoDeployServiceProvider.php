<?php

namespace Fuelviews\CpanelAutoDeploy;

use Fuelviews\CpanelAutoDeploy\Commands\InstallWorkflowCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CpanelAutoDeployServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('cpanel-auto-deploy')
            ->hasCommand(InstallWorkflowCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->app->booted(function () {
            $this->publishScriptToRoot();
        });
    }

    protected function publishScriptToRoot(): void
    {
        $sourcePath = __DIR__ . '/../stubs/scripts/cpanel-auto-deploy.sh.stub';
        $destinationPath = base_path('cpanel-auto-deploy.sh');

        copy($sourcePath, $destinationPath);

        chmod($destinationPath, 0755);
    }
}
