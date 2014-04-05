<?hh
$loader = require_once "../vendor/autoload.php";

$client = new \Github\Client();
require_once '../lib/Searcher.php';
$searcher = new \LHF\Searcher($client);

function render(string $path, $data) {
  require('../views/layout.php');
}
render('home', 'testing');
