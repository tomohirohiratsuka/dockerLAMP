<?php

require_once("phpQuery-onefile.php");
require_once("phpQuery-onefile.php");
$html = file_get_contents("https://ja.wikipedia.org/wiki/%E3%82%A6%E3%82%A7%E3%83%96%E3%82%B9%E3%82%AF%E3%83%AC%E3%82%A4%E3%83%94%E3%83%B3%E3%82%B0");
echo phpQuery::newDocument($html)->find("h1")->text();

