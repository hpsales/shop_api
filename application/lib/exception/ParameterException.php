<?php

namespace app\lib\exception;

/**
 * Class ParameterException
 * @package app\lib\exception
 * 参数异常
 */
class ParameterException extends BaseException {
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;

}