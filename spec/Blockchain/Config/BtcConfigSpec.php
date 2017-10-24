<?php

namespace spec\Blockchain\Config;

use Blockchain\Config\BtcConfig;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BtcConfigSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $host = 'localhost';
        $port = '18556';
        $rpcUser = 'myuser';
        $rpcPass = 'SomeDecentp4ssw0rd';

        $this->beConstructedWith($host, $port, $rpcUser, $rpcPass);
        $this->shouldHaveType(BtcConfig::class);

        $this->getHost()->shouldBe($host);
        $this->getPort()->shouldBe($port);
        $this->getRpcUser()->shouldBe($rpcUser);
        $this->getRpcPass()->shouldBe($rpcPass);
    }

    function it_is_initializable_without_arguments()
    {
        $host = 'localhost';
        $port = '18556';
        $rpcUser = 'myuser';
        $rpcPass = 'SomeDecentp4ssw0rd';

        $this->shouldHaveType(BtcConfig::class);

        $this->getHost()->shouldBe($host);
        $this->getPort()->shouldBe($port);
        $this->getRpcUser()->shouldBe($rpcUser);
        $this->getRpcPass()->shouldBe($rpcPass);
    }
}
