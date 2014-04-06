<?hh namespace LHF;

$loader = require_once "../vendor/autoload.php";

require_once '../lib/Input.php';
require_once '../lib/Searcher.php';
require_once '../lib/View.php';

View::render('home', (new Searcher())->find(Input::get('language')));
