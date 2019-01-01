<?php
/**
 * Created by PhpStorm.
 * User: GJY
 * Date: 2018/8/7
 * Time: 23:57
 */

namespace app\lib\exception;


use think\Exception;
use Throwable;

class BaseException extends Exception {
    // HTTP状态码
    public $code = 400;
    // 错误信息
    public $msg = 'parameter error';
    // 错误码
    public $errorCode = 10000;


    /**
     * BaseException constructor.
     * @param array $param
     * @throws Exception
     */
    public function __construct($param = []) {
        if (!is_array($param)) {
            throw new Exception('参数必须是数组');
        }

    }
}