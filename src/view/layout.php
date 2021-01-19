<!DOCTYPE html>
<html lang="nl-BE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Maker Faire">

    <title>Maker Faire - <?php echo $title; ?></title>
    <?php echo $css;?>
</head>

<body>
    <!-- <div style="display: flex; align-items: center; justify-content: space-between; background: black; color: white; position: fixed; top: 0; left: 0; width: 100%; padding: 0.5em; font-size: 12px; font-family: sans-serif;"><span>This is a fictional project, a student assignment for the Bachelor's degree <a href="https://devine.be" style="color: white;">Devine</a></span><button style="border: 0; padding: 0; background: black; color: white; margin: 0 0.5em; padding: 0 0.5em; cursor: pointer; font-size: 12px; " onclick="(function(btn){btn.parentNode.style.display='none'; localStorage.setItem('hide-devine-student-project-banner', '1'); return false;})(this);return false;">x</button><script>if (localStorage.getItem('hide-devine-student-project-banner') === '1') document.currentScript.parentNode.style.display = 'none';</script></div> -->

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