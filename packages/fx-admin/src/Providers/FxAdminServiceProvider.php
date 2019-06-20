<?php

namespace FxAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use FxAdmin\Console\FxAdminInit;
use FxAdmin\Services\FxAdminService as Fx;
use FxAdmin\Facades\Fx as FxAdminFx;

class FxAdminServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->publishes([
			Fx::dir('config/config.php') => config_path('fx-admin.php')
		], 'config');

		// 发布资源文件
		$this->publishes([
			Fx::dir('resources/assets') => public_path('vendor/fx-admin'),
		], 'public');

		// 视图文件
		$this->loadViewsFrom(Fx::dir('resources/views'), 'fx-admin');

		// 路由
		$this->loadRoutesFrom(Fx::dir('routes/web.php'));

		// 命令
		if ($this->app->runningInConsole()) {
			$this->commands([
				FxAdminInit::class,
			]);
		}
	}

	public function register()
	{
		// 
	}
}
