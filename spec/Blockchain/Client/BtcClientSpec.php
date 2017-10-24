<?php

namespace spec\Blockchain\Client;

use Blockchain\Client\BtcClient;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BtcClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BtcClient::class);
    }
}
