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
 * @uses check_api.php
 * @uses config_api.php
 */

if ( !defined( 'CHECK_I18N_INC_ALLOW' ) ) {
	return;
}

/**
 * MantisBT Check API
 */
require_once( 'check_api.php' );
require_api( 'config_api.php' );

check_print_section_header_row( 'Internationalization' );

$t_config_default_timezone = config_get_global( 'default_timezone' );
if( $t_config_default_timezone ) {
	check_print_test_row(
		'Default timezone has been specified in config_inc.php (default_timezone option)',
		in_array( $t_config_default_timezone, timezone_identifiers_list() ),
		array(
			true => 'Default timezone is: ' . htmlentities( $t_config_default_timezone ),
			false => 'Invalid timezone \'' . htmlentities( $t_config_default_timezone ) . '\' specified for the default_timezone configuration option.'
		)
	);
} else {
	$t_php_default_timezone = ini_get( 'date.timezone' );
	check_print_test_row(
		'Default timezone has been specified in config_inc.php (default_timezone option) or php.ini (date.timezone directive)',
		in_array( $t_php_default_timezone, timezone_identifiers_list() ),
		array(
			true => 'Default timezone (specified by the date.timezone directive in php.ini) is: ' . htmlentities( $t_php_default_timezone ),
			false => 'Invalid timezone \'' . htmlentities( $t_php_default_timezone ) . '\' specified for the date.timezone php.ini directive.'
		)
	);
}
