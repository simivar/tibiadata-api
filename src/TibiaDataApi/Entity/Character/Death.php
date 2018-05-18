<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Character;

use TibiaDataApi\Entity\ImmutableTrait;

class Death
{

    use ImmutableTrait;

    /** @var \DateTime */
    private $date;

    /** @var int */
    private $level;

    /** @var string */
    private $reason;

    /** @var array */
    private $involved;

    public function __construct(\DateTime $date, int $level, string $reason, array $involved)
    {
        $this->handleImmutableConstructor();
        
        $this->date = $date;
        $this->level = $level;
        $this->reason = $reason;
        $this->involved = $involved;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @return array
     */
    public function getInvolved(): array
    {
        return $this->involved;
    }

}
