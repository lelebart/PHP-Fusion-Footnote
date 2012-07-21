<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: footnote_bbcode_include_var.php
| Author: BigBatT ( bigbatt [at] hotmail [dot] it )
| Co-Author: Valerio Vendrame (lelebart)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

$__BBCODE__[] = array(
	"description"		=>	$locale["bb_footnote_description"],
	"value"				=>	"footnote",
	"bbcode_start"		=>	"[footnote]",
	"bbcode_end"		=>	"[/footnote]",
	"usage"				=>	"[footnote]".$locale["bb_footnote_usage"]."[/footnote]",
);
?>