<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Character;

use TibiaDataApi\Entity\ImmutableTrait;

class AccountInformation
{

    use ImmutableTrait;

    /** @var string */
    private $loyalty_title;

    /** @var \DateTime */
    private $created;

    public function __construct(string $loyalty_title, \DateTime $created)
    {
        $this->handleImmutableConstructor();
        
        $this->loyalty_title = $loyalty_title;
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getLoyaltyTitle(): string
    {
        return $this->loyalty_title;
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }

}
