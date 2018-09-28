<?php

/**
 * A simple fix for a shell execution on preg_match('/[0-9]\.[0-9]+\.[0-9]+/', shell_exec('mysql -V'), $version);
 * The only edit that was done is that shell_exec('mysql -V') was changed to mysql_get_server_info() because not all
 * systems have shell access. XAMPP, WAMP, or any Windows system might not have this type of access. mysql_get_server_info()
 * is easier to use because it pulls the MySQL version from phpinfo() and is compatible with all Operating Systems.
 * @link http://www.magentocommerce.com/knowledge-base/entry/how-do-i-know-if-my-server-is-compatible-with-magento
 * @author Magento Inc.
 */

function extension_check($extensions) {
  $fail = '';
	$pass = '';

	if(version_compare(phpversion(), '7.0.13', '<')) {
		$fail .= 'You need PHP 7.0.13 (or greater)';
	} else {
		$pass .='You have PHP 7.0.13 (or greater)';
	}

	/*if(!ini_get('safe_mode')) {
		$pass .='Safe Mode is off';
		preg_match('/[0-9]\.[0-9]+\.[0-9]+/', mysql_get_server_info(), $version);

		if(version_compare($version[0], '5.6', '<')) {
			$fail .= 'You need MySQL 5.6 (or greater)';
		} else {
			$pass .='You have MySQL 5.6 (or greater)';
		}
	} else { $fail .= 'Safe Mode is on';  }*/

	foreach($extensions as $extension) {
		if(!extension_loaded($extension)) {
			$fail .= 'You are missing the '.$extension.' extension \n';
		} else{	$pass .= 'You have the '.$extension.' extension \n';
		}
	}

	if($fail) {
		echo '<p>Your server does not meet the following requirements in order to install Magento.';
		echo '<br>The following requirements failed, please contact your hosting provider in order to receive assistance with meeting the system requirements for Magento:';
		echo ''.$fail.'';
		echo 'The following requirements were successfully met:';
		echo ''.$pass.'';
	} else {
		echo 'Congratulations! Your server meets the requirements for Magento';
		echo ''.$pass.'';

	}
}

extension_check(array(
	'curl',
	'dom',
	'gd',
	'hash',
	'iconv',
	'mcrypt',
	'pcre',
	'pdo',
	'pdo_mysql',
	'simplexml',
	'bc-math',
	'ctype',
	'intl',
	'mbstring',
	'openssl',
	'soap',
	'spl',
	'libxml',
	'xsl',
	'zip',
	'json'
));