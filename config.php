<?php


// Frontend

$config['frontpage']['title'] = 'Looking Glass';
//$config['frontpage']['image'] = 'logo.png';
$config['frontpage']['disclaimer'] = 'null';
$config['contact']['name'] = 'null';
$config['contact']['mail'] = 'null';

// Routers

$config['routers']['router1']['host'] = 'r1';
$config['routers']['router1']['user'] = 'root';
$config['routers']['router1']['pass'] = 'lg';
$config['routers']['router1']['auth'] = 'ssh-password';
$config['routers']['router1']['type'] = 'frr';
$config['routers']['router1']['source-interface-id'] = 'eth0';
$config['routers']['router1']['desc'] = 'r1';

$config['routers']['router2']['host'] = 'r2';
$config['routers']['router2']['user'] = 'root';
$config['routers']['router2']['pass'] = 'lg';
$config['routers']['router2']['auth'] = 'ssh-password';
$config['routers']['router2']['type'] = 'frr';
$config['routers']['router2']['source-interface-id'] = 'eth0';
$config['routers']['router2']['desc'] = 'r2';


$config['tools']['ping_options'] = '-c 5';
$config['tools']['traceroute_options'] = '-A -q1 -w2 -m15';
$config['tools']['traceroute4'] = 'traceroute';

// End of config.php
