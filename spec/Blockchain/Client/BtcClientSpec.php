<?php

namespace spec\Blockchain\Client;

use Blockchain\Client\BtcClient;
use Blockchain\Config\BtcConfig;
use Blockchain\Model\Block;
use Blockchain\Transporter\BtcTransporter;
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
        $this->getConnection()->shouldHaveType(BtcTransporter::class);
    }

    function it_can_call_blockchain()
    {
        $this->beConstructedWith(new BtcConfig());
        $this->call('getblockchaininfo')->shouldNotReturn(false);
    }
}
