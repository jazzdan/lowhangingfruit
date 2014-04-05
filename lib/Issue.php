<?hh namespace LHF;

use \HH\Vector;

class Issue {
    public function __construct(array<string,mixed> $json) {
      $this->url = $json['html_url'];
      $this->title = $json['title'];
    }

    public static function fromJSONArray(array<string,mixed> $json): Vector<Issue> {
      $issues = Vector {};
      foreach ($json as $issue_json) {
        $issues[] = new Issue($issue_json);
      }
      return $issues;
    }
}
