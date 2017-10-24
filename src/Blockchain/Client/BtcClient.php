<?php

namespace Blockchain\Client;

use Blockchain\Client\BlockchainClient;
use Blockchain\Config\BtcConfig;
use JsonRpc\Client as JsonRpcClient;

class BtcClient implements BlockchainClient
{
    /**
     * @var BtcConfig
     */
    protected $config;

    public function __construct(BtcConfig $config)
    {
        $this->config = $config;
    }

    public function connect()
    {
        return new JsonRpcClient(
            sprintf("https://%s:%s@%s:%d",
                $this->config->getRpcUser(),
                $this->config->getRpcPass(),
                $this->config->getHost(),
                $this->config->getPort()
            ));
    }
}
