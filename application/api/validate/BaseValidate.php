<?php
/**
 * Created by PhpStorm.
 * Created_at: 2018-12-26 10:47
 */

namespace app\api\validate;



use app\lib\exception\BannerMissException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate {
    protected $data = [];

    /**
     * @return bool
     * @throws Exception
     */
    function goCheck(){
        $params = Request::instance() ->param();

        $result = $this -> check($params);
        if(!$result){
            $error = $this -> error;
            throw new BannerMissException($error);
        }else{
            return true;
        }
    }


    protected function isPositiveInteger($value ,$rule ='',$data='',$field=''){
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
        }
    }
}