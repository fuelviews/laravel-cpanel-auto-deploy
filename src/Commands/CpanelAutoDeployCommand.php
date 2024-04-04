<?php

namespace Fuelviews\CpanelAutoDeploy\Commands;

use Illuminate\Console\Command;

class CpanelAutoDeployCommand extends Command
{
    public $signature = 'laravel-cpanel-auto-deploy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
