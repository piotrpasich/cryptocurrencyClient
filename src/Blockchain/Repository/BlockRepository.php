<?php

namespace Blockchain\Repository;

use Blockchain\Builder\Btc\BlockBuilder;
use Blockchain\Client\BlockchainClient;
use Blockchain\Exception\BlockNotFoundException;

class BlockRepository
{
    /**
     * @var BlockchainClient
     */
    protected $blockchainClient;

    public function __construct(BlockchainClient $blockchainClient)
    {
        $this->blockchainClient = $blockchainClient;
    }

    public function getBlock($blockNumber)
    {
        $block = $this->blockchainClient->call('getblock', [$blockNumber]);

        if (is_null($block)) {
            throw new BlockNotFoundException();
        }

        return (new BlockBuilder())->build($block);
    }

    public function getBestBlockHash()
    {
        return $this->blockchainClient->call('getbestblockhash');
    }
}
