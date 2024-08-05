<?php

use App\ContentFilter;
use App\RemoveDisallowedHtmlElementsStrategy;

require_once 'vendor/autoload.php';

$content = '<p class="some-class">Some Content</p><div>divs not allowed</div>';

//$contentFilter = new ContentFilter(new RemoveClassAttributesStrategy);
$contentFilter = new ContentFilter(new RemoveDisallowedHtmlElementsStrategy);

$filteredContent = $contentFilter->filter($content);
echo $filteredContent.PHP_EOL;
