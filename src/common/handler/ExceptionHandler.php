<?php

namespace common\handler;

use common\exception\CommonException;
use common\vo\Result;
use Exception;
use think\exception\Handle;

/**
 * 适用ThinkPHP-5.1.x
 * Created by PhpStorm.
 * User: dasungta
 * Date: 2019-03-25
 * Time: 10:20
 */
class ExceptionHandler extends Handle
{
    private $resultKey;

    private $resultCode;

    private $devMessage;

    private $msg;

    public function render(Exception $e)
    {
        if ($e instanceof CommonException) {
            $this->resultKey = $e->resultKey;
            $this->devMessage = $e->detailMessage;
        } else {
            if (false) {
                // todo: 加入更多的异常判断
            } else {
                $this->resultKey = 'SYSTEM_ERR';
                $this->devMessage = $e->getMessage();
            }
        }

        $result = new Result();

        return $result->exception($this->resultKey, $this->devMessage);
    }
}