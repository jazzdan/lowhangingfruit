<div class="pure-u-5-5">
  <form class="pure-form" method="GET">
    <input name="language" placeholder="language" type="text" value="<?= LHF\Input::get('language') ?>" />
    <button class="pure-button pure-button-primary" type="submit">
      Find Issues
    </button>
  </form>
</div>

<div class="pure-u-5-5">
  <h2>
    <?= ucwords(LHF\Input::get('language', 'all')) ?> issues (<?= count($data) ?>)
  </h2>
  <ul class="unstyled">
    <? foreach ($data as $issue) { ?>
      <li>
        <a class="issue" href="<?= $issue->getURL() ?>" target="_blank">
          <h3 class="title"><?= $issue->getTitle() ?></h3>
          <p class="description">
            <small>
              <code>
                <?= $issue->getDescription() ?>
              </code>
            </small>
          </p>
        </a>
      </li>
    <? } ?>
  </ul>
</div>
