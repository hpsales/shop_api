<?php
/**
 * Created by PhpStorm.
 * Created_at: 2018-12-26 12:21
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate {
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];

    protected $message = [
        'id.isPositiveInteger' => 'ID必须是正整数'
    ];
}