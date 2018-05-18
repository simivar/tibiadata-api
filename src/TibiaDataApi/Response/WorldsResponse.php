<?php
declare(strict_types=1);

namespace TibiaDataApi\Response;

use TibiaDataApi\Entity\Worlds;
use TibiaDataApi\Entity\Worlds\World;

class WorldsResponse extends AbstractResponse
{

    /** @var Worlds */
    private $worlds;

    public function __construct(\stdClass $response)
    {
        $worlds = [];
        foreach($response->worlds->allworlds as $world){
            $worlds[] = new World(
                $world->name, $world->online, $world->location, $world->worldtype, $world->additional
            );
        }

        $this->worlds = new Worlds($response->worlds->online, $worlds);

        parent::__construct($response);
    }

    /**
     * @return Worlds
     */
    public function getWorlds(): Worlds
    {
        return $this->worlds;
    }

}
