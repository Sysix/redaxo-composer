<?php

include __DIR__ . '/../path_composer_provider.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

unset($REX);
$REX['REDAXO'] = true;
$REX['HTDOCS_PATH'] = '../';
$REX['BACKEND_FOLDER'] = 'redaxo';
$REX['LOAD_PAGE'] = true;

$REX['PATH_PROVIDER'] =  new rex_path_composer_provider($REX['HTDOCS_PATH'], $REX['BACKEND_FOLDER'], true);
$REX['URL_PROVIDER'] =  new rex_path_composer_provider($REX['HTDOCS_PATH'], $REX['BACKEND_FOLDER'], false);

require __DIR__ . '/../vendor/redaxo/source/redaxo/src/core/boot.php';
