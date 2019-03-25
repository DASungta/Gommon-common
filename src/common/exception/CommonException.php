<?php

namespace common\exception;

use Exception;

/**
 * Created by PhpStorm.
 * User: dasungta
 * Date: 2019-03-25
 * Time: 09:23
 */
class CommonException extends Exception
{
    public $resultCode;

    public $detailMessage;

    public $resultKey;

    public $msg;

    /**
     * CommonException constructor.
     * @param array $params
     */
    public function __construct($params = [])
    {
        if (!is_array($params) || empty($params)) {
            //如果不是数组或为空,则代表不修改当前的类成员变量,也就是用预设的值来返回给客户端
            return;
        }
        if (key_exists('resultCode', $params)) {
            $this->resultCode = $params['code'];
        }
        if (key_exists('detailMessage', $params)) {
            $this->detailMessage = $params['detailMessage'];
        }
        if (key_exists('resultKey', $params)) {
            $this->resultKey = $params['resultKey'];
        }
        if (key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }
    }
}