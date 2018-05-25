<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Houses;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class House implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var int */
    private $houseid;

    /** @var string */
    private $name;

    /** @var int */
    private $size;

    /** @var int */
    private $rent;

    /** @var string */
    private $status;

    public function __construct(int $id, string $name, int $size, int $rent, string $status)
    {
        $this->handleImmutableConstructor();
        
        $this->houseid = $id;
        $this->name = $name;
        $this->size = $size;
        $this->rent = $rent;
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getHouseid(): int
    {
        return $this->houseid;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getRent(): int
    {
        return $this->rent;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    public function isRented()
    {
        return $this->status === 'rented';
    }

}
