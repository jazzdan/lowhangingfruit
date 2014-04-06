<div class="pure-u-5-5">
  <form class="pure-form" method="GET">
    <input name="language" placeholder="language" type="text" value="<?= getInput('language') ?>" />
    <button class="pure-button pure-button-primary" type="submit">
      Find Issues
    </button>
  </form>
</div>

<div class="pure-u-5-5">
  <h2>
    <?= ucwords(getInput('language', 'all')) ?> Issues (<?= count($data) ?>)
  </h2>
  <ul class="unstyled">
    <? foreach ($data as $issue) { ?>
      <li>
        <a class="issue" href="<?= $issue->url ?>" target="_blank">
          <h3 class="title"><?= $issue->title ?></h3>
          <p class="description">This is a description</p>
        </a>
      </li>
    <? } ?>
  </ul>
</div>
