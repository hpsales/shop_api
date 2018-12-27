<?php
/**
 * Created by PhpStorm.
 * Created_at: 2018-12-26 10:43
 */

namespace app\api\validate;

class User extends BaseValidate {
    protected $rule = [
        'name' => 'require'
    ];
}