<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible"
              content="ie=edge">
        <title>Jiris</title>
        <link rel="stylesheet"
              href="<?= public_path('css/app.css') ?>">
    </head>
    <body>
    <h1>Créer votre compte utilisateur !</h1>
    <form action="get">
        <?php
        component('forms.controls.label-and-input.view.php', [
            'name' => 'name',
            'label' => 'Username <small>au moins 3 caractères</small>',
            'type' => 'text',
            'value' => '',
            'placeholder' => 'MonPseudo12'
        ]); ?>
        <?php
        component('forms.controls.label-and-input.view.php', [
            'name' => 'name',
            'label' => 'Mot de passe',
            'type' => 'text',
            'value' => '',
            'placeholder' => 'Mon mot de passe'
        ]); ?>
    </form>
    </body>
</html>