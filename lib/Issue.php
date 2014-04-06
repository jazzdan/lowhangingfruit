<?hh namespace LHF;

use \HH\Vector;

class Issue {

    const MAX_DESCRIPTION_LENGTH = 300;

    private string $description;
    private string $title;
    private string $url;

    public function __construct(array<string,mixed> $json) {
      $this->description = $json['body'];
      $this->title = $json['title'];
      $this->url = $json['html_url'];
    }

    public static function fromJSONArray(array<string,mixed> $json): Vector<Issue> {
      $issues = Vector {};
      foreach ($json as $issue_json) {
        $issues[] = new Issue($issue_json);
      }
      return $issues;
    }

    public function getDescription(): string {
      $description = $this->description;
      if ($description) {
        $description = strlen($description) < self::MAX_DESCRIPTION_LENGTH ?
          $description :
          substr($description, 0, self::MAX_DESCRIPTION_LENGTH).'...';
      } else {
        $description = '-';
      }
      return $description;
    }

    public function getTitle(): string {
      return $this->title;
    }

    public function getURL(): string {
      return $this->url;
    }

}
