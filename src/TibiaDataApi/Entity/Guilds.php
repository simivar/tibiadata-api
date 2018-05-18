<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

use TibiaDataApi\Entity\Guilds\Guild;

class Guilds
{

    use ImmutableTrait;

    /** @var string */
    private $world;

    /** @var Guild[] */
    private $active;

    /** @var Guild[] */
    private $formation;

    public function __construct(string $world, array $active, array $formation)
    {
        $this->handleImmutableConstructor();
        
        $this->world = $world;
        $this->active = $active;
        $this->formation = $formation;
    }

    /**
     * @return string
     */
    public function getWorld(): string
    {
        return $this->world;
    }

    /**
     * @return Guild[]
     */
    public function getActive(): array
    {
        return $this->active;
    }

    /**
     * @return Guild[]
     */
    public function getFormation(): array
    {
        return $this->formation;
    }

}
