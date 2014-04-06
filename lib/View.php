<?hh namespace LHF;

require_once '../lib/Input.php';
require_once '../lib/Searcher.php';
require_once '../lib/View.php';

class View {

  public static function render(string $view, mixed $data) {
    require('../views/layout.php');
  }

}
