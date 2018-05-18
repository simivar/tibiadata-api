<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

use TibiaDataApi\Entity\Highscores\Character;

class Highscores
{

    use ImmutableTrait;

    /** @var string */
    private $world;

    /** @var string */
    private $type;

    /** @var Character[] */
    private $highscores;

    public function __construct(string $world, string $type, array $highscores)
    {
        $this->handleImmutableConstructor();

        $this->world = $world;
        $this->type = $type;
        $this->highscores = $highscores;
    }

    /**
     * @return string
     */
    public function getWorld(): string
    {
        return $this->world;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return Character[]
     */
    public function getHighscores(): array
    {
        return $this->highscores;
    }

}
