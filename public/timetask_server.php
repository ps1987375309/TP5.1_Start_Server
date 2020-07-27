<?php
namespace think;

ini_set('display_errors', 'on');
if(strpos(strtolower(PHP_OS), 'win') === 0)
{
    exit("start.php not support windows.\n");
}
// 检查扩展
if(!extension_loaded('pcntl'))
{
    exit("Please install pcntl extension. See http://doc3.workerman.net/appendices/install-extension.html\n");
}
if(!extension_loaded('posix'))
{
    exit("Please install posix extension. See http://doc3.workerman.net/appendices/install-extension.html\n");
}
define('APP_PATH', __DIR__ . '/../application/');

//绑定默认模块和控制器 TP5.0写法
// define('BIND_MODULE','server/Timetask');
// require __DIR__ . '/../thinkphp/start.php';

//TP5.1写法
// 加载框架引导文件
require __DIR__ . '/../thinkphp/base.php';
// 执行应用并响应
Container::get('app')->bind('server/Timetask')->run()->send();
