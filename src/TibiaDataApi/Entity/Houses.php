<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

use TibiaDataApi\Entity\Houses\House;

class Houses implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $town;

    /** @var string */
    private $world;

    /** @var string */
    private $type;

    /** @var House[] */
    private $houses;

    public function __construct(string $town, string $world, string $type, array $houses)
    {
        $this->handleImmutableConstructor();

        $this->town = $town;
        $this->world = $world;
        $this->type = $type;
        $this->houses = $houses;
    }

    /**
     * @return string
     */
    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @return string
     */
    public function getWorld(): string
    {
        return $this->world;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return House[]
     */
    public function getHouses(): array
    {
        return $this->houses;
    }

}
