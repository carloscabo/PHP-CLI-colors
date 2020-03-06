<?php
/* Usage:
echo cli_error, "Error", cli_reset;
echo cli_red, cli_bold, "Bold red text", cli_reset; */

// Resets to default style
define("cli_reset",    "\e[0m");

// Text decorations
define("cli_bold",     "\e[1m");
define("cli_dim",      "\e[2m");
define("cli_underline","\e[4m");
define("cli_blink",    "\e[5m");
define("cli_reverse",  "\e[7m");
define("cli_hiden",    "\e[8m");

define("cli_clreol",  "\e[K"); // Clears to the end of line
define("cli_eol",     "\n");
define("cli_br",      "\n");

// Usefull for drawing progress bars [######---------]
define("cli_clear_same_line","\e[2K\r");

// Sounds (if supported)
define("cli_bell",    "\007");

// Foreground
define("cli_default",       "\e[0,39m");
define("cli_black",         "\e[0;30m");
define("cli_red",           "\e[0;31m");
define("cli_green",         "\e[0;32m");
define("cli_yellow",        "\e[0;33m");
define("cli_blue",          "\e[0;34m");
define("cli_magenta",       "\e[0;35m");
define("cli_cyan",          "\e[0;36m");
define("cli_grey",          "\e[0;37m");

define("cli_light_red",     "\e[1;31m");
define("cli_light_green",   "\e[1;32m");
define("cli_light_yellow",  "\e[1;33m");
define("cli_light_blue",    "\e[1;34m");
define("cli_light_magenta", "\e[1;35m");
define("cli_light_cyan",    "\e[1;36m");
define("cli_white",         "\e[1;37m");

define("cli_light_red_alt",     "\e[1;91m");
define("cli_light_green_alt",   "\e[1;92m");
define("cli_light_yellow_alt",  "\e[1;93m");
define("cli_light_blue_alt",    "\e[1;94m");
define("cli_light_magenta_alt", "\e[1;95m");
define("cli_light_cyan_alt",    "\e[1;96m");
define("cli_white_alt",         "\e[1;97m");

// Backgrounds
define("cli_default_bg",    "\e[49m");
define("cli_black_bg",      "\e[40m");
define("cli_red_bg",        "\e[41m");
define("cli_green_bg",      "\e[42m");
define("cli_yellow_bg",     "\e[43m");
define("cli_blue_bg",       "\e[44m");
define("cli_magenta_bg",    "\e[45m");
define("cli_cyan_bg",       "\e[46m");
define("cli_grey_bg",       "\e[47m");

define("cli_dark_grey_bg",    "\e[100m");
define("cli_light_red_bg",    "\e[101m");
define("cli_light_green_bg",  "\e[102m");
define("cli_light_yellow_bg", "\e[103m");
define("cli_light_blue_bg",   "\e[104m");
define("cli_light_magenta_bg","\e[105m");
define("cli_light_cyan_bg",   "\e[106m");
define("cli_white_bg",        "\e[107m");

// Useful snippets
define("cli_error",   cli_black . cli_red_bg . cli_clreol);
define("cli_warning", cli_black . cli_yellow_bg . cli_clreol);
define("cli_info",    cli_black . cli_blue_bg . cli_clreol);
define("cli_success", cli_black . cli_green_bg . cli_clreol);

