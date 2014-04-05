<?hh namespace LHF;
require '../lib/Issue.php';
use \HH\Vector;
use \Requests;
use \stdClass;

class Searcher {
  
  public function all(): Vector<Issue> {
    return $this->fetch();
  }

  public function byLanguage(string $language): Vector<Issue> {
    return $this->fetch(
      "language:$language"
    );
  }

  private function fetch(string $query = ''): Vector<Issue> {
    $resp = Requests::get(
      "https://api.github.com/search/issues?q=documention+assignee:none+$query+state:open+in:title,description&per_page=100"
    );
    $issues = json_decode($resp->body, true)['items'];
    return Issue::fromJSONArray($issues);
  }
}

