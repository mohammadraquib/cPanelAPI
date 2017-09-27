<?php
require_once '../src/cpanelapi.php';

use MohdRaquib\cPanelAPI\cPanelAPI;

$api = new cPanelAPI(['url' => 'https://cpanel.yourdomain.com:2083', 'username' => 'username', 'password' => 'password']);

$addon_domain = $api->makeRequest('AddonDomain', 'addaddondomain', ['dir' => 'public_html/addondomain.com', 'newdomain' => 'addondomain.com', 'subdomain' => 'addondomain']);

var_dump($addon_domain);
