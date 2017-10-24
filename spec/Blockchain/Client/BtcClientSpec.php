<?php

namespace spec\Blockchain\Client;

use Blockchain\Client\BtcClient;
use Blockchain\Config\BtcConfig;
use JsonRpc\Client as JsonRpcClient;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BtcClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(new BtcConfig());
        $this->shouldHaveType(BtcClient::class);
    }

    function it_can_connect_with_blockchain()
    {
        $this->beConstructedWith(new BtcConfig());
        $this->connect()->shouldHaveType(JsonRpcClient::class);
    }
}
