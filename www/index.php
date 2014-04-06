<?hh namespace LHF;

$loader = require_once "../vendor/autoload.php";

require_once '../lib/Input.php';
require_once '../lib/Searcher.php';
require_once '../lib/View.php';

use \HH\Map;

$options = Map {
  'assignee' => 'none',
  'language' => Input::get('language'),
  'state' => 'open'
};

if (Input::get('strategy') === 'optin') {
  $search_term = '';
  $options['label'] = 'lhf';
} else {
  $search_term = 'documentation';
}

View::render(
    'home',
    (new Searcher())->find($search_term, $options)
  );

