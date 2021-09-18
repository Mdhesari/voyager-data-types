<?php

namespace Mdhesari\VoyagerDataTypes\Commands;

use Illuminate\Console\Command;

class VoyagerDataTypesCommand extends Command
{
    public $signature = 'voyager-data-types';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
