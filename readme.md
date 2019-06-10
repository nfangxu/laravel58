# Laravel 5.8

## master

- 将默认的用户 Model 由 `App` 移动到 `App\Models`, 并修改相关文件

	* `mkdir app/Models && mv app/User.php app/Models/User.php` 

	* `find . \( -path 'vendor/*' -o -path 'node_modules/*' \) -a -prune | xargs grep -ri "App\\\User" -l`

- 添加 `predis/predis` 扩展

	* `composer require predis/predis`