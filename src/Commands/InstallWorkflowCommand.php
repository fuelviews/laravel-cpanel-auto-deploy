<?php

namespace Fuelviews\CpanelAutoDeploy\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallWorkflowCommand extends Command
{
    protected $signature = 'deploy:install';


    protected $description = 'Install all Fuelviews packages and run their install commands';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $source = resource_path('workflows/cpanel-auto-deploy.yml.stub');
        $destination = base_path('.github/workflows/cpanel-auto-deploy.yml');

        $directory = dirname($destination);
        if (! File::exists($directory)) {
            File::makeDirectory($directory);
        }

        if (File::copy($source, $destination)) {
            $this->info('Workflow file copied successfully.');
        } else {
            $this->error('Failed to copy workflow file.');
        }
    }
}
