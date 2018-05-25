<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\World;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class Character implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $name;

    /** @var string */
    private $vocation;

    /** @var int */
    private $level;

    public function __construct(string $name, int $level, string $vocation)
    {
        $this->handleImmutableConstructor();

        $this->name = $name;
        $this->vocation = $vocation;
        $this->level = $level;
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
    public function getVocation(): string
    {
        return $this->vocation;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

}
