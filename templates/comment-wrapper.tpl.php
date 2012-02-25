<aside id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($content['comments']); ?>

  <?php if ($content['comment_form']): ?>
    <?php print render($content['comment_form']); ?>
  <?php endif; ?>

</aside>


