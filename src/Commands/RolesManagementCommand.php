<?php

namespace Vnideas\RolesManagement\Commands;

use Illuminate\Console\Command;

class RolesManagementCommand extends Command
{
    public $signature = 'roles-management';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
