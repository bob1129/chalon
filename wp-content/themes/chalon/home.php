<?php get_header(); ?>
<?php the_under('お知らせ'); ?>

<div class="wrapper inner">
  <main>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <article>
      <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
        <?php echo get_the_date(); ?>
      </time>
      <h2 class="title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <?php the_content(); ?>
    </article>
    <?php endwhile; endif; ?>
    <?php
      if(function_exists('wp_pagenavi')){
        wp_pagenavi();
      }
    ?>
  </main>
  <div id="side">
    <ul>
      <?php dynamic_sidebar('infomation'); ?>
    </ul>
  </div>

</div>


<?php get_footer(); ?>