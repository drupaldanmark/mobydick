<?php
//kpr(get_defined_vars());
//kpr($node);
//kpr($content);
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
hide($content['field_showcase_url']);
hide($content['field_showcase_images']);
hide($content['field_showcase_category']);
hide($content['body']);
?>

<!--node-->
<article <?php print $id_node . $classes .  $attributes; ?> role="article">
  <?php print $mothership_poorthemers_helper; ?>

  <?php print render($title_prefix); ?>
   <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>


  <div class="content cf">
		<div class="gf g6">

			<div class="shadow">
				<?php print render($content['field_showcase_images']); ?>
			</div>

			<?php print render($content['field_showcase_url']); ?>
			<?php print render($content['field_showcase_category']); ?>

		</div>
		<div class="g3">
				<?php print render($content['body']); ?>

				<?php print render($content);?>
		</div>



  </div>

  <footer>
    <figure>
      <?php print $user_picture; ?>
      <figcaption><?php print $name; ?></figcaption>
    </figure>

		<time datetime="<?php print date('Y-m-d', $node->created); ?>"><?php print $date; ?></time>

  </footer>


  <?php // print render($content['links']); ?>



	<?php  print render($content['comments']); ?>
</article>

