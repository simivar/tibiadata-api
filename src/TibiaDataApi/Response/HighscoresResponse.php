<?php
declare(strict_types=1);

namespace TibiaDataApi\Response;

use TibiaDataApi\Entity\Highscores\Character;
use TibiaDataApi\Entity\Highscores;
use TibiaDataApi\Exception\NotFoundException;

class HighscoresResponse extends AbstractResponse
{

    /** @var Highscores */
    private $highscores;

    public function __construct(\stdClass $response)
    {
        if(isset($response->highscores->data->error)){
            throw new NotFoundException('World does not exists.');
        }

        $highscores = [];
        foreach($response->highscores->data as $highscore){
            $highscores[] = new Character(
                $highscore->name,
                $highscore->rank,
                $highscore->voc,
                $highscore->points ?? null,
                $highscore->level ?? null
            );
        }

        $this->highscores = new Highscores(
            $response->highscores->world,
            $response->highscores->type,
            $highscores
        );

        parent::__construct($response);
    }

    /**
     * @return Highscores
     */
    public function getHighscores(): Highscores
    {
        return $this->highscores;
    }

}
