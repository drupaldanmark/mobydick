<?php
//kpr(get_defined_vars());
//http://drupalcontrib.org/api/drupal/drupal--modules--node--node.tpl.php
//node--[CONTENT TYPE].tpl.php

if ($classes) {
  $classes = ' class="'. $classes . ' "';
}

if ($id_node) {
  $id_node = ' id="'. $id_node . '"';
}
//kpr($content);
hide($content['comments']);
hide($content['links']);
hide($content['taxonomy_forums']);
?>

<!--node-->
<article <?php print $id_node . $classes .  $attributes; ?> role="article">
  <?php print $mothership_poorthemers_helper; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <footer>
    <figure>
      <?php print $user_picture; ?>
      <figcaption><?php print $name; ?></figcaption>
    </figure>

		<time datetime="<?php print date('Y-m-d', $node->created); ?>"><?php print $date; ?></time>

  	<?php if(module_exists('comment') AND $comment_count > 0): ?>
    <span class="comments">Comments: <?php print $comment_count; ?></span>
		<?php endif; ?>

  </footer>

  <div class="content">
    <?php print render($content);?>
  </div>

  <?php // print render($content['links']); ?>



	<?php print render($content['comments']); ?>
</article>

