<h1><?= $data ?></h1>
<ul>
  <? foreach ($data as $issue) { ?>
    <li><a href="<?= $issue->url ?>"><?= $issue->title ?></a></li>
  <? } ?>
</ul>
