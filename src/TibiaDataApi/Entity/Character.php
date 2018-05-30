<?php

namespace TibiaDataApi\Entity;

use TibiaDataApi\Entity\Character\AccountInformation;
use TibiaDataApi\Entity\Character\Achievement;
use TibiaDataApi\Entity\Character\Death;
use TibiaDataApi\Entity\Character\Guild;
use TibiaDataApi\Entity\Character\OtherCharacter;

class Character implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $name;

    /** @var array */
    private $former_names = array();

    /** @var string */
    private $sex;

    /** @var string */
    private $vocation;

    /** @var int */
    private $level;

    /** @var int */
    private $achievement_points;

    /** @var string */
    private $world;

    /** @var string|null */
    private $former_world;

    /** @var string */
    private $residence;
    
    /** @var Guild|null */
    private $guild;

    /** @var \DateTime */
    private $last_login;
    
    /** @var string */
    private $comment = '';
    
    /** @var string */
    private $account_status;

    /** @var string */
    private $status;

    /** @var Achievement[] */
    private $achivements = array();

    /** @var Death[] */
    private $deaths = array();

    /** @var AccountInformation */
    private $account_information;

    /** @var OtherCharacter[] */
    private $other_characters = array();

    public function __construct(string $name, string $vocation, int $level)
    {
        $this->handleImmutableConstructor();

        $this->name = $name;
        $this->vocation = $vocation;
        $this->level = $level;
    }

    public static function createFromArray(array $response): Character
    {
        $character = new Character($response['name'], $response['vocation'], $response['level']);

        $character->former_names = $response['former_names'];
        $character->sex = $response['sex'];
        $character->achievement_points = $response['achievement_points'];
        $character->world = $response['world'];
        $character->former_world = $response['former_world'];
        $character->residence = $response['residence'];
        $character->guild = $response['guild'];
        $character->last_login = $response['last_login'];
        $character->comment = $response['comment'];
        $character->account_status = $response['account_status'];
        $character->status = $response['status'];
        $character->achivements = $response['achivements'];
        $character->account_information = $response['account_information'];
        $character->deaths = $response['deaths'];
        $character->other_characters = $response['other_characters'];

        return $character;
    }

    /**
     * @return bool Returns true when characters has a premium account.
     */
    public function isPremium()
    {
        return $this->account_status === 'Premium Account';
    }

    /**
     * @return bool Returns true when character is online.
     */
    public function isOnline()
    {
        return $this->status === 'online';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getFormerNames(): array
    {
        return $this->former_names;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @return string
     */
    public function getVocation(): string
    {
        return $this->vocation;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getAchievementPoints(): int
    {
        return $this->achievement_points;
    }

    /**
     * @return string
     */
    public function getWorld(): string
    {
        return $this->world;
    }

    /**
     * @return string|null
     */
    public function getFormerWorld(): ?string
    {
        return $this->former_world;
    }

    /**
     * @return string
     */
    public function getResidence(): string
    {
        return $this->residence;
    }

    /**
     * @return Guild|null
     */
    public function getGuild(): ?Guild
    {
        return $this->guild;
    }

    /**
     * @return \DateTime
     */
    public function getLastLogin(): \DateTime
    {
        return $this->last_login;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @return string
     */
    public function getAccountStatus(): string
    {
        return $this->account_status;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return Achievement[]
     */
    public function getAchivements(): array
    {
        return $this->achivements;
    }

    /**
     * @return Death[]
     */
    public function getDeaths(): array
    {
        return $this->deaths;
    }

    /**
     * @return AccountInformation
     */
    public function getAccountInformation(): AccountInformation
    {
        return $this->account_information;
    }

    /**
     * @return OtherCharacter[]
     */
    public function getOtherCharacters(): array
    {
        return $this->other_characters;
    }

}
