<?php
declare(strict_types=1);

namespace TibiaDataApi\Entity;

trait SerializableTrait
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}
