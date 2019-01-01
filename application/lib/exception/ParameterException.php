<?php
/**
 * Created by PhpStorm.
 * User: GJY
 * Date: 2019/1/1
 * Time: 21:08
 */

namespace app\lib\exception;


use Throwable;

class ParameterException extends BaseException {
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;

}