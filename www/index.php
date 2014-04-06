<?hh namespace LHF;

$loader = require_once "../vendor/autoload.php";

require_once '../lib/Input.php';
require_once '../lib/Searcher.php';
require_once '../lib/View.php';

use \HH\Map;

View::render(
  'home',
  (new Searcher())->find('documentation', Map {
    'assignee' => 'none',
    'language' => Input::get('language'),
    'state' => 'open'
  })
);
