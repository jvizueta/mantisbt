<?php
# MantisBT - A PHP based bugtracking system

# MantisBT is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# MantisBT is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package MantisBT
 * @copyright Copyright (C) 2000 - 2002  Kenzaburo Ito - kenito@300baud.org
 * @copyright Copyright (C) 2002 - 2013  MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 *
 * @uses core.php
 */

/**
 * MantisBT Core API's
 */
require_once( 'core.php' );

$tpl_file = __FILE__;
$tpl_mantis_dir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;
$tpl_show_page_header = true;
$tpl_force_readonly = false;
$tpl_fields_config_option = 'bug_view_page_fields';

define ( 'BUG_VIEW_INC_ALLOW', true );
include( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'bug_view_inc.php' );
