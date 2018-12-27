<?php
/**
 * Created by PhpStorm.
 * Created_at: 2018-12-20 16:58
 */

namespace app\api\model;


use app\lib\exception\BannerMissException;
use think\Exception;

class Order extends BaseModel {
    static public function add($order){
        $result = self::create($order);
        return $result;
    }

}