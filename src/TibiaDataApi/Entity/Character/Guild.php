<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Character;

use TibiaDataApi\Entity\ImmutableTrait;

class Guild
{

    use ImmutableTrait;

    /** @var string */
    private $name;

    /** @var string */
    private $rank;

    public function __construct(string $name, string $rank)
    {
        $this->handleImmutableConstructor();

        $this->name = $name;
        $this->rank = $rank;
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
    public function getRank(): string
    {
        return $this->rank;
    }

}
