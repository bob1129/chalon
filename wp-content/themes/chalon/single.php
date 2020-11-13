<?php get_header(); ?>
<?php the_under('お知らせ'); ?>

<div class="wrapper inner">
  <main>
    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    
    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
      <?php echo get_the_date(); ?>
    </time>
    <h2 class="title">
      <?php the_title(); ?>
    </h2>
    <?php the_content(); ?>
    
    <?php endwhile; endif; ?>
  </main>
  <div id="side">
    <ul>
      <?php dynamic_sidebar('infomation'); ?>
    </ul>
  </div>

</div>


<?php get_footer(); ?>