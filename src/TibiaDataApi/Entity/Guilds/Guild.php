<?
declare(strict_types=1);

namespace TibiaDataApi\Entity\Guilds;

use TibiaDataApi\Entity\ImmutableTrait;
use TibiaDataApi\Entity\SerializableTrait;

class Guild implements \JsonSerializable
{

    use ImmutableTrait, SerializableTrait;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /** @var string */
    private $logo_url;

    /** @var bool */
    private $is_active;

    public function __construct(string $name, string $description, string $logo_url, bool $is_active)
    {
        $this->handleImmutableConstructor();

        $this->name = $name;
        $this->description = $description;
        $this->logo_url = $logo_url;
        $this->is_active = $is_active;
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
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logo_url;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->is_active;
    }
    
}
