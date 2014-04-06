<?hh namespace LHF;
require '../lib/Issue.php';
use \HH\Vector;
use \Requests;
use \stdClass;

class Searcher {

  public function find(?Map<string, string> $query=null): Vector<Issue> {
    return $this->fetch(static::stringifyQuery($query));
  }

  private function fetch(string $query = ''): Vector<Issue> {
    $resp = Requests::get(
      "https://api.github.com/search/issues?q=documention+assignee:none+$query+state:open&sort=created&order=asc"
    );
    $issues = json_decode($resp->body, true)['items'];
    return Issue::fromJSONArray($issues);
  }

  private function stringifyQuery(?Map<string, string> $query): string {
    if (!$query) {
      return '';
    }
    $params = array();
    foreach ($query as $key => $value) {
      if ($value) {
        $params[] = "$key:$value";
      }
    }
    return implode('+', $params);
  }
}
