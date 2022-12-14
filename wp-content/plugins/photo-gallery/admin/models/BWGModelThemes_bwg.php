<?php

class BWGModelThemes_bwg {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct() {
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function get_rows_data() {
    global $wpdb;
    $where = ((isset($_POST['search_value']) && (esc_html($_POST['search_value']) != '')) ? 'WHERE name LIKE "%' . esc_html($_POST['search_value']) . '%"' : '');
    $asc_or_desc = ((isset($_POST['asc_or_desc'])) ? esc_html($_POST['asc_or_desc']) : 'asc');
    $order_by = ' ORDER BY ' . ((isset($_POST['order_by']) && esc_html($_POST['order_by']) != '') ? esc_html($_POST['order_by']) : 'id') . ' ' . $asc_or_desc;
    if (isset($_POST['page_number']) && $_POST['page_number']) {
      $limit = ((int) $_POST['page_number'] - 1) * 20;
    }
    else {
      $limit = 0;
    }
    $query = "SELECT * FROM " . $wpdb->prefix . "bwg_theme " . $where . $order_by . " LIMIT " . $limit . ",20";
    $rows = $wpdb->get_results($query);
    return $rows;
  }
  
  public function get_row_data($id, $reset) {
    global $wpdb;
    if ($id != 0) {
      $row = $wpdb->get_row($wpdb->prepare('SELECT * FROM ' . $wpdb->prefix . 'bwg_theme WHERE id="%d"', $id));
      if ($reset) {
        if (!$row->default_theme) {
          $row_id = $row->id;
          $row_name = $row->name;
          $row = $wpdb->get_row($wpdb->prepare('SELECT * FROM ' . $wpdb->prefix . 'bwg_theme WHERE default_theme="%d"', 1));
          $row->id = $row_id;
          $row->name = $row_name;
          $row->default_theme = FALSE;
        }
        else {
          $row->thumb_margin = 4;
          $row->thumb_padding = 0;
          $row->thumb_border_radius = '0';
          $row->thumb_border_width = 0;
          $row->thumb_border_style = 'none';
          $row->thumb_border_color = 'CCCCCC';
          $row->thumb_bg_color = 'FFFFFF';
          $row->thumbs_bg_color = 'FFFFFF';
          $row->thumb_bg_transparent = 0;
          $row->thumb_box_shadow = '0px 0px 0px #888888';
          $row->thumb_transparent = 100;
          $row->thumb_align = 'left';
          $row->thumb_hover_effect = 'scale';
          $row->thumb_hover_effect_value = '1.1';
          $row->thumb_transition = 1;
          $row->thumb_title_font_color = 'CCCCCC';
          $row->thumb_title_font_style = 'segoe ui';
          $row->thumb_title_pos = 'bottom';
          $row->thumb_title_font_size = 16;
          $row->thumb_title_font_weight = 'bold';
          $row->thumb_title_margin = '2px';
          $row->thumb_title_shadow = '0px 0px 0px #888888';

          $row->page_nav_position = 'bottom';
          $row->page_nav_align = 'center';
          $row->page_nav_number = 0;
          $row->page_nav_font_size = 12;
          $row->page_nav_font_style = 'segoe ui';
          $row->page_nav_font_color = '666666';
          $row->page_nav_font_weight = 'bold';
          $row->page_nav_border_width = 1;
          $row->page_nav_border_style = 'solid';
          $row->page_nav_border_color = 'E3E3E3';
          $row->page_nav_border_radius = '0';
          $row->page_nav_margin = '0';
          $row->page_nav_padding = '3px 6px';
          $row->page_nav_button_bg_color = 'FFFFFF';
          $row->page_nav_button_bg_transparent = 100;
          $row->page_nav_box_shadow = '0';
          $row->page_nav_button_transition = 1;
          $row->page_nav_button_text = 0;

          $row->lightbox_overlay_bg_color = '000000';
          $row->lightbox_overlay_bg_transparent = 70;
          $row->lightbox_bg_color = '000000';
          $row->lightbox_ctrl_btn_pos = 'bottom';
          $row->lightbox_ctrl_btn_align = 'center';
          $row->lightbox_ctrl_btn_height = 20;
          $row->lightbox_ctrl_btn_margin_top = 10;
          $row->lightbox_ctrl_btn_margin_left = 7;
          $row->lightbox_ctrl_btn_transparent = 100;
          $row->lightbox_ctrl_btn_color = 'FFFFFF';
          $row->lightbox_toggle_btn_height = 14;
          $row->lightbox_toggle_btn_width = 100;
          $row->lightbox_ctrl_cont_bg_color = '000000';
          $row->lightbox_ctrl_cont_transparent = 65;
          $row->lightbox_ctrl_cont_border_radius = 4;
          $row->lightbox_close_btn_transparent = 100;
          $row->lightbox_close_btn_bg_color = '000000';
          $row->lightbox_close_btn_border_width = 2;
          $row->lightbox_close_btn_border_radius = '16px';
          $row->lightbox_close_btn_border_style = 'none';
          $row->lightbox_close_btn_border_color = 'FFFFFF';
          $row->lightbox_close_btn_box_shadow = '0';
          $row->lightbox_close_btn_color = 'FFFFFF';
          $row->lightbox_close_btn_size = 10;
          $row->lightbox_close_btn_width = 20;
          $row->lightbox_close_btn_height = 20;
          $row->lightbox_close_btn_top = '-10';
          $row->lightbox_close_btn_right = '-10';
          $row->lightbox_close_btn_full_color = 'FFFFFF';
          $row->lightbox_rl_btn_bg_color = '000000';
          $row->lightbox_rl_btn_border_radius = '20px';
          $row->lightbox_rl_btn_border_width = 0;
          $row->lightbox_rl_btn_border_style = 'none';
          $row->lightbox_rl_btn_border_color = 'FFFFFF';
          $row->lightbox_rl_btn_box_shadow = '';
          $row->lightbox_rl_btn_color = 'FFFFFF';
          $row->lightbox_rl_btn_height = 40;
          $row->lightbox_rl_btn_width = 40;
          $row->lightbox_rl_btn_size = 20;
          $row->lightbox_close_rl_btn_hover_color = 'CCCCCC';
          $row->lightbox_comment_pos = 'left';
          $row->lightbox_comment_width = 400;
          $row->lightbox_comment_bg_color = '000000';
          $row->lightbox_comment_font_color = 'CCCCCC';
          $row->lightbox_comment_font_style = 'segoe ui';
          $row->lightbox_comment_font_size = 12;
          $row->lightbox_comment_button_bg_color = '616161';
          $row->lightbox_comment_button_border_color = '666666';
          $row->lightbox_comment_button_border_width = 1;
          $row->lightbox_comment_button_border_style = 'none';
          $row->lightbox_comment_button_border_radius = '3px';
          $row->lightbox_comment_button_padding = '3px 10px';
          $row->lightbox_comment_input_bg_color = '333333';
          $row->lightbox_comment_input_border_color = '666666';
          $row->lightbox_comment_input_border_width = 1;
          $row->lightbox_comment_input_border_style = 'none';
          $row->lightbox_comment_input_border_radius = '0';
          $row->lightbox_comment_input_padding = '2px';
          $row->lightbox_comment_separator_width = 1;
          $row->lightbox_comment_separator_style = 'solid';
          $row->lightbox_comment_separator_color = '383838';
          $row->lightbox_comment_author_font_size = 14;
          $row->lightbox_comment_date_font_size = 10;
          $row->lightbox_comment_body_font_size = 12;
          $row->lightbox_comment_share_button_color = 'CCCCCC';
          $row->lightbox_filmstrip_pos = 'top';
          $row->lightbox_filmstrip_rl_bg_color = '3B3B3B';
          $row->lightbox_filmstrip_rl_btn_size = 20;
          $row->lightbox_filmstrip_rl_btn_color = 'FFFFFF';
          $row->lightbox_filmstrip_thumb_margin = '0 1px';
          $row->lightbox_filmstrip_thumb_border_width = 1;
          $row->lightbox_filmstrip_thumb_border_style = 'solid';
          $row->lightbox_filmstrip_thumb_border_color = '000000';
          $row->lightbox_filmstrip_thumb_border_radius = '0';
          $row->lightbox_filmstrip_thumb_deactive_transparent = 80;
          $row->lightbox_filmstrip_thumb_active_border_width = 0;
          $row->lightbox_filmstrip_thumb_active_border_color = 'FFFFFF';
          $row->lightbox_rl_btn_style = 'fa-chevron';
          $row->lightbox_rl_btn_transparent = 80;

          $row->album_compact_back_font_color = '000000';
          $row->album_compact_back_font_style = 'segoe ui';
          $row->album_compact_back_font_size = 16;
          $row->album_compact_back_font_weight = 'bold';
          $row->album_compact_back_padding = '0';
          $row->album_compact_title_font_color = 'CCCCCC';
          $row->album_compact_title_font_style = 'segoe ui'; 
          $row->album_compact_thumb_title_pos = 'bottom';
          $row->album_compact_title_font_size = 16;
          $row->album_compact_title_font_weight = 'bold';
          $row->album_compact_title_margin = '2px';
          $row->album_compact_title_shadow = '0px 0px 0px #888888';
          $row->album_compact_thumb_margin = 4;
          $row->album_compact_thumb_padding = 0;
          $row->album_compact_thumb_border_radius = '0';
          $row->album_compact_thumb_border_width = 0;
          $row->album_compact_thumb_border_style = 'none';
          $row->album_compact_thumb_border_color = 'CCCCCC';
          $row->album_compact_thumb_bg_color = 'FFFFFF';
          $row->album_compact_thumbs_bg_color = 'FFFFFF';
          $row->album_compact_thumb_bg_transparent = 0;
          $row->album_compact_thumb_box_shadow = '0px 0px 0px #888888';
          $row->album_compact_thumb_transparent = 100;
          $row->album_compact_thumb_align = 'left';
          $row->album_compact_thumb_hover_effect = 'scale';
          $row->album_compact_thumb_hover_effect_value = '1.1';
          $row->album_compact_thumb_transition = 0;

          $row->album_extended_thumb_margin = 2;
          $row->album_extended_thumb_padding = 0;
          $row->album_extended_thumb_border_radius = '0';
          $row->album_extended_thumb_border_width = 0;
          $row->album_extended_thumb_border_style = 'none';
          $row->album_extended_thumb_border_color = 'CCCCCC';
          $row->album_extended_thumb_bg_color = 'FFFFFF';
          $row->album_extended_thumbs_bg_color = 'FFFFFF';
          $row->album_extended_thumb_bg_transparent = 0;
          $row->album_extended_thumb_box_shadow = '';
          $row->album_extended_thumb_transparent = 100;
          $row->album_extended_thumb_align = 'left';
          $row->album_extended_thumb_hover_effect = 'scale';
          $row->album_extended_thumb_hover_effect_value = '1.1';
          $row->album_extended_thumb_transition = 0;
          $row->album_extended_back_font_color = '000000';
          $row->album_extended_back_font_style = 'segoe ui';
          $row->album_extended_back_font_size = 20;
          $row->album_extended_back_font_weight = 'bold';
          $row->album_extended_back_padding = '0';
          $row->album_extended_div_bg_color = 'FFFFFF';
          $row->album_extended_div_bg_transparent = 0;
          $row->album_extended_div_border_radius = '0 0 0 0';
          $row->album_extended_div_margin = '0 0 5px 0';
          $row->album_extended_div_padding = 10;
          $row->album_extended_div_separator_width = 1;
          $row->album_extended_div_separator_style = 'solid';
          $row->album_extended_div_separator_color = 'E0E0E0';
          $row->album_extended_thumb_div_bg_color = 'FFFFFF';
          $row->album_extended_thumb_div_border_radius = '0';
          $row->album_extended_thumb_div_border_width = 1;
          $row->album_extended_thumb_div_border_style = 'solid';
          $row->album_extended_thumb_div_border_color = 'E8E8E8';
          $row->album_extended_thumb_div_padding = '5px';
          $row->album_extended_text_div_bg_color = 'FFFFFF';
          $row->album_extended_text_div_border_radius = '0';
          $row->album_extended_text_div_border_width = 1;
          $row->album_extended_text_div_border_style = 'solid';
          $row->album_extended_text_div_border_color = 'E8E8E8';
          $row->album_extended_text_div_padding = '5px';
          $row->album_extended_title_span_border_width = 1;
          $row->album_extended_title_span_border_style = 'none';
          $row->album_extended_title_span_border_color = 'CCCCCC';
          $row->album_extended_title_font_color = '000000';
          $row->album_extended_title_font_style = 'segoe ui';
          $row->album_extended_title_font_size = 16;
          $row->album_extended_title_font_weight = 'bold';
          $row->album_extended_title_margin_bottom = 2;
          $row->album_extended_title_padding = '2px';
          $row->album_extended_desc_span_border_width = 1;
          $row->album_extended_desc_span_border_style = 'none';
          $row->album_extended_desc_span_border_color = 'CCCCCC';
          $row->album_extended_desc_font_color = '000000';
          $row->album_extended_desc_font_style = 'segoe ui';
          $row->album_extended_desc_font_size = 14;
          $row->album_extended_desc_font_weight = 'normal';
          $row->album_extended_desc_padding = '2px';
          $row->album_extended_desc_more_color = 'F2D22E';
          $row->album_extended_desc_more_size = 12;

          $row->masonry_thumb_padding = 4;
          $row->masonry_thumb_border_radius = '0';
          $row->masonry_thumb_border_width = 0;
          $row->masonry_thumb_border_style = 'none';
          $row->masonry_thumb_border_color = 'CCCCCC';
          $row->masonry_thumbs_bg_color = 'FFFFFF';
          $row->masonry_thumb_bg_transparent = 0;
          $row->masonry_thumb_transparent = 100;
          $row->masonry_thumb_align = 'left';
          $row->masonry_thumb_hover_effect = 'scale';
          $row->masonry_thumb_hover_effect_value = '1.1';
          $row->masonry_thumb_transition = 0;

          $row->slideshow_cont_bg_color = '000000';
          $row->slideshow_close_btn_transparent = 100;
          $row->slideshow_rl_btn_bg_color = '000000';
          $row->slideshow_rl_btn_border_radius = '20px';
          $row->slideshow_rl_btn_border_width = 0;
          $row->slideshow_rl_btn_border_style = 'none';
          $row->slideshow_rl_btn_border_color = 'FFFFFF';
          $row->slideshow_rl_btn_box_shadow = '0px 0px 0px #000000';
          $row->slideshow_rl_btn_color = 'FFFFFF';
          $row->slideshow_rl_btn_height = 40;
          $row->slideshow_rl_btn_size = 20;
          $row->slideshow_rl_btn_width = 40;
          $row->slideshow_close_rl_btn_hover_color = 'CCCCCC';
          $row->slideshow_filmstrip_pos = 'top';
          $row->slideshow_filmstrip_thumb_border_width = 1;
          $row->slideshow_filmstrip_thumb_border_style = 'solid';
          $row->slideshow_filmstrip_thumb_border_color = '000000';
          $row->slideshow_filmstrip_thumb_border_radius = '0';
          $row->slideshow_filmstrip_thumb_margin = '0 1px';
          $row->slideshow_filmstrip_thumb_active_border_width = 0;
          $row->slideshow_filmstrip_thumb_active_border_color = 'FFFFFF';
          $row->slideshow_filmstrip_thumb_deactive_transparent = 80;
          $row->slideshow_filmstrip_rl_bg_color = '3B3B3B';
          $row->slideshow_filmstrip_rl_btn_color = 'FFFFFF';
          $row->slideshow_filmstrip_rl_btn_size = 20;
          $row->slideshow_title_font_size = 16;
          $row->slideshow_title_font = 'segoe ui';
          $row->slideshow_title_color = 'FFFFFF';
          $row->slideshow_title_opacity = 70;
          $row->slideshow_title_border_radius = '5px';
          $row->slideshow_title_background_color = '000000';
          $row->slideshow_title_padding = '0 0 0 0';
          $row->slideshow_description_font_size = 14;
          $row->slideshow_description_font = 'segoe ui';
          $row->slideshow_description_color = 'FFFFFF';
          $row->slideshow_description_opacity = 70;
          $row->slideshow_description_border_radius = '0';
          $row->slideshow_description_background_color = '000000';
          $row->slideshow_description_padding = '5px 10px 5px 10px';
          $row->slideshow_dots_width = 12;
          $row->slideshow_dots_height = 12;
          $row->slideshow_dots_border_radius = '5px';
          $row->slideshow_dots_background_color = 'F2D22E';
          $row->slideshow_dots_margin = 3;
          $row->slideshow_dots_active_background_color = 'FFFFFF';
          $row->slideshow_dots_active_border_width = 1;
          $row->slideshow_dots_active_border_color = '000000';
          $row->slideshow_play_pause_btn_size = 60;
          $row->slideshow_rl_btn_style = 'fa-chevron';

          $row->blog_style_margin = '2px';
          $row->blog_style_padding = '0';
          $row->blog_style_border_radius = '0';
          $row->blog_style_border_width = 1;
          $row->blog_style_border_style = 'solid';
          $row->blog_style_border_color = 'F5F5F5';
          $row->blog_style_bg_color = 'FFFFFF';    
          $row->blog_style_transparent = 80;
          $row->blog_style_box_shadow = '';
          $row->blog_style_align = 'center';
          $row->blog_style_share_buttons_margin = '5px auto 10px auto';
          $row->blog_style_share_buttons_border_radius = '0';
          $row->blog_style_share_buttons_border_width = 0;
          $row->blog_style_share_buttons_border_style = 'none';
          $row->blog_style_share_buttons_border_color = '000000';
          $row->blog_style_share_buttons_bg_color = 'FFFFFF';
          $row->blog_style_share_buttons_align = 'right';
          $row->blog_style_img_font_size = 16;
          $row->blog_style_img_font_family = 'segoe ui';
          $row->blog_style_img_font_color = '000000';
          $row->blog_style_share_buttons_color = 'B3AFAF';
          $row->blog_style_share_buttons_bg_transparent = 0;
          $row->blog_style_share_buttons_font_size = 20;

          $row->image_browser_margin = '2px auto';
          $row->image_browser_padding = '4px';
          $row->image_browser_border_radius = '0';
          $row->image_browser_border_width =  1;
          $row->image_browser_border_style = 'none';
          $row->image_browser_border_color = 'F5F5F5';
          $row->image_browser_bg_color = 'EBEBEB';
          $row->image_browser_box_shadow = '';
          $row->image_browser_transparent = 80;
          $row->image_browser_align = 'center';	
          $row->image_browser_image_description_margin = '0px 5px 0px 5px';
          $row->image_browser_image_description_padding = '8px 8px 8px 8px';
          $row->image_browser_image_description_border_radius = '0';
          $row->image_browser_image_description_border_width = 1;
          $row->image_browser_image_description_border_style = 'none';
          $row->image_browser_image_description_border_color = 'FFFFFF';
          $row->image_browser_image_description_bg_color = 'EBEBEB';
          $row->image_browser_image_description_align = 'center';	
          $row->image_browser_img_font_size = 15;
          $row->image_browser_img_font_family = 'segoe ui';
          $row->image_browser_img_font_color = '000000';
          $row->image_browser_full_padding = '4px';
          $row->image_browser_full_border_radius = '0';
          $row->image_browser_full_border_width = 2;
          $row->image_browser_full_border_style = 'none';
          $row->image_browser_full_border_color = 'F7F7F7';
          $row->image_browser_full_bg_color = 'F5F5F5';
          $row->image_browser_full_transparent = 90;
          $row->lightbox_info_pos = 'top';
          $row->lightbox_info_align = 'right';
          $row->lightbox_info_bg_color = '000000';
          $row->lightbox_info_bg_transparent = 70;
          $row->lightbox_info_border_width = 1;
          $row->lightbox_info_border_style = 'none';
          $row->lightbox_info_border_color = '000000';
          $row->lightbox_info_border_radius = '5px';
          $row->lightbox_info_padding = '5px';
          $row->lightbox_info_margin = '15px';
          $row->lightbox_title_color = 'FFFFFF';
          $row->lightbox_title_font_style = 'segoe ui';
          $row->lightbox_title_font_weight = 'bold';
          $row->lightbox_title_font_size = 18;
          $row->lightbox_description_color = 'FFFFFF';
          $row->lightbox_description_font_style = 'segoe ui';
          $row->lightbox_description_font_weight = 'normal';
          $row->lightbox_description_font_size = 14;
        }
      }
    }
    else {
      $row = $wpdb->get_row($wpdb->prepare('SELECT * FROM ' . $wpdb->prefix . 'bwg_theme WHERE default_theme="%d"', 1));
      $row->id = 0;
      $row->name = '';
      $row->default_theme = 0;
    }
    return $row;
  }
  
  public function page_nav() {
    global $wpdb;
    $where = ((isset($_POST['search_value']) && (esc_html($_POST['search_value']) != '')) ? 'WHERE name LIKE "%' . esc_html($_POST['search_value']) . '%"'  : '');
    $query = "SELECT COUNT(*) FROM " . $wpdb->prefix . "bwg_theme " . $where;
    $total = $wpdb->get_var($query);
    $page_nav['total'] = $total;
    if (isset($_POST['page_number']) && $_POST['page_number']) {
      $limit = ((int) $_POST['page_number'] - 1) * 20;
    }
    else {
      $limit = 0;
    }
    $page_nav['limit'] = (int) ($limit / 20 + 1);
    return $page_nav;
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}