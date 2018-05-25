<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

class Information implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var int */
    private $api_version;

    /** @var float */
    private $execution_time;

    /** @var \DateTime */
    private $last_updated;

    /** @var \DateTime When request was made */
    private $timestamp;

    public function __construct(int $api_version, float $execution_time, \DateTime $last_update, \DateTime $timestamp)
    {
        $this->handleImmutableConstructor();

        $this->api_version = $api_version;
        $this->execution_time = $execution_time;
        $this->last_updated = $last_update;
        $this->timestamp = $timestamp;
    }

    /**
     * @return int
     */
    public function getApiVersion(): int
    {
        return $this->api_version;
    }

    /**
     * @return float
     */
    public function getExecutionTime(): float
    {
        return $this->execution_time;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated(): \DateTime
    {
        return $this->last_updated;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }

}
