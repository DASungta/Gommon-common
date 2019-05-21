<?php

namespace common\vo;

use think\Response;

/**
 * 适用ThinkPHP-5.1.x
 * Created by PhpStorm.
 * User: dasungta
 * Date: 2019-03-25
 * Time: 10:20
 */
class ResultResponse extends Response
{
    public static function success($data, $message = 'OK', $header = [], $options = [])
    {
        $result = new Result();
        $data = $result->successObject($data, $message);
        return self::create($data, 'json', 200, $header, $options);
    }

    public static function error($key, $message, $data, $header = [], $options = [])
    {
        $result = new Result();
        $data = $result->errorObject($key, $message, $data);
        return self::create($data, 'json', 200, $header, $options);
    }


}