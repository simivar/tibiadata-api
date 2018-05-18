<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

class Newslist
{

    use ImmutableTrait;

    /** @var string */
    private $type;

    /** @var News[] */
    private $news = [];

    public function __construct(string $type, array $news)
    {
        $this->handleImmutableConstructor();

        $this->type = $type;
        $this->news = $news;
    }

    /**
     * @return News[]
     */
    public function getNews(): array
    {
        return $this->news;
    }

}
