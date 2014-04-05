<?hh namespace LHF;

use \Github\Client;

class Searcher {
  
  public function __construct(Client $client) {
    $this->client = $client;
  }

  public function all() {
  }
}

