<?php
namespace app\server\controller;

use Workerman\Worker;
use Workerman\Lib\Timer;
use Workerman\Autoloader;

class Timetask {
    /**
     * 构造函数
     *
     * @access public
     */
    public function __construct() {
        // 自动加载类
        require_once __DIR__ . '/../../../vendor/workerman/workerman/Autoloader.php';
        Autoloader::setRootPath ( __DIR__ );
        
        $task = new Worker ();
        
        $task->onWorkerStart = function ($task) {
            Timer::add ( 10, function (){   
                $this->_echo ( '定时任务测试：'.date("Y-m-d h:i:s"));
            });
        };
        Worker::runAll ();
    }
    
    /**
     * 调试输出或日志
     */
    public function _echo($message) {
        _echo ( '#', $message, 'timetask_server' );
    } 
}