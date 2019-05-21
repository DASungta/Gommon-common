<?php


namespace common\vo;


class ResultVo
{
    private $code = 0;
    private $message = 'OK';
    private $dev_message = 'OK';
    private $data = null;

    /**
     * ResultVo constructor.
     * @param int $code
     * @param string $message
     * @param string $dev_message
     * @param null $data
     */
    public function __construct(int $code, string $message, string $dev_message, $data)
    {
        $this->code = $code;
        $this->message = $message;
        $this->dev_message = $dev_message;
        $this->data = $data;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getDevMessage(): string
    {
        return $this->dev_message;
    }

    /**
     * @param string $dev_message
     */
    public function setDevMessage(string $dev_message): void
    {
        $this->dev_message = $dev_message;
    }

    /**
     * @return null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param null $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }


}