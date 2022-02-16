# HTML helper

A simple PHP library for generating HTML

## Installation

    composer require rauwebieten/php-html-helper

## Example

```php
<?php

use RauweBieten\PhpHtmlGen\HTML as h;

require_once __DIR__ . '/../vendor/autoload.php';

$legend = h::legend("Legend");
$fieldset = h::fieldset($legend);

$html = (string) $fieldset;

print $html;
```

