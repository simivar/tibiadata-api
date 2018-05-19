<?php
declare(strict_types=1);

namespace TibiaDataApi\Resource;

use TibiaDataApi\TibiaData;

class AbstractResource
{
    
    const API_URL = 'v2/';

    /** @var TibiaData */
    protected $tibiaData;
    
    public function __construct(TibiaData $tibiaData)
    {
        $this->tibiaData = $tibiaData;
    }
    
    protected function sendRequest(
        $method,
        $uri,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    ): \stdClass {
        $req =  $this->tibiaData->getRequestFactory()->createRequest($method, self::API_URL . $uri, $headers, $body, $protocolVersion);
        
        return json_decode($this->tibiaData->getHttpClient()->sendRequest($req)->getBody()->getContents());
    }
    
}
