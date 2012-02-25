<?php
/*
<?php kpr($comment); ?>
<?php kpr($content); ?>
*/


//split reply links to a seperate element
$reply_text = $content['links']['comment']['#links']['comment-reply']['title'];
$reply_path = $content['links']['comment']['#links']['comment-reply']['href'];				
if($reply_path){
	$reply =  l($reply_text, $reply_path, array('attributes' => array('class' => array('reply'))));
}

unset($content['links']['comment']['#links']['comment-reply']);

if ($classes) {
  $classes = ' class="'. $classes . ' "';
}
?>

<article<?php // print $classes; ?><?php print $attributes; ?>> 
  <h3>
		<?php print $picture; ?>
		<?php print $comment->subject; ?>
    <?php print $permalink; ?>		
	</h3>

  <?php if ($new): ?>
    <mark><?php print $new; ?></mark>
  <?php endif; ?>

		<footer>
			<?php print $author; ?>

			<time datetime="<?php print date('Y-m-d', $comment->created); ?>"><?php print $created; ?></time>	
	    <!--	
			<span class="changed">(<?php print t('changed'); ?> <time datetime="<?php print date('Y-m-d', $comment->changed); ?>"><?php print $changed; ?></time>)</span>
			-->
			<?php print render($content['links']) ?>			
		</footer>

	

	
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['links']);
      print render($content);
    ?>

    <?php if ($signature): ?>
      <aside class="user-signature"> <?php print $signature; ?> </aside>
    <?php endif; ?>
	
	</div>

	<?php print $reply; ?>
		
</article> <!-- /.comment -->
