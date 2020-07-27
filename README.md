# TP5.1_Start_Server

TP5.1建立服务，如定时任务等，仿照此方法可以设置自己需要的任何服务

#安装

安装Thinkphp5.1框架

安装workerman  composer require workerman/gateway-worker=3.0

#服务入口文件绑定服务对应的模块（不同的TP版本，写法可能不同）

/public/timetask_server.php

//将服务指定到server模块，Timetask控制器下

Container::get('app')->bind('server/Timetask')->run()->send();

#涉及到的文件

/public/timetask_server.php      入口文件

/application/server/controller/Timetask.php      任务文件

/application/common.php    调试日志函数

#测试启动服务命令

php timetask_server.php start

#正式系统启动

需要将 php timetask_server.php start 命令写入到开机启动中去
