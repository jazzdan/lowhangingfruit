<?hh
$loader = require_once "../vendor/autoload.php";

function getInput(string $key, ?string $default=null) {
  if (array_key_exists($key, $_GET) && $_GET[$key] !== '') {
    return $_GET[$key];
  } else {
    return $default;
  }
}

require_once '../lib/Searcher.php';
$searcher = new \LHF\Searcher();

if (getInput('language')) {
  $result = $searcher->byLanguage(getInput('language'));
} else {
  $result = $searcher->all();
}

function render(string $path, $data) {
  require('../views/layout.php');
}
render('home', $result);
