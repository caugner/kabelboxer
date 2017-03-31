KabelBoxer, PHP Client for Compal cable modems
==============================================

KabelBoxer is a PHP Client for Compal cable modems.

[![Build Status](https://travis-ci.org/caugner/kabelboxer.svg?branch=master)](https://travis-ci.org/caugner/kabelboxer)
[![Code Climate](https://codeclimate.com/github/caugner/kabelboxer/badges/gpa.svg)](https://codeclimate.com/github/caugner/kabelboxer)
[![Latest Stable Version](https://poser.pugx.org/claas/kabelboxer/v/stable)](https://packagist.org/packages/claas/kabelboxer)
[![License](https://poser.pugx.org/claas/kabelboxer/license)](https://packagist.org/packages/claas/kabelboxer)

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
