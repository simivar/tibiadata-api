# TibiaData API
TibiaData API is a open source library that allows you to access [TibiaData API](https://tibiadata.com/) from your PHP application.

## Getting started
TibiaData API is avialable via [Composer](https://getcomposer.org/). It uses [HTTPlug](http://httplug.io/) abstraction so you are free to choose any HTTP Client you want that depends on [php-http/client-implementation virutal package](https://packagist.org/providers/php-http/client-implementation). 

```
composer require simivar/tibiadata-api php-http/message php-http/guzzle6-adapter
```

## Usage
> **Note:** This version of TibiaData API requires PHP version of 7.1 or higher.

You can use every resource available with classes from *Resources* namespace. You can create main `TibiaData` object and use getters or create every object on your own. 

```php
require_once('vendor/autoload.php');

$tibiaData = new \TibiaDataApi\TibiaData($authentication);
$upvoteAnnotation = $tibiaData->getCharactersResoure()->get( 'Simivar' );
```

## Versioning
Created using [Semver](http://semver.org/). All minor and patch updates are backwards compatibile.
Also, it strictly follows TibiaData API versioning. Version 2.0 of library supports `v2` of TibiaData API.

## License
Please see the [license file](https://github.com/simivar/tibiadata-api/blob/master/LICENSE) for more information.