<!DOCTYPE html>
<html lang="nl-BE">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Alles over de kampioenen">

    <title>Maker Faire -  <?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
  <?php if (!empty($_SESSION['info'])): ?>
          <div class="box info"><?php echo $_SESSION['info']; ?></div>
        <?php endif; ?>
        <?php if (!empty($_SESSION['error'])): ?>
          <div class="box error"><?php echo $_SESSION['error']; ?></div>
        <?php endif; ?>

        <?php echo $content; ?>
  
    <?php echo $js; ?>
  </body>
</html>
