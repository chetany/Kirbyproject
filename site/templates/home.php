<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <meta name="description" content="<?= $site->description()->html() ?>">
        <link rel="shortcut icon" type="image/png" href="<?= $site->files()->findBy('template', 'favicon')->url() ?>">
        <link rel="shortcut icon" sizes="196x196" href="<?= $site->files()->findBy('template', 'favicon')->url() ?>">
        <link rel="apple-touch-icon" href="<?= $site->files()->findBy('template', 'favicon')->url() ?>">
        <meta property="og:url" content="http://example.com">
        <meta property="og:title" content="<?= $site->title()->html() ?>" >
        <meta property="og:description" content="<?= $site->description()->html() ?>" >
        <meta property="og:image" content="<?= $site->files()->findBy('template', 'share_image')->url() ?>" >
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@example">
        <meta name="twitter:creator" content="@mhgbrown">
        <meta name="twitter:title" content="<?= $site->title()->html() ?>">
        <meta name="twitter:description" content="<?= $site->description()->html() ?>">
        <meta name="twitter:image" content="<?= $site->files()->findBy('template', 'share_image')->url() ?>">
        <title><?= $site->title()->html() ?></title>
        <?php if(!$site->custom_css()->empty()): ?>
        <style><?= $site->custom_css() ?></style>
        <?php endif; ?>
    <link href="http://localhost/kirbyvuecms/assets/app.js" rel="preload" as="script"></head>
    <body>
        <noscript>
          <strong>We're sorry but this website doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
        </noscript>
        <div id="app"></div>
        <!-- built files will be auto injected -->
        <?php if(!$site->custom_html()->empty()): ?>
        <?= $site->custom_html() ?>
        <?php endif; ?>
        <?php if(!$site->custom_js()->empty()): ?>
        <script type="text/javascript"><?= $site->custom_js() ?></script>
        <?php endif; ?>
    <script type="text/javascript" src="http://localhost/kirbyvuecms/assets/app.js"></script></body>
</html>
