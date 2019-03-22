<?php
/**
 * Created by PhpStorm.
 * User: zhangyc
 * Date: 2019-03-22
 * Time: 23:09
 */

use vo\Result;

$result = new Result();

echo $result->ok();

echo $result->error(['a' => 1, 'b' => 2], '记录已存在', 'RECORD_EXIST');

echo $result->success(null, '添加成功');