<?hh namespace LHF;

use \Requests;
use \stdClass;

class Searcher {
  
  public function all(): stdClass {
    return $this->fetch();
  }

  public function byLanguage(string $language): stdClass {
    return $this->fetch(
      "language:$language"
    );
  }

  private function fetch(string $query = ''): stdClass {
    $resp = Requests::get(
      "https://api.github.com/search/issues?q=documention+assignee:none+$query+state:open&sort=created&order=asc"
    );
    return json_decode($resp->body);
  }
}

