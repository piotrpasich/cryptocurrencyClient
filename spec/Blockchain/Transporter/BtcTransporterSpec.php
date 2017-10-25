<?php

namespace spec\Blockchain\Transporter;

use Blockchain\Config\BtcConfig;
use Blockchain\Transporter\BtcTransporter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BtcTransporterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(new BtcConfig());
        $this->shouldHaveType(BtcTransporter::class);
    }
}
