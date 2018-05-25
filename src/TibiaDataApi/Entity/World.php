<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

use TibiaDataApi\Entity\World\Character;
use TibiaDataApi\Entity\World\OnlineRecord;

class World implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $name;

    /** @var int */
    private $online;

    /** @var OnlineRecord */
    private $online_record;

    /** @var string (YYYY-MM) */
    private $creation_date;

    /** @var string */
    private $location;

    /** @var string */
    private $pvp_type;

    /** @var array */
    private $world_quest_titles;

    /** @var string */
    private $battleye_status;

    /** @var Character[] */
    private $players_online;

    public function __construct(string $name, int $online)
    {
        $this->handleImmutableConstructor();

        $this->name = $name;
        $this->online = $online;
    }

    public static function createFromArray(array $array)
    {
        $world = new self($array['name'], $array['online']);

        $world->creation_date = $array['creation_date'];
        $world->location = $array['location'];
        $world->pvp_type = $array['pvp_type'];
        $world->battleye_status = $array['battleye_status'];
        $world->online_record = $array['online_record'];
        $world->players_online = $array['players_online'];
        $world->world_quest_titles = $array['world_quest_titles'];

        return $world;
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
    public function getOnline(): int
    {
        return $this->online;
    }

    /**
     * @return OnlineRecord
     */
    public function getOnlineRecord(): OnlineRecord
    {
        return $this->online_record;
    }

    /**
     * @return string
     */
    public function getCreationDate(): string
    {
        return $this->creation_date;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getPvpType(): string
    {
        return $this->pvp_type;
    }

    /**
     * @return array
     */
    public function getWorldQuestTitles(): array
    {
        return $this->world_quest_titles;
    }

    /**
     * @return string
     */
    public function getBattleyeStatus(): string
    {
        return $this->battleye_status;
    }

    /**
     * @return Character[]
     */
    public function getPlayersOnline(): array
    {
        return $this->players_online;
    }

}
