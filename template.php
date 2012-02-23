<?php
/*
add classes to forms for the tooltip love
*/
function mobydick_form_alter(&$form, &$form_state, $form_id) {
//  print $form_id;
  if( $form_id == "user_login"){
    $form['#attributes']['class'] = "tooltip";
  }elseif($form_id == "user_register_form"){
    $form['#attributes']['class'] = "tooltip";
  }elseif($form_id == "user_pass"){
    $form['#attributes']['class'] = "tooltip";
  }elseif($form_id == "user_login_block"){
  //  $form['#attributes']['class'] = "tooltip";
  }
}

