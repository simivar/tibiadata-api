<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Guild;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class Invitee implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $name;

    /** @var \DateTime */
    private $invited;

    public function __construct(string $name, \DateTime $invited)
    {
        $this->handleImmutableConstructor();
        
        $this->name = $name;
        $this->invited = $invited;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return \DateTime
     */
    public function getInvited(): \DateTime
    {
        return $this->invited;
    }

}
