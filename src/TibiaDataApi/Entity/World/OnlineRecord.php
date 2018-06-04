<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\World;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class OnlineRecord implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var int */
    private $number;

    /** @var \DateTime */
    private $date;

    public function __construct(int $number, \DateTime $date)
    {
        $this->handleImmutableConstructor();

        $this->number = $number;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

}
