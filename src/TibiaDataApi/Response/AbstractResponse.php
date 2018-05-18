<?php
declare(strict_types=1);

namespace TibiaDataApi\Response;

use TibiaDataApi\Entity\Information;

class AbstractResponse
{

    /** @var Information */
    private $information;

    public function __construct(\stdClass $response)
    {
        $this->information = new Information(
            $response->information->api_version,
            $response->information->execution_time,
            new \DateTime($response->information->last_updated),
            new \DateTime($response->information->timestamp)
        );
    }

    /**
     * @return Information
     */
    public function getInformation(): Information
    {
        return $this->information;
    }

}
