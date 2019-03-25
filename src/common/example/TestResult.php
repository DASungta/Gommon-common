<?php
/**
 * Created by PhpStorm.
 * User: zhangyc
 * Date: 2019-03-22
 * Time: 23:09
 */

namespace common\example;

require_once '../../../autoload.php';

use common\exception\CommonException;
use common\handler\ExceptionHandler;
use common\vo\Result;

$result = new Result();

//echo $result->ok();

//echo $result->error('RECORD_EXIST', '记录已存在', ['a' => 1, 'b' => 2]);

//echo $result->success(null, '添加成功');

try {
//    echo "test exception handler";

    throw new CommonException(['resultKey' => 'UNEXPIRED_TOKEN', 'detailMessage' => '许可证过期了']);
} catch (CommonException $e) {
    $handler = new ExceptionHandler();
    echo $handler->render($e);
}