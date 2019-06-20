<?php

namespace FxAdmin\Console;

use Illuminate\Console\Command;
use FxAdmin\Providers\FxAdminServiceProvider;

class FxAdminInit extends Command
{
    protected $signature = 'fxadmin:init';

    protected $description = 'fx admin init';

    public function handle()
    {
        $this->call('vendor:publish', [
			'--provider' => FxAdminServiceProvider::class,
		]);
    }
}
