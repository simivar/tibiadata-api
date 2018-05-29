<?php
declare(strict_types=1);

namespace TibiaDataApi\Resource;

use TibiaDataApi\Response\NewslistResponse;
use TibiaDataApi\Response\NewsResponse;

/**
 * @see https://tibiadata.com/doc-api-v2/news/
 */
class NewsResource extends AbstractResource
{
    
    public function get($id)
    {
        $response = $this->sendRequest('GET', "/news/{$id}.json");
        
        return new NewsResponse($response);
    }

    public function getLatestNews()
    {
        $response = $this->sendRequest('GET', "/latestnews.json");

        return new NewslistResponse($response);
    }

    public function getNewstickers()
    {
        $response = $this->sendRequest('GET', "/newstickers.json");

        return new NewslistResponse($response);
    }
    
}
