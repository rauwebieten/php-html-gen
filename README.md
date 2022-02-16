# HTML helper

A simple PHP library for generating HTML

## Installation

    composer require rauwebieten/php-html-helper

## Usage

```php
// import the helper
use RauweBieten\PhpHtmlGen\HTML as h;

// a singular HTML tag
$img = h::singular('img', ['src' => 'https://example.com/img/my-logo.png']);

// a singular HTML tag, alternative syntax
$img = h::img(['src' => 'https://example.com/img/my-logo.png']);
$ruler = h::hr();

// a paired HTML tag
$fieldset = h::paired('fieldset', 'Fieldset content', ['id' => 'my-id']);

// a paired HTML tag, alternative syntax
$fieldset = h::fieldset('Fieldset content', ['id' => 'my-id']);
```

## Example

```php
<?php

use RauweBieten\PhpHtmlGen\HTML as h;

require_once __DIR__ . '/vendor/autoload.php';

$legend = h::legend("My legend");
$fieldset = h::fieldset($legend . "My fieldset content");

$html = (string) $fieldset;

print $html;
```

