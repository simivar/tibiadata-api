<?php
declare(strict_types=1);

namespace TibiaDataApi\Resource;

use TibiaDataApi\Response\WorldsResponse;
use TibiaDataApi\Response\WorldResponse;

/**
 * @see https://tibiadata.com/doc-api-v2/worlds/
 */
class WorldsResource extends AbstractResource
{

    public function get(string $name): WorldResponse
    {
        $response = $this->sendRequest('GET', "/world/{$name}.json");

        return new WorldResponse($response);
    }

    public function getList(): WorldsResponse
    {
        $response = $this->sendRequest('GET', "/worlds.json");

        return new WorldsResponse($response);
    }
    
}
