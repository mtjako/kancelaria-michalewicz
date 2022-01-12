<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Oficjalna strona kancelarii Agaty Michalewicz">
    <?php wp_head() ?>
</head>
<body>
<nav class="navigation">
    <div class="navigation__wrap">
        <div class="navigation__wrap__logo"><a href="/">Agata Michalewicz</a></div>
        <?php wp_nav_menu( array(
            'menu'=>'primary',
            'container_class'=>'navigation__wrap__menu',
            'theme_location'=>'primary',
        ))?>
        <button class="navigation__wrap__btn"></button>
    </div>
</nav>