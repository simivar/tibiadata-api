<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Highscores;

use TibiaDataApi\Entity\ImmutableTrait;

class Character
{

    use ImmutableTrait;

    /** @var string */
    private $name;

    /** @var int */
    private $rank;

    /** @var string */
    private $vocation;

    /** @var float */
    private $points;

    /** @var int */
    private $level;

    public function __construct(string $name, int $rank, string $vocation, float $points, int $level)
    {
        $this->handleImmutableConstructor();

        $this->name = $name;
        $this->rank = $rank;
        $this->vocation = $vocation;
        $this->points = $points;
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
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @return string
     */
    public function getVocation(): string
    {
        return $this->vocation;
    }

    /**
     * @return float
     */
    public function getPoints(): float
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

}
