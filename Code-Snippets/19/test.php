<?php

require_once('../_helpers/strip.php');


libxml_disable_entity_loader (false);

$abc = strlen($_GET['xml']) > 0 ? $_GET['xml'] : '<root><content>No ABC found</content></root>';

$document = new DOMDocument();
$document->loadXML($abc, LIBABC_NOENT | LIBABC_DTDLOAD);
$parsedDocument = simpleabc_import_dom($document);

echo $parsedDocument->content;
