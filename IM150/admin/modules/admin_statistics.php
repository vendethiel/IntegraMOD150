<?php
/***************************************************************************
*                           admin_statistics.php
*                            -------------------
*   begin                : Sat, Jan 04, 2003
*   copyright            : (C) 2003 Meik Sievertsen
*   email                : acyd.burn@gmx.de
*
*
*
***************************************************************************/

/***************************************************************************
*
*   This program is free software; you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation; either version 2 of the License, or
*   (at your option) any later version.
*
***************************************************************************/

if( !empty($setmodules) )
{
	$filename = basename(__FILE__);
	$module['Statistics']['Install_module'] = $filename . '?mode=mod_install';
	$module['Statistics']['Manage_modules'] = $filename . '?mode=mod_manage';
	return;
}

?>