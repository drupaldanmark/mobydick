<?php
//kpr(get_defined_vars());
//kpr($node);
//kpr($content);
//http://drupalcontrib.org/api/drupal/drupal--modules--node--node.tpl.php

//tpl variations:
//node--[CONTENT TYPE].tpl.php
//node--view--[CONTENT TYPE].tpl.php
if ($classes) {
  $classes = ' class="'. $classes . ' "';
}

if ($id_node) {
  $id_node = ' id="'. $id_node . '"';
}

//hide basic elements for life!
hide($content['comments']);
hide($content['links']);
hide($content['body']);
hide($content['taxonomy_vocabulary_5']);


//clean teaser
hide($content['field_event_teaser']);
$teaser = $content['field_event_teaser']['#items']['0']['safe_value'];

//image:
//remove the label  fromt image
hide($content['field_event_image']);
$content['field_event_image']['#label_display'] = "hidden";

//date
//remove the label  fromt image & only get the markup no f'ing wrapper
hide($content['field_event_date']);
$content['field_event_date']['#label_display'] = "hidden";
$date 	= $content['field_event_date']['0']['#markup'];
?>

<!--node--view--event-->
<article role="article">
  <?php print $mothership_poorthemers_helper; ?>

	<h3<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h3>

	<?php print $date; ?>

	<div class="shadow">
		<?php // print render($content['field_event_image']); ?>
	</div>
	<p>
		<?php print $teaser; ?>
	</p>

	<?php print render($content);?>

</article>

