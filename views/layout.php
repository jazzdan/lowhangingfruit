<? use \LHF; ?>
<!DOCTYPE html>
<html>

  <head>
    <title>Low Hanging Fruit</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.4.2/pure-min.css" />

    <style type="text/css">
      a {
        color: #0078e7;
        text-decoration: none;
      }
      form,
      header {
        text-align: center;
      }
      footer {
        text-align: center;
      }
      .issue {
        border: 1px solid #ccc;
        border-radius: 4px;
        color: inherit;
        display: block;
        margin-bottom: 10px;
        padding: 15px;
        position: relative;
      }
      .issue:hover {
        border-color: #0078e7;
      }
      .issue:visited {
      }
        .issue .description {
          background-color: #eee;
          margin-bottom: 0;
          padding: 5px 8px;
        }
        .issue .repo {
          color: #ccc;
          position: absolute;
          top: 0;
          right: 15px;
        }
        .issue .title {
          margin-bottom: 15px;
          margin-top: 0;
        }
        .issue:active .title,
        .issue:active:visited .title,
        .issue:hover .title,
        .issue:hover:visited .title {
          color: #0078e7;
        }
        .issue:visited .title {
          color: #999;
        }
      .page {
        color: #333;
        margin: 0 auto;
        max-width: 740px;
        padding: 0 10px;
      }
      .strategy {
        text-align: center;
      }
      ol.unstyled,
      ul.unstyled {
        list-style: none;
        padding-left: 0;
      }
    </style>
  </head>

  <body>
    <div class="page pure-g-r">
      <header class="pure-u-5-5">
        <h1>Low Hanging Fruit</h1>
      </header>

      <? require "../views/$view.php" ?>
      <footer class="pure-u-5-5">
        <small><p>&lt;3 <a href="http://colbyr.com">Colby</a> &amp; <a href="http://dmiller.io">Dan</a></p></small>
      </footer>
    </div>
  <body>

</html>
