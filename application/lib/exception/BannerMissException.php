<?php
/**
 * Created by PhpStorm.
 * Created_at: 2018-12-26 13:51
 */

namespace app\lib\exception;


class BannerMissException extends BaseException {
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}