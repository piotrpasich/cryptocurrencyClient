<?php

namespace Blockchain\Client;

use Blockchain\Builder\Btc\BlockBuilder;
use Blockchain\Client\BlockchainClient;
use Blockchain\Config\BtcConfig;


class BtcClient extends BlockchainClient
{
    public function __construct(BtcConfig $config)
    {
        $this->config = $config;
    }
}
