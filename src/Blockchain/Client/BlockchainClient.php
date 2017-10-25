<?php

namespace Blockchain\Client;

use Blockchain\Transporter\BtcTransporter;
use JsonRPC\Request\RequestBuilder;
use JsonRPC\Response\ResponseParser;

abstract class BlockchainClient
{
    /**
     * @var BtcConfig
     */
    protected $config;

    /**
     * @var JsonRpcClient
     */
    protected $connection;

    public function getConnection()
    {
        if (!empty($this->connection)) {
            return $this->connection;
        }

        $this->connection = new BtcTransporter($this->config);

        return $this->connection;
    }

    public function call($method, $params = [])
    {
        $payload = RequestBuilder::create()
            ->withProcedure($method)
            ->withParams($params)
            ->build();

        return ResponseParser::create()
            ->withPayload($this->getConnection()->execute($payload))
            ->parse();
    }
}