<?php


/*
 * 微信网页授权登录登录
 */

class WechatLogin{
    protected static $AppID = "wx9efde66fe7af3215";//内置AppID
    protected static $AppSecret = "e5685bc5ec4ab3598bd84c81f494ee8d";//内置AppSecret

	
    /**
     * 实例化类时设置微信AppID和AppSecret，无此需求可删除
     * WechatLogin constructor.
     * @param $data
     */
    public function __construct($data)
    {
        self::instance($data);
    }

    /**
     * 设置微信AppID和AppSecret
     * @param $data
     */
    protected static function instance($data){
        self::$AppID = $data["AppID"];
        self::$AppSecret = $data["AppSecret"];
    }

    /**
     * 获取access_token，用于获取用户信息
     * @param $code     用户扫码登录成功后，回调带的code
     * @return mixed
     */
    public function get_access_token($code){
        $AppID = self::$AppID;
        $AppSecret = self::$AppSecret;
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$AppID}&secret={$AppSecret}&code={$code}&grant_type=authorization_code";
        return json_decode(self::get($url),true);
    }

    /**
     * 获取用户信息
     * @param $data 获取access_token后，返回的数组
     * @return mixed
     */
    public function get_user_massage($data){
        $url = "https://api.weixin.qq.com/sns/userinfo?access_token={$data["access_token"]}&openid={$data["openid"]}";
        return json_decode(self::get($url),true);
    }

    /**
     * 发起get请求
     * @param $url      请求地址
     * @return false|mixed|string
     */
    public static function get($url){
        // 1. 初始化
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
            $output = json_encode(["errcode"=>40013,"errmsg" => curl_error($ch)],JSON_UNESCAPED_UNICODE);
        }
        // 4. 释放curl句柄
        curl_close($ch);
        return $output;
        //return file_get_contents($url);    //返回json对象
    }
}