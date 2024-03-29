<?php if ( post_password_required() ) { return; } ?>
<?php if ( comments_open() ) { comment_form(); } ?>
<section id="comments" class="themeform">
<?php if ( have_comments() ) : global $wp_query; ?>
<h3 class="heading"><?php comments_number( __( 'No Comments', 'psythemes' ), __( '1 Comment', 'psythemes' ), __( '% Comments', 'psythemes' ) ); ?></h3>
<?php if ( ! empty( $comments_by_type['comment'] ) ) { ?>

<div class="post-comments">
<?php
// Display comments
wp_list_comments( array(
	'callback' => 'better_comments'
) );
?>
</div><!--/.commentlist-->
<?php if ( get_comment_pages_count() > 1 && get_option('page_comments') ) : ?>
<nav class="comments-nav group">
<div class="nav-previous"><?php previous_comments_link(); ?></div>
<div class="nav-next"><?php next_comments_link(); ?></div>
</nav><!--/.comments-nav-->
<?php endif; ?>

<?php } ?>
<?php if ( ! empty( $comments_by_type['pings'] ) ) { ?>
<div id="pinglist-container" class="comment-tab">
<ol class="pinglist">
<?php 
$pings = $comments_by_type['pings'];
foreach ($pings as $comment) { ?>
<li class="ping">
<div class="ping-link"><?php comment_author_link($comment); ?></div>
<div class="ping-meta"><?php comment_date( get_option( 'date_format' ), $comment ); ?></div>
<div class="ping-content"><?php comment_text($comment); ?></div>
</li>
<?php } ?>
</ol>
</div>
<?php } ?>
<?php else: ?>
<?php if (comments_open()) : ?>
<?php else : ?>
<?php endif; ?>
<?php endif; ?>
</section>