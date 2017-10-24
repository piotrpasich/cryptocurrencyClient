<?php

namespace Blockchain\Config;


interface Config
{
    public function getHost();

    public function getPort();

    public function getRpcUser();

    public function getRpcPass();
}
