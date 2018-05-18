<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity\Newslist;

use TibiaDataApi\Entity\ImmutableTrait;

class News
{

    use ImmutableTrait;

    /** @var int */
    private $id;

    /** @var string */
    private $type;

    /** @var string */
    private $news;

    /** @var string */
    private $apiurl;

    /** @var string */
    private $tibiaurl;

    /** @var \DateTime */
    private $date;

    public function __construct(int $id, string $type, string $news, string $apiurl, string $tibiaurl, \DateTime $date)
    {
        $this->handleImmutableConstructor();

        $this->id = $id;
        $this->type = $type;
        $this->news = $news;
        $this->apiurl = $apiurl;
        $this->tibiaurl = $tibiaurl;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getNews(): string
    {
        return $this->news;
    }

    /**
     * @return string
     */
    public function getApiurl(): string
    {
        return $this->apiurl;
    }

    /**
     * @return string
     */
    public function getTibiaurl(): string
    {
        return $this->tibiaurl;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

}
