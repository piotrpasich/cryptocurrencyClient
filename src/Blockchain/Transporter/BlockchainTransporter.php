<?php

namespace Blockchain\Transporter;

interface BlockchainTransporter
{
    public function execute($payload);
}
