<?

require 'vendor/autoload.php';
require 'config.php';

Predis\Autoloader::register();


function getConnection() 
{
	global $config;
$client=new Predis\Client([
'scheme'=> 'tcp',
'host' => $config['db'],
'port'  => 6379,
]);
   return $client;
}
