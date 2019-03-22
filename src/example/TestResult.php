<?php
/**
 * Created by PhpStorm.
 * User: zhangyc
 * Date: 2019-03-22
 * Time: 23:09
 */

require_once '../vo/Result.php';

use common\vo\Result;

$result = new Result();

//echo $result->ok();

echo $result->error('RECORD_EXIST', '记录已存在', ['a' => 1, 'b' => 2]);

//echo $result->success(null, '添加成功');