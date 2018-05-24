<?php
declare(strict_types=1);

namespace TibiaDataApi\Response;

use TibiaDataApi\Entity\World;
use TibiaDataApi\Entity\World\Character;
use TibiaDataApi\Entity\World\OnlineRecord;
use TibiaDataApi\Exception\NotFoundException;

class WorldResponse extends AbstractResponse
{

    /** @var World */
    private $world;

    public function __construct(\stdClass $response)
    {
        if(!isset($response->world->world_information->pvp_type)){
            throw new NotFoundException('World does not exists.');
        }

        $players_online = [];
        foreach ($response->world->players_online as $player) {
            $players_online[] = new Character(
                $player->name, $player->level, $player->vocation
            );
        }

        $this->world = World::createFromArray([
            'name' => $response->world->world_information->name,
            'online' => $response->world->world_information->players_online,
            'creation_date' => $response->world->world_information->creation_date,
            'location' => $response->world->world_information->location,
            'pvp_type' => $response->world->world_information->pvp_type,
            'battleye_status' => $response->world->world_information->battleye_status,
            'online_record' => new OnlineRecord(
                $response->world->world_information->online_record->players,
                new \DateTime(
                    $response->world->world_information->online_record->date->date,
                    new \DateTimeZone($response->world->world_information->online_record->date->timezone)
                )
            ),
            'players_online' => $players_online,
            'world_quest_titles' => $response->world->world_information->world_quest_titles,
        ]);

        parent::__construct($response);
    }

    /**
     * @return World
     */
    public function getWorld(): World
    {
        return $this->world;
    }

}
