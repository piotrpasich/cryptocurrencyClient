<?php

namespace spec\Blockchain\Repository;

use Blockchain\Client\BtcClient;
use Blockchain\Config\BtcConfig;
use Blockchain\Exception\BlockNotFoundException;
use Blockchain\Repository\BlockRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BlockRepositorySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new BtcClient(new BtcConfig()));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(BlockRepository::class);
    }

    function it_gets_best_block_hash()
    {
        $this->getBestBlockHash()->shouldBeString();
    }

    function it_returns_a_block()
    {
        $this->getBlock("7c97e35975786a4e9f3a65d0279d42965bd5376458c787bcd7a2a123503e8c07")->shouldHaveType(Block::class);
    }

    function it_throws_error_when_block_not_found()
    {
        $this->shouldThrow(BlockNotFoundException::class)
            ->during('getBlock', ["66ad3c92eec8fe87c2a25aed520d5d1bc53b71c75cd6dcbafb0693380fd2dddd"]);
    }
}
