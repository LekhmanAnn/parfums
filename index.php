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
      <section class="intro">
        <div class="section__inner">
          <div class="intro__text">
            <h2 class="intro__title">
              Ми Піклуємось Про Твоє Здоров’я і Красу
            </h2>
            <button class="intro__button">Перейти к каталогу</button>
          </div>
          <div class="intro__image">
            <img src="<?php bloginfo('template_directory');?>/assets/img/main-banner.png" alt="Main banner" />
            <div class="image__text">
              <h3 class="image__title">Q+A Derma·E</h3>
              <h4 class="image__subtitle">
                Побалуй свою шкіру доглядом, який вона заслуговує
              </h4>
              <button class="intro__button">Детальніше</button>
            </div>
          </div>
        </div>
      </section>
      <section class="news">
        <h2 class="news__title">Новинки</h2>
        <div class="cards">
        <?php $hero = get_field('group_64623dc5560c3');?>
                    <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => "card",
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );
                    
                    global $post;
                    
                    
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>

                    <a href="<?php echo get_permalink(); ?>" class="card">
                        <img src="<?php echo the_field('card__img');?>" alt="<?php echo the_field('card__title'); ?>"/>
                          <h3 class="card__title">
                            <?php echo the_field('card__title'); ?>
                          </h3>
                            <button class="card__button">Придбати</button>
                      </a>
                  
                    <?php
                }

                wp_reset_postdata();
                    ?>
          
        </div>
      </section>
      <section class="subscribe">
        <div class="subscribe__inner">
          <div class="subscribe__text">
            <h3 class="subscripe__text">Дізнавайся першим про знижки</h3>
            <h3 class="subscripe__text">
              А також отримай -10% на перше замовлення
            </h3>
            <span class="separator" />
          </div>
          <input
            class="subscribe__input"
            type="email"
            placeholder="Введіть E-mail"
          />
        </div>
      </section>
      <section class="importants">
        <h2 class="importants__title">ДЛЯ НАС ВАЖЛИВО</h2>
        <div class="important__cards">
          <div class="important__card">
            <h4 class="important__card-title">Ваш час</h4>
            <span class="card-separator"></span>
            <p class="important__card-description">
              Ми приймаємо замовлення кожен день з 8:00 до 20:00. Доставка по
              Україні займає 1-2 календарних дня.
            </p>
          </div>
          <div class="important__card">
            <h4 class="important__card-title">Якість</h4>
            <span class="card-separator"></span>
            <p class="important__card-description">
              Тільки оригінальна продукція. Офіційні дистрибуції. Маємо
              партнерів з ЄС (доставка 3-5 дней).
            </p>
          </div>
          <div class="important__card">
            <h4 class="important__card-title">Довіра</h4>
            <span class="card-separator"></span>
            <p class="important__card-description">
              Наші кваліфіковані спеціалісти відповідять на будь-які Ваші
              запитання по номеру контакт-центра, або в онлайн чаті на сайті.
            </p>
          </div>
          <div class="important__card">
            <h4 class="important__card-title">Доступність</h4>
            <span class="card-separator"></span>
            <p class="important__card-description">
              Радуємо постійними знижками та акціями. Для наших постійних
              клієнтів передбачена дисконтна програма.
            </p>
          </div>
          <div class="important__card">
            <h4 class="important__card-title">Різноманіття</h4>
            <span class="card-separator"></span>
            <p class="important__card-description">
              Регулярно додаємо нові категорії і актуальні позиції. Ми перші, де
              можна купити косметику твого улюбленого бренда.
            </p>
          </div>
        </div>
      </section>
      <?php get_footer(); ?>
    </main>
  </body>
</html>
