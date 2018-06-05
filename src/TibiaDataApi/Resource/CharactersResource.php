<?php
declare(strict_types=1);

namespace TibiaDataApi\Resource;

use TibiaDataApi\Response\CharacterResponse;

/**
 * @see https://tibiadata.com/doc-api-v2/characters/
 */
class CharactersResource extends AbstractResource
{
    
    public function get(string $name): CharacterResponse
    {
        $response = $this->sendRequest('GET', "characters/{$name}.json");
        
        return new CharacterResponse($response);
    }
    
}
