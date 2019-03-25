<?php

namespace common\vo;

/**
 * Created by PhpStorm.
 * User: dasungta
 * Date: 2019-03-22
 * Time: 18:47
 */
class Result
{

    private $codeMsg = [
        'OK' => [0, 'OK'],
        'SYSTEM_ERR' => [30001, 'System Error'],
        'PERMISSION_DENIED' => [30002, 'Permission Denied'],
        'INVALID_CLIENT_ID' => [30003, 'Invalid clientid'],
        'INVALID_PASSWORD' => [30004, 'User name or password is incorrect'],
        'INVALID_CAPTCHA' => [30005, 'Invalid captcha or captcha overdue'],
        'INVALID_TOKEN' => [30006, 'Invalid token'],
        'UNEXPIRED_TOKEN' => [30007, 'Token expired'],
        'REGISTER_FAILED' => [30008, 'User already exist'],
        'RECORD_EXIST' => [30009, 'Record exits'],
        'NOTIFY_FAILED' => [30010, 'Send failed'],
        'PARAM_EMPTY' => [30011, 'Param cannot be empty'],
        'EMPTY_ROW' => [30012, 'No records'],
        'TIME_OUT' => [30013, 'Connect time out'],
        'SERVICE_NOT_FOUND' => [30014, 'Service not found'],
        'INVALID_OLD_PASSWORD' => [30015, 'Invalid old password'],
        'PASSWORD_NOT_INIT' => [30020, 'Password not init'],
        'PASSWORD_TOO_SIMPLE' => [30021, 'Password is too simple'],
        'INFO_NOT_COMPLETE' => [30022, 'Information is not complete'],
        'INVALID_REQUEST' => [30023, 'Invalid request'],
        'SMS_SEND_FAILED' => [30030, 'Sms send failed'],
        'CODE_NOT_MATCH' => [30031, 'Verification code does not match'],
        'SMS_USEAGE_LIMITED' => [30032, 'Times of sms usage is limite（10）'],
        'FILE_CONTENT_INCOMPLETE' => [30100, 'File content is incomplete'],
        'WRONG_DATA_FORMAT' => [30200, 'Wrong data format'],
        'WEBSERVICE_WRONG_RESPONSE' => [30300, 'WebService request exception'],

    ];

    /**
     * 获取Result错误代码
     * @param string $key
     * @return mixed
     */
    private function getCode($key = 'OK')
    {
        return $this->codeMsg[$key][0];
    }

    /**
     * 获取Result开发错误信息
     * @param string $key
     * @return mixed
     */
    private function getMessage($key = 'OK')
    {
        return $this->codeMsg[$key][1];
    }

    /**
     * 快捷返回
     * @return false|string
     */
    public function ok()
    {
        return $this->toJson(
            $this->getCode('OK'),
            $this->getMessage('OK'),
            'OK',
            isset($data) ? $data : null
        );
    }

    /**
     * 成功
     * @param $data
     * @param string $message
     * @return false|string
     */
    public function success($data, $message = 'OK')
    {
        return $this->toJson(
            $this->getCode('OK'),
            $message,
            $this->getMessage('OK'),
            isset($data) ? $data : null
        );
    }

    /**
     * 失败
     * @param $key
     * @param $message
     * @param $data
     * @return false|string
     */
    public function error($key, $message, $data)
    {
        return $this->toJson(
            $this->getCode($key),
            $message,
            $this->getMessage($key),
            isset($data) ? $data : null
        );
    }

    /**
     * 异常方法
     * @param $key
     * @param $devMessage
     * @return false|string
     */
    public function exception($key, $devMessage)
    {
        return $this->toJson(
            $this->getCode($key),
            $this->getMessage($key),
            $devMessage,
            isset($data) ? $data : null
        );
    }

    private function toJson($code, $message, $dev_message, $data)
    {
        return json_encode([
            'code' => $code,
            'message' => $message,
            'dev_message' => $dev_message,
            'data' => $data
        ], JSON_UNESCAPED_UNICODE);
    }

    public function getCodeByKey($key)
    {
        return $this->codeMsg[$key][0];
    }


}