<?php
  /*Template Name: Article
  Template Post Type: post, pages*/
?>

<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parfumes</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
  </head>
  <body>
  <?php get_header(); ?>
    <main>
    <?php $hero = get_field('group_64623dc5560c3');?>
      <section class="details">
        <h2 class="details__title">
        <?php echo the_field('card__title'); ?>
        </h2>
        <div class="details__inner">
          <div class="details__img">
          <img src="<?php echo the_field('card__img'); ?>" alt="<?php echo the_field('card__title'); ?>"/>
          </div>
          <div class="details_text">
            <p class="text_description">
              Description:
              <span
                ><?php echo the_field('card__description'); ?></span
              >
            </p>
            <h4 class="text_price">Price: <span><?php echo the_field('card__price'); ?></span></h4>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
  </body>
</html>
