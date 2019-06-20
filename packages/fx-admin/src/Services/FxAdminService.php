<?php

namespace FxAdmin\Services;

class FxAdminService
{
	public static function dir($path = '.')
	{
		return __DIR__ . "/../../" . rtrim($path, "/");
	}

	public static function config($key = null, $default = "")
	{
		if (is_null($key)) {
			return config('fx-admin');
		}

		return config('fx-admin.' . $key, $default);
	}
}
