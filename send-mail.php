$raw = file_get_contents('php://input');
file_put_contents('debug.txt', $raw);
$input = json_decode($raw, true);