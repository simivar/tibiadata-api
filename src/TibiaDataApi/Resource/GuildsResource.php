<?php
declare(strict_types=1);

namespace TibiaDataApi\Resource;

use TibiaDataApi\Response\GuildsResponse;

/**
 * @see https://tibiadata.com/doc-api-v2/characters/
 */
class GuildsResource extends AbstractResource
{
    
    public function get(string $server): GuildsResponse
    {
        $response = $this->sendRequest('GET', "guilds/{$server}.json");

        return new GuildsResponse($response);
    }
    
}
