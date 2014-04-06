<?hh namespace LHF;

class Input {

  public static function get(string $key, ?string $default=null): ?string {
    if (array_key_exists($key, $_GET) && $_GET[$key] !== '') {
      return $_GET[$key];
    } else {
      return $default;
    }
  }

}
