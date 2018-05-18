<?php
declare(strict_types=1);

namespace TibiaDataApi\Exception;

use Throwable;

class ImmutableException extends \Exception
{

    public function __construct(string $message = '', int $code = 0, Throwable $previous = null) {
        if($message === ''){
            $message = sprintf('Class %s is immutable.', debug_backtrace()[1]['class']);
        }

        parent::__construct($message, $code, $previous);
    }
    
}
