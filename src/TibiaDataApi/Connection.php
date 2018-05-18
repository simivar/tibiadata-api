<?php
declare(strict_types=1);

namespace TibiaDataApi;

use Genius\Authentication\OAuth2;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\Authentication;
use Http\Message\UriFactory;
use Psr\Http\Message\UriInterface;

class Connection
{
    
    protected $endpoint = 'https://api.tibiadata.com/v2/';
    
    /** @var HttpClient */
    protected $httpClient;
    
    /** @var  UriFactory */
    protected $uriFactory;
    
    public function createConnection(): PluginClient
    {
        $plugins = [
            new AddHostPlugin($this->getUriFactory()->createUri($this->endpoint)),
        ];
        
        $client = new PluginClient(
            $this->getHttpClient(),
            $plugins
        );
        
        return $client;
    }
    
    public function setUriFactory(UriInterface $uriFactory): self
    {
        $this->uriFactory = $uriFactory;
        
        return $this;
    }
    
    public function getUriFactory()
    {
        if ($this->uriFactory === null) {
            $this->uriFactory = UriFactoryDiscovery::find();
        }
        
        return $this->uriFactory;
    }
    
    public function setHttpClient(HttpClient $httpClient): self
    {
        $this->httpClient = $httpClient;
        
        return $this;
    }
    
    protected function getHttpClient()
    {
        if ($this->httpClient === null) {
            $this->httpClient = HttpClientDiscovery::find();
        }
        
        return $this->httpClient;
    }
    
}
