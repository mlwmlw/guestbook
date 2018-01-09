<?

require 'db.php';

if ($_GET['cmd']) {
  $host = 'localhost';
  header('Content-Type: application/json');
  if ($_GET['cmd'] == 'set') {
		$client=getConnection();
    $client->set($_GET['key'], $_GET['value']);
    print('{"message": "Updated"}');
  } else {
		$client=getConnection();
    $value = $client->get($_GET['key']);
    print('{"data": "' . $value . '"}');
  }
} ?>
