<?php

namespace LukeBouch\SublimeBlogsApi\Commands;

use Illuminate\Console\Command;

class SublimeBlogsApiCommand extends Command
{
    public $signature = 'sublime-blogs-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
