<?php

use RauweBieten\PhpHtmlGen\HTML as h;

require_once __DIR__ . '/../vendor/autoload.php';

$li1 = h::li('item 1');
$li2 = h::li(h::a('a link', ['href' => '#uri']));

$ul = h::ol([$li1, $li2], ['id' => 'lijst']);

$legend = h::legend("Legend");
$fieldset = h::fieldset($legend . $ul );

$hr = h::singular('hr');

$html = (string) $fieldset . $hr;

print $html;