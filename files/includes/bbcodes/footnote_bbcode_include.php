<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: footnote_bbcode_include.php
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

preg_match_all("#\[footnote\](.*?)\[/footnote\]#si", $text, $footnotes, PREG_PATTERN_ORDER);

if (count($footnotes[1]) != 0) {
	if(!function_exists("footnote_addtohead")) {
		function footnote_addtohead() {
			$return  = "<!--[ footnote BBcode by BigBatT, few css and mockups by lelebart ]-->";
			$return .= "<style type='text/css'>";
			$return .= "/*<![CDATA[*/";
			$return .=   "sup.fn_sup { vertical-align: sup; padding: 0 0.1em 0 0.3em; }";
			$return .=   "sup.fn_sup a { font-size: 83%; }";
			$return .=   "div.emulated-fieldset.footnote div.attachments-list { font-size: 97%; }";
			$return .=   "div.emulated-fieldset.footnote:target span.emulated-legend, sup.fn_sup:target a { background-color: #def; }";
			$return .= "/*]]>*/";
			$return .= "</style>";
			return $return;
		}
		$footnote_addtohead = footnote_addtohead();
		add_to_head($footnote_addtohead);
	}
	
	$count = 1; $fn_pid = isset($data['post_id']) ? $data['post_id'] : mt_rand();
	foreach($footnotes[1] as $key => $note) {
		$_bmrk = 'p'.$fn_pid.'fn'.$count.'k'.$key;
		$rbmrk = 'p'.$fn_pid.'rn'.$count.'k'.$key;
		$_link = '<sup class="fn_sup" id="'.$rbmrk.'"><a name="'.$rbmrk.'"><!--['.$_bmrk.']--></a>'.
				 '<a href="#'.$_bmrk.'">&#91;'.$count.'&#93;</a></sup>';
		$text  = implode( $_link, explode( $footnotes[0][$key], $text, 2 ) );
		$text .= '<div class="emulated-fieldset footnote" id="'.$_bmrk.'"><span class="emulated-legend">';
		$text .= '<a name="'.$_bmrk.'"><!--['.$_bmrk.']--></a>'.sprintf( $locale['bb_footnote_text'], $count, $rbmrk );
		$text .= '</span><div class="attachments-list">'.$note.'</div></div>';
		$count++;
	}
	
	unset($footnotes, $count, $fn_pid, $_bmrk, $rbmrk, $_link, $key, $note);
}

?>