# cPanelAPI
A basic PHP wrapper for the cPanel JSON API.

## Creating Instance

Creating an instance of cPanel API is requires an array containing these values:
1. Key[url]: cPanel URL of your site prefixed with either http:// or https:// and suffixed with either port number 2082 or 2083.
2. Key[username]: cPanel username.
3. Key[password]: cPanel password.

```
<?php
require_once 'cpanelapi.php';

use MohdRaquib\cPanelAPI\cPanelAPI;

$parameters = [
                'url' => 'https://cpanel.yourdomain.com:2083',
                'username' => 'username',
                'password' => 'password'
              ];
              
$api = new cPanelAPI($parameters);
```

## Making Requests

After creating an instance of the cPanelAPI, you can make cPanelAPI requests by using the MohdRaquib\cPanelAPI\cPanelAPI::makeRequest() method. This method requires 3 parameters namely Module, Function & Additional Parameters (Array).

1. Parameter[Module]: cPanelAPI module name (Example: Cron, AddonDomain, SubDomain etc.)
2. Parameter[Function]: cPanelAPI function to perform as respective of the module name provided in the first parameter.
3. Parameter[Additional Parameters]: All the required paramters by the module's function as specified in the cPanel API Documentation.

#### Example For Addon Domain
```
<?php
require_once 'cpanelapi.php';

use MohdRaquib\cPanelAPI\cPanelAPI;

$parameters = [
                'url' => 'https://cpanel.yourdomain.com:2083',
                'username' => 'username',
                'password' => 'password'
              ];
$api = new cPanelAPI($parameters);

$addon_domain = $api->makeRequest('AddonDomain', 'addaddondomain', ['dir' => 'public_html/addondomain.com', 'newdomain' => 'addondomain.com', 'subdomain' => 'addondomain']);

var_dump($addon_domain);
```

For more brief explanation about the cPanel API Modules and its Functions, visit the "[Guide to cPanel API 2](https://documentation.cpanel.net/display/SDK/Guide+to+cPanel+API+2, "cPanel API Documentation")"
