

<?php get_header(); ?>
<section class="about" id="about" name="#about">
    <?php dynamic_sidebar("title-s2");?>
   <div class="container">
       <div class="row">
           <div class="col-lg-6">
                <div class="block-left">
                    <?php dynamic_sidebar("section-2");?>
                </div>
           </div>
           <div class="col-lg-6">
               <div class="block-right">
                   <h5 class="title-left">Мы работаем с брендами:</h5>
                   <div class="brands">
                       <div class="brands__1"></div>
                       <div class="brands__2"></div>
                       <div class="brands__3"></div>
                       <div class="brands__4"></div>
                       <div class="brands__5"></div>
                       <div class="brands__6"></div>
                       <div class="brands__7"></div>
                       <div class="brands__8"></div>
                       <div class="brands__9"></div>
                   </div>
                   <p>А так же еще более 100 брендов...</p>
               </div>

           </div>
       </div>
   </div>
</section>

<section class="history" id="history">
  <div class="container">
      <div class="row">
          <?php dynamic_sidebar("section-3");?>
          <ul class="portfolio d-flex flex-wrap">
              <?php if(have_posts()):
                  while(have_posts()): the_post(); ?>
                      <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?> 
                      <li class="portfolio__item" id ="one">
                      <div class="wrap-img">
                          <?php the_post_thumbnail( 'full') ?>
                      </div>
                      <div class="portfolio__text">
                          <h5 class="portfolio__title"><?php the_title() ?></h5>
                          <a title="<?php the_title() ?>" data-img="<?php echo $image_url[0]; ?>" class="portfolio__link" href="content.html">Подробнее...</a>
                      </div>
                      <div class="d-none content-load">
                          <?php the_content(); ?>
                      </div>
                  </li>
              <?php endwhile; ?>
              <?php else: ?>
                  Записей нет!
              <?php endif; ?>
          </ul>
      </div>
  </div>
</section>
<section class="steps">
    <div class="container">
        <h2 class="title-step">Как мы работаем</h2>
        <div class="row">
            <div class="col-12">
                <ul class="step">
                    <?php $posts = work_show_reviews(); ?>
                    <?php foreach ($posts as $post): ?>
                    <li class="step__item">
                        <?php the_post_thumbnail(); ?>
                        <h5 class="step__title"><?php echo $post->post_title ?></h5>
                        <p class="step__text"><?php echo $post->post_content ?></p>
                    </li>
                    <li class="arrow"><i class="fas fa-chevron-right" style="font-size: 26px; margin-right:10px; rgba(1,1,1,0.84)"></i></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="advantages" id="advantages">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title-card">Наши преймущества</h2>
                <ul class="cards">
                    <?php $posts = card_show_reviews(); ?>
                    <?php foreach ($posts as $post): ?>
                        <li class="card__item">
                            <div class="card__up"><?php the_post_thumbnail(); ?></div>
                            <div class="card__low">
                                <h5 class="card__title"><?php echo $post->post_title ?></h5>
                                <p class="card__text"><?php echo $post->post_content ?></p>
                            </div>
                        </li>
                    <?php  endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="reviews" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php dynamic_sidebar("section-4");?>
                <div class="your-class" id="slider">
                    <?php $posts = test_show_reviews(); ?>
                    <?php foreach ($posts as $post): ?>
                    <div class="slider__item">
                        <div class="slider__ava">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="slider__content">
                            <p class="slider__head">
                                <span class="slider__name"><?php echo $post->post_title ?></span>
                                <span class="slider__city"><?php echo CFS()->get( 'city' );?></span>
                            </p>
                            <p class="slider__body"><?php echo $post->post_content ?></p>
                            <p class="slider__footer">
                                <?php echo CFS()->get( 'link_VK' );?>
                                <?php echo CFS()->get( 'Link_ok' );?>
                            </p>
                            <?php echo get_the_date('j.n.Y'); ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <button class="offer__btn" id="answer">Оставить отзыв!</button>
            </div>
        </div>
    </div>
</section>


<section class="price" id="price">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php dynamic_sidebar("title-price");?>
                <div class="accordion">
                    <?php $posts = price_show_reviews(); ?>
                    <?php foreach ($posts as $post): ?>
                        <div class="accordion_item">
                            <h3 class="title_block"><?php echo $post->post_title ?></h3>
                            <div class="info">
                                <p class="info_item"><?php echo $post->post_content ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="price-text">Если в прайс-листе отсутствует ваша неполадка, то обратитесь к нашим специалистам!</p>
                <button class="offer__btn" id="sendprice">Заказать звонок!</button>
            </div>
        </div>
    </div>
</section>
<section class="contact">
    <h2 class="title-contact">Наши контакты</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <?php dynamic_sidebar("contacts");?>
                <div class="inform">
                    <div class="inform__wrap">
                        <h5>Контактные телефоны:</h5>
                        <div class="inform__contact">
                            <div class="inform__item">
                                <i class="fas fa-phone" style="font-size: 26px; margin-right:5px; color: #3fb059;"></i>
                                <p>Рабочий:</p>
                                <?php dynamic_sidebar("phone-home");?>
                            </div>
                            <div class="inform__item">
                                <i class="fas fa-mobile" style="font-size: 26px; margin-right:5px; color: #3fb059;"></i>
                                <p>Сотовый:</p>
                                <?php dynamic_sidebar("phone-sot");?>
                            </div>
                        </div>
                    </div>

                    <div class="inform__wrap">
                        <h5>Электронная почта:</h5>
                        <?php
                        dynamic_sidebar("mail-one");
                        dynamic_sidebar("mail-two");
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab0598ed31663352667b7b4a837c594162b445e802bbb1077fd7daf1af9eb0a7d&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </div>
</section>       
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>