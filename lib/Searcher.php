<?hh namespace LHF;

use \Requests;

class Searcher {
  
  public function all() {
    return $this->fetch('documention+state:open&sort=created&order=asc');
  }

  public function byLanguage(string $language): stdClass {
    return $this->fetch(
      "documention+language:$language+state:open&sort=created&order=asc"
    );
  }

  private function fetch(string $query) {
    $resp = Requests::get("https://api.github.com/search/issues?q=$query");
    return json_decode($resp->body);
  }
}

