<?php

namespace Ht3aa\AlwaseetDelivery\Commands;

use Illuminate\Console\Command;

class AlwaseetDeliveryCommand extends Command
{
    public $signature = 'alwaseet-delivery';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
