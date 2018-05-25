<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Guild;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class Character implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $name;

    /** @var string */
    private $nick;

    /** @var int */
    private $level;

    /** @var string */
    private $vocation;

    /** @var \DateTime */
    private $joined;

    /** @var string */
    private $status;

    public function __construct(string $name, string $nick, int $level, string $vocation, \DateTime $joined, string $status)
    {
        $this->handleImmutableConstructor();
        
        $this->name = $name;
        $this->nick = $nick;
        $this->level = $level;
        $this->vocation = $vocation;
        $this->joined = $joined;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNick(): string
    {
        return $this->nick;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getVocation(): string
    {
        return $this->vocation;
    }

    /**
     * @return \DateTime
     */
    public function getJoined(): \DateTime
    {
        return $this->joined;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

}
