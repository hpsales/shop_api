<?php
/**
 * Created by PhpStorm.
 * User: GJY
 * Date: 2018/8/7
 * Time: 23:55
 */

namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

/**
 * 自定义异常处理类
 * Class ExceptionHandler
 * @package app\lib\exception
 */
class ExceptionHandler extends Handle {
    // HTTP状态码
    private $code;
    // 错误信息
    private $msg;
    // 错误码
    private $errorCode;

    public function render(Exception $e) {
        if ($e instanceof BaseException) {
            // 如果是自定义的异常，返回客户端具体的消息
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        } else {
            // 不需要或者不想要用户知道具体的消息
            if (config('app_debug')) {
                return parent::render($e);
            } else {
                $this->code = 500;
                $this->msg = '服务器内部错误';
                $this->errorCode = 999;
                // 记录错误日志
                $this->recordErrorLog($e);
            }
        }
        // 构造返回到客户端的数据
        $result = [
            'msg'         => $this->msg,
            'errorCode'   => $this->errorCode,
            'request_url' => Request::instance()->url()
        ];
        return json($result, $this->code);
    }

    private function recordErrorLog(Exception $e) {
        Log::init([
            'type'  => 'File',
            'path'  => LOG_PATH,
            'level' => ['error']
        ]);
        Log::record($e->getMessage(), 'error');
    }
}