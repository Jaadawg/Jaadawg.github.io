<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js') ?>
    </head>
    <body>

      <section class="emergency-bar">
        <?php if ($view->position()->exists('emergency')) : ?>
          <?= $view->position('emergency') ?>
        <?php endif; ?>
      </section>

      <nav>
        <!-- Render logo or title with site URL -->
        <a href="<?= $view->url()->get() ?>">
            <?php if ($logo = $params['logo']) : ?>
                <img src="<?= $this->escape($logo) ?>" alt="" class="logo">
            <?php else : ?>
                <?= $params['title'] ?>
            <?php endif ?>
        </a>

        <!-- Render menu position -->
        <?php if ($view->menu()->exists('main')) : ?>
            <?= $view->menu('main') ?>
        <?php endif ?>
      </nav>

        <!-- Render content -->
        <?= $view->render('content') ?>

        <section class="footer">
          <?php if ($view->position()->exists('footer')) : ?>
            <?= $view->position('footer') ?>
          <?php endif; ?>
        </section>

    </body>
</html>
