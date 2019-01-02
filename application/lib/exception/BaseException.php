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
     * @param array $params
     * @throws Exception
     */
    public function __construct($params = []) {
        if (!is_array($params)) {
            // 判断是不是数组，如果不是，抛出异常
            throw new Exception('参数必须是数组');
        }
        if(array_key_exists('code',$params)){
            $this -> code = $params['code'];
        }
        if(array_key_exists('msg',$params)){
            $this -> msg = $params['msg'];
        }
        if(array_key_exists('errorCode',$params)){
            $this -> errorCode = $params['errorCode'];
        }
    }
}