<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Guild;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class Members implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;
    
    /** @var string */
    private $rank_title;

    /** @var Character[] */
    private $characters;

    public function __construct(string $rank_title, array $characters)
    {
        $this->handleImmutableConstructor();
        
        $this->rank_title = $rank_title;
        $this->characters = $characters;
    }

    /**
     * @return string
     */
    public function getRankTitle(): string
    {
        return $this->rank_title;
    }

    /**
     * @return Character[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

}
