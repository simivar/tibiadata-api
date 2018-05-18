<?php
declare(strict_types=1);

namespace TibiaDataApi;

use TibiaDataApi\Resources;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Message\Authentication;
use Http\Message\MessageFactory;

/**
 * Class TibiaData
 * @package TibiaDataApi
 *
 * @method Resources\CharactersResource getCharactersResource()
 * @method Resources\GuildResource getGuildResource()
 * @method Resources\GuildsResource getGuildsResource()
 * @method Resources\HighscoresResource getHighscoresResource()
 */
class TibiaData
{

    /** @var MessageFactory */
    protected $requestFactory;

    /** @var PluginClient */
    protected $httpClient;

    /** @var array All created resource objects */
    protected $resourceObjects = [];

    /**
     * ClientGenius constructor.
     *
     * @param HttpClient|null $httpClient
     */
    public function __construct(HttpClient $httpClient = null)
    {
        $this->requestFactory = MessageFactoryDiscovery::find();

        $connection = new Connection();
        if ($httpClient !== null) {
            $connection->setHttpClient($httpClient);
        }

        $this->httpClient = $connection->createConnection();
    }

    /**
     * @return PluginClient
     */
    public function getHttpClient(): PluginClient
    {
        return $this->httpClient;
    }

    /**
     * @return MessageFactory
     */
    public function getRequestFactory(): MessageFactory
    {
        return $this->requestFactory;
    }

    public function __call(string $name, array $arguments)
    {
        if (strpos($name, 'get') !== 0) {
            return false;
        }

        $name = '\\TibiaDataApi\\Resources\\' . substr($name, 3);
        if (!class_exists($name)) {
            return false;
        }

        if (isset($this->resourceObjects[ $name ])) {
            return $this->resourceObjects[ $name ];
        }

        $this->resourceObjects[ $name ] = new $name($this);

        return $this->resourceObjects[ $name ];
    }

}
