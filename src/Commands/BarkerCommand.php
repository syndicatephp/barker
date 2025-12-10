<?php

namespace Syndicate\Barker\Commands;

use Illuminate\Console\Command;

class BarkerCommand extends Command
{
    public $signature = 'barker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
