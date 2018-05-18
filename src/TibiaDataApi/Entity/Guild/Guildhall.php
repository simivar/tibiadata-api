<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Guild;

use TibiaDataApi\Entity\ImmutableTrait;

class Guildhall
{

    use ImmutableTrait;

    /** @var string */
    private $name;

    /** @var string */
    private $town;

    /** @var \DateTime */
    private $paid;

    /** @var string */
    private $world;

    /** @var int */
    private $houseid;

    public function __construct(string $name, string $town, \DateTime $paid, string $world, int $houseid)
    {
        $this->handleImmutableConstructor();
        
        $this->name = $name;
        $this->town = $town;
        $this->paid = $paid;
        $this->world = $world;
        $this->houseid = $houseid;
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
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @return \DateTime
     */
    public function getPaid(): \DateTime
    {
        return $this->paid;
    }

    /**
     * @return string
     */
    public function getWorld(): string
    {
        return $this->world;
    }

    /**
     * @return int
     */
    public function getHouseid(): int
    {
        return $this->houseid;
    }

}
