<?php

namespace Blockchain\Config;

use Blockchain\Config\Config;

class BtcConfig implements Config
{
    protected $host = 'localhost';
    protected $port = '18556';
    protected $rpcUser = 'myuser';
    protected $rpcPass = 'SomeDecentp4ssw0rd';
    protected $cafile = '/home/papi/.btcwallet/rpc.cert';

    public function __construct($host = null, $port = null, $rpcUser = null, $rpcPass = null, $cafile = null)
    {
        $this->host = $host ?: $this->host;
        $this->port = $port ?: $this->port;
        $this->rpcUser = $rpcUser ?: $this->rpcUser;
        $this->rpcPass = $rpcPass ?: $this->rpcPass;
        $this->cafile = $cafile;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getRpcUser()
    {
        return $this->rpcUser;
    }

    public function getRpcPass()
    {
        return $this->rpcPass;
    }

    public function getCafile()
    {
        return $this->cafile;
    }
}
