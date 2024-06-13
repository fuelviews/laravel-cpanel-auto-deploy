<?php

namespace Fuelviews\CpanelAutoDeploy\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallWorkflowCommand extends Command
{
    protected $signature = 'deploy:install';

    protected $description = 'Install github workflow file';

    public function handle(): bool
    {
        // Adjust the source path to be relative to the package's base directory
        $source = __DIR__.'/../../resources/workflows/cpanel-auto-deploy.yml.stub';
        $destination = base_path('.github/workflows/cpanel-auto-deploy.yml');

        // Check if source file exists
        if (! File::exists($source)) {
            $this->error('Source file does not exist: '.$source);

            return 1;
        }

        $directory = dirname($destination);

        if (! File::exists($directory)) {
            if (! File::makeDirectory($directory, 0755, true)) {
                $this->error('Failed to create directories: '.$directory);
            }
        }

        if (File::copy($source, $destination)) {
            $this->info('Workflow file copied successfully.');
        } else {
            $this->error('Failed to copy workflow file.');

            return false;
        }

        return true;
    }
}
