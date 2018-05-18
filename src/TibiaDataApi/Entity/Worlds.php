<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

use TibiaDataApi\Entity\Worlds\World;

class Worlds
{

    use ImmutableTrait;

    /** @var int */
    private $online;

    /** @var World[] */
    private $worlds;

    public function __construct(int $online, array $worlds)
    {
        $this->handleImmutableConstructor();

        $this->online = $online;
        $this->worlds = $worlds;
    }

    /**
     * @return int
     */
    public function getOnline(): int
    {
        return $this->online;
    }

    /**
     * @return World[]
     */
    public function getWorlds(): array
    {
        return $this->worlds;
    }

}