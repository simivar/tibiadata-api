<?php
declare(strict_types=1);

namespace TibiaDataApi\Response;

use TibiaDataApi\Entity\Guilds;
use TibiaDataApi\Entity\Guilds\Guild;
use TibiaDataApi\Exception\NotFoundException;

/**
 * @see https://tibiadata.com/doc-api-v2/guilds/
 */
class GuildsResponse extends AbstractResponse
{

    /** @var Guilds */
    private $guilds;

    public function __construct(\stdClass $response)
    {
        if(empty($response->guilds->active) && empty($response->guilds->formation)){
            throw new NotFoundException('Guilds do not exists. Are you sure server name is valid?');
        }

        $active = array();
        foreach($response->guilds->active as $activeGuild){
            $active[] = new Guild($activeGuild->name, $activeGuild->desc, $activeGuild->guildlogo, true);
        }

        $formation = array();
        foreach($response->guilds->formation as $inactiveGuild){
            $formation[] = new Guild($inactiveGuild->name, $inactiveGuild->desc, $inactiveGuild->guildlogo, false);
        }

        $this->guilds = new Guilds($response->guilds->world, $active, $formation);

        parent::__construct($response);
    }

    /**
     * @return Guilds
     */
    public function getGuilds(): Guilds
    {
        return $this->guilds;
    }
    
}
