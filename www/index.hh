<?hh
$loader = require_once "../vendor/autoload.php";

require_once '../lib/Searcher.php';
$searcher = new \LHF\Searcher();

$result = $searcher->all();

echo '<pre>';
print_r($result);
exit;

function render(string $path, $data) {
  require('../views/layout.php');
}
render('home', 'testing');
