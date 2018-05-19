<?php
declare(strict_types=1);

namespace TibiaDataApi\Resource;

use TibiaDataApi\Response\HousesResponse;

/**
 * @see https://tibiadata.com/doc-api-v2/houses/
 */
class HousesResource extends AbstractResource
{

    const TYPE_HOUSES = 'houses';
    const TYPE_GUILDHALLS = 'guildhalls';
    
    public function get($world, $town = 'Ab\'Dendriel', $type = self::TYPE_HOUSES)
    {
        if(!self::isAvailableType($type)){
            throw new \InvalidArgumentException('Invalid type.');
        }

        $response = $this->sendRequest('GET', "houses/{$world}/{$town}/{$type}.json");
        
        return new HousesResponse($response);
    }

    public static function isAvailableType(string $type): bool
    {
        return in_array($type, self::getAvailableTypes());
    }

    public static function getAvailableTypes(): array
    {
        return [self::TYPE_HOUSES, self::TYPE_GUILDHALLS];
    }
    
}
