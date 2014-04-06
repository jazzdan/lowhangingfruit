<?hh namespace LHF;

$loader = require_once "../vendor/autoload.php";

require_once '../lib/Input.php';
require_once '../lib/Searcher.php';
require_once '../lib/View.php';

use \HH\Map;
if (Input::get('strategy') === 'optin') {
  error_log("optin strategy");
  View::render(
    'home',
    (new Searcher())->find('', Map {
      'assignee' => 'none',
      'state' => 'open',
      'label' => 'lhf'
    })
  );
} else {
  error_log("regular strategy");
  View::render(
    'home',
    (new Searcher())->find('documentation', Map {
      'assignee' => 'none',
      'language' => Input::get('language'),
      'state' => 'open'
    })
  );
}
