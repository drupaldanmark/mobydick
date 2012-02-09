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
hide($content['teaser']);

hide($content['body']);
hide($content['field_event_date']);
hide($content['field_event_link']);
hide($content['field_event_teaser']);

hide($content['field_event_image']);
$content['field_event_image']['#label_display'] = "hidden";
$image = $content['field_event_teaser']['#items']['0']['safe_value'];

hide($content['taxonomy_vocabulary_6']);
hide($content['taxonomy_vocabulary_5']);
?>

<article <?php print $id_node . $classes .  $attributes; ?> role="article">
	<?php print $mothership_poorthemers_helper; ?>

	<?php print render($title_prefix); ?>
	 <?php if (!$page): ?>
		<h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
		<h3><?php print render($content['field_event_date']); ?></h3>
	<?php endif; ?>
	<?php print render($title_suffix); ?>

	<div class="content cf">
		<div class="gf g6">
			<div class="shadow">
				<?php print render($content['field_event_image']); ?>
			</div>

			<?php print render($content['body']); ?>

		</div>
		<div class="g3">
			<?php print render($content['field_event_date']); ?>
			<?php print render($content['field_event_link']); ?>
			<?php print render($content);?>
		</div>
	</div>

	<?php  print render($content['links']); ?>

	<footer>
		<time datetime="<?php print date('Y-m-d', $node->created); ?>" pubdate><?php print $date; ?></time>
	</footer>


	<?php  print render($content['comments']); ?>
</article>

