<?php
/**
 * Created by PhpStorm.
 * Created_at: 2018-12-20 16:48
 */

namespace app\api\controller\v1;

use app\api\model\Order as OrderModel;
use app\api\validate\IDMustBePositiveInt;
use app\api\validate\User;
use app\lib\exception\BannerMissException;
use think\Exception;
use think\Request;

class Order {
    public function add(){
        $order = Request::instance() ->post();

        $result = OrderModel::add($order);
        return  $result;
    }

    /**
     * @throws Exception
     */
    public function user(){
        //(new IDMustBePositiveInt()) -> goCheck();
        (new IDMustBePositiveInt()) -> goCheck();
        //throw new BannerMissException();
    }
}