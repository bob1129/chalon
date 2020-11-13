<?php get_header(); ?>
<?php the_under('お申し込み'); ?>
<div class="wrapper">
        <main>
        <div class="flow_area">
            <ul>
                <li class="current">1.入力</li>
                <li>2.確認</li>
                <li>3.送信</li>
            </ul>
        </div>

        <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>


        </main>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>