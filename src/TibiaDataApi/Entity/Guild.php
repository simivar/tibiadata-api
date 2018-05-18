<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

use TibiaDataApi\Entity\Guild\Guildhall;
use TibiaDataApi\Entity\Guild\Members;
use TibiaDataApi\Entity\Guild\Invited;

class Guild
{

    use ImmutableTrait;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /** @var Guildhall|null */
    private $guildhall;

    /** @var bool */
    private $application;

    /** @var bool */
    private $war;

    /** @var int */
    private $online_status;

    /** @var int */
    private $offline_status;

    /** @var bool */
    private $disbanded;

    /** @var int */
    private $totalmembers;

    /** @var int */
    private $totalinvited;

    /** @var string */
    private $world;

    /** @var \DateTime */
    private $founded;

    /** @var bool */
    private $active;

    /** @var string */
    private $homepage;

    /** @var string */
    private $guildlogo;

    /** @var Members */
    private $members;

    /** @var Invited */
    private $invited;

    public function __construct(string $name, string $description, string $world)
    {
        $this->handleImmutableConstructor();

        $this->name = $name;
        $this->description = $description;
        $this->world = $world;
    }

    public static function createFromArray(array $array): Guild
    {
        $guild = new Guild($array['name'], $array['description'], $array['world']);

        $guild->guildhall = $array['guildhall'];
        $guild->application = $array['application'];
        $guild->war = $array['war'];
        $guild->online_status = $array['online_status'];
        $guild->offline_status = $array['offline_status'];
        $guild->disbanded = $array['disbanded'];
        $guild->totalmembers = $array['totalmembers'];
        $guild->totalinvited = $array['totalinvited'];
        $guild->founded = $array['founded'];
        $guild->active = $array['active'];
        $guild->homepage = $array['homepage'];
        $guild->guildlogo = $array['guildlogo'];
        $guild->members = $array['members'];
        $guild->invited = $array['invited'];

        return $guild;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return Guildhall|null
     */
    public function getGuildhall(): ?Guildhall
    {
        return $this->guildhall;
    }

    /**
     * @return bool
     */
    public function isApplication(): bool
    {
        return $this->application;
    }

    /**
     * @return bool
     */
    public function isWar(): bool
    {
        return $this->war;
    }

    /**
     * @return int
     */
    public function getOnlineStatus(): int
    {
        return $this->online_status;
    }

    /**
     * @return int
     */
    public function getOfflineStatus(): int
    {
        return $this->offline_status;
    }

    /**
     * @return bool
     */
    public function isDisbanded(): bool
    {
        return $this->disbanded;
    }

    /**
     * @return int
     */
    public function getTotalmembers(): int
    {
        return $this->totalmembers;
    }

    /**
     * @return int
     */
    public function getTotalinvited(): int
    {
        return $this->totalinvited;
    }

    /**
     * @return string
     */
    public function getWorld(): string
    {
        return $this->world;
    }

    /**
     * @return \DateTime
     */
    public function getFounded(): \DateTime
    {
        return $this->founded;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @return string
     */
    public function getHomepage(): string
    {
        return $this->homepage;
    }

    /**
     * @return string
     */
    public function getGuildlogo(): string
    {
        return $this->guildlogo;
    }

    /**
     * @return Members
     */
    public function getMembers(): Members
    {
        return $this->members;
    }

    /**
     * @return Invited
     */
    public function getInvited(): Invited
    {
        return $this->invited;
    }

}
