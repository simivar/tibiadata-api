<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

use TibiaDataApi\Exception\ImmutableException;

trait ImmutableTrait
{

    /** @var bool */
    protected $mutable = true;

    public function handleImmutableConstructor()
    {
        if(!$this->mutable){
            throw new ImmutableException();
        }

        $this->mutable = false;
    }

    public function __set($key, $value)
    {
        throw new ImmutableException();
    }

}
