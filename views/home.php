
<? if (LHF\Input::get('strategy') !== 'optin') { ?>
<div class="pure-u-5-5">
  <p class="strategy"><a href="/?strategy=optin">See Confirmed Low Hanging Fruit</a></p>
  <form class="pure-form" method="GET">
    <input name="language" placeholder="language" type="text" value="<?= LHF\Input::get('language') ?>" />
    <button class="pure-button pure-button-primary" type="submit">
      Find Issues
    </button>
  </form>
</div>
<? } else { ?>
<div class="pure-u-5-5">
  <p class="strategy"><a href="/">See Suspected Low Hanging Fruit</a></p>
</div>
<? } ?>
<div class="pure-u-5-5">
  <h2>
    <?= ucwords(LHF\Input::get('language', 'all')) ?> issues (<?= count($data) ?>)
  </h2>
  <ul class="unstyled">
    <? foreach ($data as $issue) { ?>
      <li>
        <a class="issue" href="<?= $issue->getURL() ?>" target="_blank">
          <h4 class="repo"><?= $issue->getRepositoryName() ?></h4>
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
