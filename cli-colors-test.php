<?php
  include 'cli-colors.php';
  $sample_text_1 = 'Cras justo odio, dapibus, ';
  $sample_text_2 = 'dapibus ac facilisis. ';
  $sample_text_3 = ' Nullam quis risus molle.';

  $fgs = [cli_default, cli_black, cli_red, cli_green, cli_yellow, cli_blue, cli_magenta, cli_cyan, cli_grey, cli_light_red, cli_light_green, cli_light_yellow, cli_light_blue, cli_light_magenta, cli_light_cyan, cli_white, cli_light_red_alt, cli_light_green_alt, cli_light_yellow_alt, cli_light_blue_alt, cli_light_magenta_alt, cli_light_cyan_alt, cli_white_alt];

  $bgs = [cli_default_bg, cli_black_bg, cli_red_bg, cli_green_bg, cli_yellow_bg,  cli_blue_bg, cli_magenta_bg, cli_cyan_bg, cli_grey_bg, cli_dark_grey_bg, cli_light_red_bg, cli_light_green_bg, cli_light_yellow_bg, cli_light_blue_bg, cli_light_magenta_bg, cli_light_cyan_bg, cli_white_bg];

  $decors = [cli_bold, cli_dim, cli_underline, cli_blink, cli_reverse, cli_hiden];

  foreach ($fgs as $fg) {
    # code...
    foreach ($bgs as $bg) {
      # code...
      foreach ($decors as $decor) {
        # code...
        echo $fg, $bg, $sample_text_1, $decor, $sample_text_2,  cli_reset, $sample_text_3, cli_eol;
      }
    }
  }

  echo cli_error,  'Error message!!!', cli_eol, cli_reset;
  echo cli_warning,'Warning message', cli_eol, cli_reset;
  echo cli_info, 'Info messsage', cli_eol, cli_reset;
  echo cli_success, 'Success message', cli_eol, cli_reset;

  echo cli_reset, cli_clreol, 'Everything reseted? ;)', cli_eol;