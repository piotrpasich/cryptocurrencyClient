<?php

namespace Blockchain\Builder\Btc;

use Blockchain\Model\Block;

class BlockBuilder
{
    public function build(array $block)
    {
        return new Block(
            $block['hash'],
            $block['confirmations'],
            $block['strippedsize'],
            $block['size'],
            $block['weight'],
            $block['height'],
            $block['version'],
            $block['versionHex'],
            $block['merkleroot'],
            $block['tx'],
            $block['time'],
            $block['nonce'],
            $block['bits'],
            $block['difficulty'],
            $block['previousblockhash'],
            $block['nextblockhash']
        );
    }
}
