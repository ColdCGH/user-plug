<?php


namespace ColdCGH\User\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Base
{
    private array $guzzleOptions;

    /**
     * Base constructor.
     */
    public function __construct()
    {

    }

    /**
     * 用户可以自定义 guzzle 实例的参数
     * @param array $options
     */
    public function setGuzzleOptions(array $options)
    {
        $this->guzzleOptions = $options;
    }

    /**
     * 创建一个方法用于返回 guzzle 实例
     * @return Client
     */
    public function getHttpClient(): Client
    {
        return new Client($this->guzzleOptions);
    }
}