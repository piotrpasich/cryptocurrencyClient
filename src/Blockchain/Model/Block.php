<?php

namespace Blockchain\Model;

class Block
{
    private $hash;
    private $confirmations;
    private $strippedsize;
    private $size;
    private $weight;
    private $height;
    private $version;
    private $versionHex;
    private $merkleroot;
    private $tx;
    private $time;
    private $nonce;
    private $bits;
    private $difficulty;
    private $previousblockhash;
    private $nextblockhash;

    /**
     * Block constructor.
     * @param $hash
     * @param $confirmations
     * @param $strippedsize
     * @param $size
     * @param $weight
     * @param $height
     * @param $version
     * @param $versionHex
     * @param $merkleroot
     * @param $tx
     * @param $time
     * @param $nonce
     * @param $bits
     * @param $difficulty
     * @param $previousblockhash
     * @param $nextblockhash
     */
    public function __construct(
        $hash,
        $confirmations,
        $strippedsize,
        $size,
        $weight,
        $height,
        $version,
        $versionHex,
        $merkleroot,
        array $tx,
        $time,
        $nonce,
        $bits,
        $difficulty,
        $previousblockhash,
        $nextblockhash
    ) {
        $this->hash = $hash;
        $this->confirmations = $confirmations;
        $this->strippedsize = $strippedsize;
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->version = $version;
        $this->versionHex = $versionHex;
        $this->merkleroot = $merkleroot;
        $this->tx = $tx;
        $this->time = $time;
        $this->nonce = $nonce;
        $this->bits = $bits;
        $this->difficulty = $difficulty;
        $this->previousblockhash = $previousblockhash;
        $this->nextblockhash = $nextblockhash;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @return string
     */
    public function getConfirmations()
    {
        return $this->confirmations;
    }

    /**
     * @return string
     */
    public function getStrippedsize()
    {
        return $this->strippedsize;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getVersionHex()
    {
        return $this->versionHex;
    }

    /**
     * @return string
     */
    public function getMerkleroot()
    {
        return $this->merkleroot;
    }

    /**
     * @return array
     */
    public function getTx()
    {
        return $this->tx;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * @return string
     */
    public function getBits()
    {
        return $this->bits;
    }

    /**
     * @return string
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * @return string
     */
    public function getPreviousblockhash()
    {
        return $this->previousblockhash;
    }

    /**
     * @return string
     */
    public function getNextblockhash()
    {
        return $this->nextblockhash;
    }
}
