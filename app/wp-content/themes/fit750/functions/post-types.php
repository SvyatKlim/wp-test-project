<?php
add_action('init', 'rename_post_object');
function rename_post_object()
{
  $pt = get_post_type_object('post');
  $pt->menu_icon = 'dashicons-admin-post';
  $labels                     = $pt->labels;
  $labels->name               = 'Challenge';
  $labels->singular_name      = 'Challenge';
  $labels->add_new            = 'Add Challenge';
  $labels->add_new_item       = 'Add new Challenge';
  $labels->edit_item          = 'Edit Challenge';
  $labels->new_item           = 'Challenge';
  $labels->view_item          = 'View Challenge';
  $labels->search_items       = 'Search Challenge';
  $labels->not_found          = 'No challenges found';
  $labels->not_found_in_trash = 'No challenge found in Trash';
  $labels->all_items          = 'All Challenges';
  $labels->menu_name          = 'Challenges';
  $labels->name_admin_bar     = 'Challenges';

  $pt->has_archive = false;
}

