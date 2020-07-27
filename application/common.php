<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


/**
 * 应用调试日志
 */
function _echo($id, $message, $log_prefix = "", $type = true){
    $directory = RUNTIME_PATH.'/log/';
    if(! file_exists($directory)){
        makdir($directory);
    }
    $message = $id . strftime(' %F %H:%M:%S' , time()) . $message . PHP_EOL;
    echo $message;
    if($type){
        file_put_contents(strftime($directory . $log_prefix .'_%Y%m%d.log',time()), $message,FILE_APPEND);
    }
}