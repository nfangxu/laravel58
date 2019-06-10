# Laravel 5.8

## master

- 修改默认语言和时区 `config/app.php`

	* `'timezone' => 'PRC',`

	* `'locale' => 'zh',`

	* `'fallback_locale' => 'zh',`

	* `'faker_locale' => 'zh_CN',`

- 将默认的用户 Model 由 `App` 移动到 `App\Models`, 并修改相关文件

	* `mkdir app/Models && mv app/User.php app/Models/User.php` 

	* `find . \( -path 'vendor/*' -o -path 'node_modules/*' \) -a -prune | xargs grep -ri "App\\\User" -l`

- 添加 `predis/predis` 扩展

	* `composer require predis/predis`

## laravel-nova

- 添加 `laravel/nova` 扩展, 并安装

	* `composer.json`

	```json
		"repositories": [
			{
				"type":"path",
				"url": "./packages/laravel-nova"
			}
		]
	```

	* `composer require laravel/nova:*`

	* `php artisan nova:install`

	* `php artisan migrate`