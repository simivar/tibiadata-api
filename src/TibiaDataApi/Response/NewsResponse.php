<?php
declare(strict_types=1);

namespace TibiaDataApi\Response;

use TibiaDataApi\Entity\News;
use TibiaDataApi\Exception\NotFoundException;

class NewsResponse extends AbstractResponse
{

    /** @var News */
    private $news;

    public function __construct(\stdClass $response)
    {
        if(isset($response->news->error)){
            throw new NotFoundException('News does not exists.');
        }

        $this->news = new News(
            $response->news->id,
            $response->news->title,
            $response->news->content,
            new \DateTime($response->news->date->date, new \DateTimeZone($response->news->date->timezone))
        );

        parent::__construct($response);
    }

    public function getNews(): News
    {
        return $this->news;
    }

}
