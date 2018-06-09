<?php
 
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
 
if ( post_password_required() ) { ?>
<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
return;
}
?>
 
<!-- You can start editing here. -->
<div id="respond">
<h1 class="title"> <?php comment_form_title( 'Leave a Comment', 'Leave a Reply to %s' ); ?></h1>
<div class="cancel-comment-reply">
<?php cancel_comment_reply_link(); ?>
</div>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
<?php if ( $user_ID ) : ?>
 
Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a>
 
<?php else : ?>
 Name: (required)<br> <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="20" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<br/>

Email: (required)<br>  <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="20" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<br/>
Website:<br> <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="20" tabindex="3" />
 <br>
<?php endif; ?>
Comment:
 <p><textarea name="comment" id="comment"  rows="10" tabindex="4"></textarea></p>
 
<input name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
<?php comment_id_fields(); ?>
</form>
 
<?php endif; // If registration required and not logged in ?>

</div>

<br>

<?php if ( have_comments() ) : ?>
<center>
<h4><?php comments_number('No comments', 'One comment', '% comments' );?> </h4>
</center>
 <ol class="commentlist">
 <?php wp_list_comments( $args, $comments ); ?> 


</ol>

<?php else : // this is displayed if there are no comments so far ?>
 
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
 
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
 
<?php endif; ?>
<?php endif; ?>
 
<?php if ('open' == $post->comment_status) : ?>
 
 
<?php endif; // if you delete this the sky will fall on your head ?>