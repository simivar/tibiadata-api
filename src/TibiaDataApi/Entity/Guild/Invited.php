<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Guild;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class Invited implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var Invitee[] */
    private $invitee;

    public function __construct(array $invitee)
    {
        $this->handleImmutableConstructor();
        
        $this->invitee = $invitee;
    }

    /**
     * @return Invitee[]
     */
    public function getInvitee(): array
    {
        return $this->invitee;
    }

}
