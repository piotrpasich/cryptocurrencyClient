<?php

namespace Blockchain\Exception;

class BlockNotFoundException extends \Exception
{
    protected $message = 'Block not found';
}
