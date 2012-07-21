+------------------------------------------------------+
| Type: ...... BBcode
| Name: ...... Footnote
| Version: ... 2.00
| Author: .... BigBatT
| Co-Author: . Valerio Vendrame (lelebart)
| Released: .. Nov, 25th 2011
| Download: .. http://php-fusion.it
+------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2011 Nick Jones
| http://www.php-fusion.co.uk/
+------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+------------------------------------------------------+

	/************************************************\
	
		Table of Contents
		- Description
		- Installation
		- Notes
		
	\************************************************/

+-------------+
| DESCRIPTION |
+-------------+

With this BBcode you can make footnotes.


+--------------+
| INSTALLATION |
+--------------+

1. Upload all files and folders to your ftp root;
2. Go to Admin -> System Administration -> BBCodes and 
3. just enable "Footnote" BBCode, that's it!


+-------+
| NOTES | for translators
+-------+

$locale['bb_footnote_text'] *MUST* contain both %u and %s chars, they are need for sprintf: "Note %u <a href='#%s'>&uarr; back to text</a>:"