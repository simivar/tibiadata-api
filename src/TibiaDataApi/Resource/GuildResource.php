<?php
declare(strict_types=1);

namespace TibiaDataApi\Resources;

use TibiaDataApi\Response\GuildResponse;

/**
 * @see https://tibiadata.com/doc-api-v2/guilds/
 */
class GuildResource extends AbstractResource
{
    
    public function get(string $name): GuildResponse
    {
        $response = $this->sendRequest('GET', "guild/{$name}.json");

        return new GuildResponse($response);
    }
    
}
