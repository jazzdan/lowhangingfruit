<?hh namespace LHF;
require '../lib/Issue.php';
use \HH\Vector;
use \Requests;
use \stdClass;

class Searcher {

  public function find(string $query, ?Map<string, string> $params=null): Vector<Issue> {
    return $this->fetch($query, static::stringifyParams($params));
  }

  private function fetch(string $query, string $params): Vector<Issue> {
    $resp = Requests::get(
      "https://api.github.com/search/issues?q=$query+$params&per_page=100"
    );
    $issues = json_decode($resp->body, true)['items'];
    return Issue::fromJSONArray($issues);
  }

  private function stringifyParams(?Map<string, string> $param_map): string {
    if (!$param_map) {
      return '';
    }
    $params = array();
    foreach ($param_map as $key => $value) {
      if ($value) {
        $params[] = "$key:$value";
      }
    }
    return implode('+', $params);
  }

}
