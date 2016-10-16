# jnjxp.http-status
HTTP Status Code Helpers


[![Latest version][ico-version]][link-packagist]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]

## Install
```
composer require jnjxp/http-status
```


## Usage

### HTTP Status Constants
```php
<?php

use Jnjxp\HttpStatus\StatusCode;

// Class Constants for HTTP Status Magic Numbers in `StatusCode`
// eg...
$response = $response->withStatus(StatusCode::HTTP_OK);
```

### Determine HTTP Response Status Class
```php
<?php

use Jnjxp\HttpStatus\ResponseClass;

$responseClass = new ResponseClass;

Switch ($responseClass->getClass($response)){
// one of: 'INFORMATIONAL', 'SUCCESS', 'REDIRECTION', 'CLIENT_ERROR', 'SERVER_ERROR'
// Cooresponding class constants on `ResponseClass`

    case ResponseClass::INFORMATIONAL:
        // Response is 1xx
    break;

    case ResponseClass::SUCCESS:
        // Response is 2xx
    break;

    case ResponseClass::REDIRECTION:
        // Response is 3xx
    break;

    case ResponseClass::CLIENT_ERROR:
        // Response is 4xx
    break;

    case ResponseClass::SERVER_ERROR:
        // Response is 5xx
    break;
}

// Boolean tests available

$responseClass->isResponse(ResponseClass::SUCCESS, $resposne);

$responseClass->isInformational($response);
$responseClass->isSuccess($response);
$responseClass->isRedirection($response);
$responseClass->isClientError($response);
$responseClass->isServerError($response);

```

[ico-version]: https://img.shields.io/packagist/v/jnjxp/http-status.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jnjxp/jnjxp.http-status/develop.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jnjxp/jnjxp.http-status.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jnjxp/jnjxp.http-status.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jnjxp/http-status
[link-travis]: https://travis-ci.org/jnjxp/jnjxp.http-status
[link-scrutinizer]: https://scrutinizer-ci.com/g/jnjxp/jnjxp.http-status
[link-code-quality]: https://scrutinizer-ci.com/g/jnjxp/jnjxp.http-status
