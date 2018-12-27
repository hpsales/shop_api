<?php
/**
 * Created by PhpStorm.
 * Created_at: 2018-12-20 17:28
 */

namespace app\api\behavior;

class Test {
    public function responseSend(&$params) {
        // 响应头设置 我们就是通过设置header来跨域的 这就主要代码了 定义行为只是为了前台每次请求都能走这段代码
    	header('Access-Control-Allow-Origin:*');
    	header('Access-Control-Allow-Methods:*');
	    header('Access-Control-Allow-Headers:*');
	    header('Access-Control-Allow-Credentials:false');
    }
}
