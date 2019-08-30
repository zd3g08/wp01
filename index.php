<?php get_header(); ?>
<h2> SFTP TEST</h2>
    <?php if (have_posts()): ?>
    <?php  while (have_posts()): the_post(); ?>
	 <article class="post">
 		<h2>
 		<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
 		</h2>
 		<p class="postmeta">
 			Posted in <?php the_category(', '); ?> |
			<?php echo get_the_date(); ?> |
			<a href="<?php comments_link(); ?>">
			<?php echo get_comments_number(); ?> comments</a>
 		</p>
 		<div class="entry">
 			<?php the_content("[ Read more ➡ ]"); ?>
 		</div>
 		</article><!-- post -->
      <?php endwhile; ?>
      <?php endif; ?>
      <?php if (is_single()): ?>
        <!-- 個別記事の表示かどうかを調べる関数「is_single()」を使って、個別記事の場合と記事リストの場合での表示を分ける。 -->
         <div id="link">
          <?php  previous_posts_link('前の記事：%link'); ?>
          <?php  next_posts_link('次の記事：%link'); ?>
 		 </div>
 		 <?php comments_template(); ?><!-- comments_template() コメントテンプレートを読み込んで表示する。 -->
		<?php if (pings_open()): ?>
		<div id="trackback">
			<p>トラックバック URL</p>
			<p><input type="text" value="<?php trackback_url(); ?>"></p>
		</div><!-- trackback_url () トラックバック用 URL を出力する。 -->
	    <?php endif; ?>
		<?php else: ?>
 			<div id="link">
 			<?php previous_posts_link(); ?>
 			<?php next_posts_link(); ?>
			</div>
	    <?php endif; ?>
 <?php get_footer(); ?>