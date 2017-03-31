KabelBoxer, PHP Client for Compal cable modems
==============================================

KabelBoxer is a PHP Client for Compal cable modems.

[![Build Status](https://travis-ci.org/caugner/kabelboxer.svg?branch=master)](https://travis-ci.org/caugner/kabelboxer)

## Usage

First, install [Composer](http://getcomposer.org/).

```bash
curl -sS https://getcomposer.org/installer | php
```

Next, add KabelBoxer:

```
php composer.phar require caugner/kabelboxer
```

Then, include Composer's autoloader:

```php
require 'vendor/autoload.php';
```

Finally, you can use the KabelBoxer client:

```php
$client = new KabelBoxer\Client();
$client->login('admin', 'password');
$client->restart();
```

## Supported Models

* CH7466CE
