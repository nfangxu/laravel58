<?php

namespace FxAdmin\Facades;

use Illuminate\Support\Facades\Facade;
use FxAdmin\Services\FxAdminService;

class Fx extends Facade
{
	public function getFacadeAccessor()
	{
		return FxAdminService::class;
	}
}