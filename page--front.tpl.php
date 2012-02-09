<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<script type="text/javascript" src="http://use.typekit.com/hsc3ouy.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--page--front.tpl.php-->
<?php print $mothership_poorthemers_helper; ?>

<header class="cf" role="banner">
  <div>
    <?php if ($logo): ?>
      <figure class="logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      </figure>
    <?php endif; ?>

	<div class="header">
     <?php print render($page['header']); ?>
  </div>

  <div class="header_menu">
    <?php print render($page['menu']); ?>
  </div>

  </div>
</header>

<div class="page cf">

  <?php if ($tabs): ?>
    <nav class="tabs"><?php print render($tabs); ?></nav>
  <?php endif; ?>


  <div role="main">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>


    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="drupal-messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      </div>
    <?php } ?>



    <?php print render($page['content_pre']); ?>

    <div class="first gf g8">
      <?php print render($page['sidebar_first']); ?>
    </div>
    <div class="second g4">

      <?php print render($page['sidebar_second']); ?>
    </div>

    <?php // print render($page['content']); ?>

    <?php print render($page['content_post']); ?>

  </div><!--/main-->





  <div class="bottom">
    <div class="odd"><?php print render($page['fourth_1column']); ?></div>
    <div class="even"><?php print render($page['fourth_2column']); ?></div>
    <div class="odd"><?php print render($page['fourth_3column']); ?></div>
    <div class="even"><?php print render($page['fourth_4column']); ?></div>
  </div>

</div><!--/page-->



<footer role="contentinfo">

  <div>
    <div><?php print render($page['footer_1column']); ?></div>
    <div><?php print render($page['footer_2column']); ?></div>
    <div><?php print render($page['footer_3column']); ?></div>
    <div><?php print render($page['footer_4column']); ?></div>

    <?php if($page['footer']){ ?>
    <aside>
      <?php print render($page['footer']); ?>
    </aside>
    <?php } ?>

  </div>

</footer>
