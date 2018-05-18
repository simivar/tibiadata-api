<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Guild;

use TibiaDataApi\Entity\ImmutableTrait;

class Invited
{

    use ImmutableTrait;

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
