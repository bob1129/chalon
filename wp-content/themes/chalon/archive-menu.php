<?php get_header(); ?>
<?php the_under('メニュー'); ?>

<main>
  <div class="row">
      <div class="inner">

          <ul>
              <li><a href="#thisMonth">今月の<span class="break">ケーキ</span></a></li>
              <li><a href="#basic">定番<span class="break">ケーキ</span></a></li>
              <li><a href="#rice_flour">米粉の<span class="break">ケーキ</span></a></li>
          </ul>
          <section id="thisMonth" class="tab_contents">
              <div>
                <?php
                    $this_month_query = new WP_Query([
                        'post_type' => 'menu',
                        'posts_per_page' => -1,
                        'tax_query' => [
                          [
                            'taxonomy' => 'cake',
                            'field' => 'slug',
                            'terms' => 'this_month'
                          ]
                        ]
                    ]);
                ?>
                <?php if($this_month_query->have_posts()):while($this_month_query->have_posts()):$this_month_query->the_post(); ?>
                  <figure>
                      <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="https://placehold.jp/3d4070/ffffff/500x500.png?text=no%20image" alt="">
                        <?php endif; ?>
                          <figcaption><?php the_title(); ?></figcaption>
                      </a>
                  </figure>
                  <?php endwhile; endif; ?>
              </div>
          </section>
          <section id="basic" class="tab_contents">
          <div>
                <?php
                    $basic_query = new WP_Query([
                        'post_type' => 'menu',
                        'posts_per_page' => -1,
                        'tax_query' => [
                          [
                            'taxonomy' => 'cake',
                            'field' => 'slug',
                            'terms' => 'basic'
                          ]
                        ]
                    ]);
                ?>
                <?php if($basic_query->have_posts()):while($basic_query->have_posts()):$basic_query->the_post(); ?>
                  <figure>
                      <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="https://placehold.jp/3d4070/ffffff/500x500.png?text=no%20image" alt="">
                        <?php endif; ?>
                          <figcaption><?php the_title(); ?></figcaption>
                      </a>
                  </figure>
                  <?php endwhile; endif; ?>
              </div>
          </section>
          <section id="rice_flour" class="tab_contents">
          <div>
                <?php
                    $rice_flour_query = new WP_Query([
                        'post_type' => 'menu',
                        'posts_per_page' => -1,
                        'tax_query' => [
                          [
                            'taxonomy' => 'cake',
                            'field' => 'slug',
                            'terms' => 'rice_flour'
                          ]
                        ]
                    ]);
                ?>
                <?php if($rice_flour_query->have_posts()):while($rice_flour_query->have_posts()):$rice_flour_query->the_post(); ?>
                  <figure>
                      <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="https://placehold.jp/3d4070/ffffff/500x500.png?text=no%20image" alt="">
                        <?php endif; ?>
                          <figcaption><?php the_title(); ?></figcaption>
                      </a>
                  </figure>
                  <?php endwhile; endif; ?>
              </div>
          </section>
      </div>
  </div>
</main>


<?php get_footer(); ?>