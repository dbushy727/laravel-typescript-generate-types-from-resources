<?php

namespace Dbushy727\TypescriptTypesGenerator\Commands;

use Illuminate\Console\Command;

class TypescriptTypesGeneratorCommand extends Command
{
    public $signature = 'laravel-typescript-generate-types-from-resources';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
