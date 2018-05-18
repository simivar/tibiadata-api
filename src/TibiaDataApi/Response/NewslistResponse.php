<?php
declare(strict_types=1);

namespace TibiaDataApi\Response;

use TibiaDataApi\Entity\Newslist;
use TibiaDataApi\Entity\Newslist\News;

class NewslistResponse extends AbstractResponse
{

    /** @var Newslist */
    private $newslist;

    public function __construct(\stdClass $response)
    {
        $news = array();
        foreach($response->newslist->data as $item){
            $news[] = new News(
                $item->id,
                $item->type,
                $item->news,
                $item->apiurl,
                $item->tibiaurl,
                new \DateTime($item->date->date, new \DateTimeZone($item->date->timezone))
            );
        }

        $this->newslist = new Newslist($response->newslist->type, $news);

        parent::__construct($response);
    }

    public function getNewslist(): Newslist
    {
        return $this->newslist;
    }

}
