<p>There are <?= count($data) ?> fruits waiting to be shorn from the tree!</p>

<form class="pure-form" method="GET">
  <input name="language" type="text" value="<?= getInput('language') ?>" />
  <button class="pure-button pure-button-primary" type="submit">
    Find Issues
  </button>
</form>

<ul>
  <? foreach ($data as $issue) { ?>
    <li><a href="<?= $issue->url ?>"><?= $issue->title ?></a></li>
  <? } ?>
</ul>
