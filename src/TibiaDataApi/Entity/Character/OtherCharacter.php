<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Character;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class OtherCharacter implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $name;

    /** @var string */
    private $world;

    /** @var string */
    private $status;

    public function __construct(string $name, string $world, string $status)
    {
        $this->handleImmutableConstructor();
        
        $this->name = $name;
        $this->world = $world;
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
    public function getWorld(): string
    {
        return $this->world;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

}
