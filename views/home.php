<div class="pure-u-5-5">
  <form class="pure-form" method="GET">
    <input name="language" placeholder="language" type="text" value="<?= getInput('language') ?>" />
    <button class="pure-button pure-button-primary" type="submit">
      Find Issues
    </button>
  </form>
</div>

<div class="pure-u-5-5">
  <ul class="unstyled">
    <? foreach ($data as $issue) { ?>
      <li><a href="<?= $issue->url ?>"><?= $issue->title ?></a></li>
    <? } ?>
  </ul>
</div>
