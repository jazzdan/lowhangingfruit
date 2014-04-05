<?hh
require_once "../vendor/autoload.php";

$client = new \Github\Client();

function render(string $path, $data) {
  require('../views/layout.php');
}

render('home', 'testing');
