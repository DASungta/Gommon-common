<?php
/**
 * Created by PhpStorm.
 * User: dasungta
 * Date: 2019-03-22
 * Time: 18:47
 */

namespace vo;

class Result
{

    protected static $codeMsg = [
        'OK' => [0, 'OK'],
        'SYSTEM_ERR' => [30001, 'System Error'],
        'PERMISSION_DENIED' => [30002, 'Permission Denied']
    ];
}