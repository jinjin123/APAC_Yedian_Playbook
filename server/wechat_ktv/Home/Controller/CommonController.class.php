<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {
    public function getJsSign() {
        header('Access-Control-Allow-Origin:*');
        $result_array = array();
        if (!IS_GET && !IS_AJAX) {
            $result_array['status'] = '0';
            $result_array['msg'] = '方法错误';
            echo json_encode($result_array, true);
            return false;
        }
        $url = I('get.url');
        $wechat = new WeChatController();
        $sign = $wechat->getJsSign($url);
        $result_array['status'] = '1';
        $result_array['msg'] = '成功';
        $result_array['sign'] = $sign;
        echo json_encode($result_array, true);
    }
}
