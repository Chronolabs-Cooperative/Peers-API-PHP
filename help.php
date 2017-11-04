<?php
/**
 * Chronolabs REST Blowfish Salts Repository API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://labs.coop
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         salty
 * @since           2.0.1
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @version         $Id: manager.php 1000 2015-06-16 23:11:55Z wishcraft $
 * @subpackage		help-html
 * @description		Blowfish Salts Repository API
 * @link			http://cipher.labs.coop
 * @link			http://sourceoforge.net/projects/chronolabsapis
 */


if (strlen($theip = whitelistGetIP(true))==0)
	$theip = "127.0.0.1";

$data = '';
for($t=mt_rand(0, 10); $t<mt_rand(22,45); $t++)
	while(mt_rand(0,45)<= 39)
		$data .= chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("Z"))) . chr(mt_rand(ord("A"),ord("Z"))) . chr(mt_rand(ord("a"),ord("z"))) . chr(mt_rand(ord("!"),ord("="))) . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z"))) ;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta property="og:title" content="<?php echo API_VERSION; ?>"/>
<meta property="og:type" content="api<?php echo API_TYPE; ?>"/>
<meta property="og:image" content="<?php echo API_URL; ?>/assets/images/logo_500x500.png"/>
<meta property="og:url" content="<?php echo (isset($_SERVER["HTTPS"])?"https://":"http://").$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>" />
<meta property="og:site_name" content="<?php echo API_VERSION; ?> - <?php echo API_LICENSE_COMPANY; ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="rating" content="general" />
<meta http-equiv="author" content="wishcraft@users.sourceforge.net" />
<meta http-equiv="copyright" content="<?php echo API_LICENSE_COMPANY; ?> &copy; <?php echo date("Y"); ?>" />
<meta http-equiv="generator" content="Chronolabs Cooperative (<?php echo $place['iso3']; ?>)" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo API_VERSION; ?> || <?php echo API_LICENSE_COMPANY; ?></title>
<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f9a1c208996c1d"></script>
<script type="text/javascript">
  addthis.layers({
	'theme' : 'transparent',
	'share' : {
	  'position' : 'right',
	  'numPreferredServices' : 6
	}, 
	'follow' : {
	  'services' : [
		{'service': 'facebook', 'id': 'Chronolabs'},
		{'service': 'twitter', 'id': 'JohnRingwould'},
		{'service': 'twitter', 'id': 'ChronolabsCoop'},
		{'service': 'twitter', 'id': 'Cipherhouse'},
		{'service': 'twitter', 'id': 'OpenRend'},
	  ]
	},  
	'whatsnext' : {},  
	'recommended' : {
	  'title': 'Recommended for you:'
	} 
  });
</script>
<!-- AddThis Smart Layers END -->
<link rel="stylesheet" href="<?php echo API_URL; ?>/assets/css/style.css" type="text/css" />
<!-- Custom Fonts -->
<link href="<?php echo API_URL; ?>/assets/media/Labtop/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Labtop Bold/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Labtop Bold Italic/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Labtop Italic/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Labtop Superwide Boldish/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Labtop Thin/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Labtop Unicase/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/LHF Matthews Thin/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Life BT Bold/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Life BT Bold Italic/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Prestige Elite/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Prestige Elite Bold/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo API_URL; ?>/assets/media/Prestige Elite Normal/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo API_URL; ?>/assets/css/gradients.php" type="text/css" />
<link rel="stylesheet" href="<?php echo API_URL; ?>/assets/css/shadowing.php" type="text/css" />

</head>
<body>
<div class="main">
	<img style="float: right; margin: 11px; width: auto; height: auto; clear: none;" src="<?php echo API_URL; ?>/assets/images/logo_350x350.png" />
    <h1><?php echo API_VERSION; ?> -- <?php echo API_LICENSE_COMPANY; ?></h1>
    <p>This is an API Service for creating Blowfish Salts Repository entries in case you loose your blowfish salt on sites and have encryption layers unaccessable or corrupted results without the correct salt!</p>
    <h2>Code API Documentation</h2>
    <p>You can find the phpDocumentor code API documentation at the following path :: <a target="_blank" href="<?php echo API_URL . '/'; ?>docs/" target="_blank"><?php echo API_URL . '/'; ?>docs/</a>. These should outline the source code core functions and classes for the API to function!</p>
    <h2>REGISTER Document Output</h2>
    <p>This is done with the <em>register.api</em> extension at the end of the url.</p>
    <blockquote>
		<form action="<?php echo API_URL; ?>/v1/register/raw.api" method="post">
			<label for="license-key">Licensing Key:&nbsp;</label><input type="text" name="license-key" id="license-key" value="" size="26" />
			<label for="company">Company/Organisation:&nbsp;</label><input type="text" name="company" id="company" value="" size="26" />
			<label for="uname">Username:&nbsp;</label><input type="text" name="uname" id="uname" value="" size="26" />
			<label for="email">eMail:&nbsp;</label><input type="text" name="email" id="email" value="" size="26" />
			<label for="password">Password MD5 Hash:&nbsp;</label><input type="text" name="password" id="password" value="" size="26" />
			<label for="protocol">Peer Protocol:&nbsp;</label><input type="text" name="protocol" id="protocol" value="" size="26" />
			<label for="realm">Peer Realm/Domain:&nbsp;</label><input type="text" name="realm" id="realm" value="" size="26" />
			<label for="path">Peer URL Path:&nbsp;</label><input type="text" name="path" id="path" value="" size="26" />
			<label for="type">API Type String:&nbsp;</label><input type="text" name="type" id="type" value="" size="26" />
			<label for="timezone">PHP Timezone:&nbsp;</label><input type="text" name="timezone" id="timezone" size="26"/><br/>
			<label for="time">Unix Timestamp:&nbsp;</label><input type="text" name="time" id="time" size="26"/><br/>
			<input type="submit" id="submit" Value="Register Peer with Service" />
		</form>
		Example of Form:-
		<pre>
		&lt;form action=&quot;&lt;?php echo API_URL; ?&gt;/v1/register/raw.api&quot; method=&quot;post&quot;&gt;
			&lt;label for=&quot;license-key&quot;&gt;Licensing Key:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;license-key&quot; id=&quot;license-key&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;company&quot;&gt;Company/Organisation:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;company&quot; id=&quot;company&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;uname&quot;&gt;Username:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;uname&quot; id=&quot;uname&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;email&quot;&gt;eMail:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot; id=&quot;email&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;password&quot;&gt;Password MD5 Hash:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;password&quot; id=&quot;password&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;protocol&quot;&gt;Peer Protocol:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;protocol&quot; id=&quot;protocol&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;realm&quot;&gt;Peer Realm/Domain:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;realm&quot; id=&quot;realm&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;path&quot;&gt;Peer URL Path:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;path&quot; id=&quot;path&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;type&quot;&gt;API Type String:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;type&quot; id=&quot;type&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;timezone&quot;&gt;PHP Timezone:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;timezone&quot; id=&quot;timezone&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
			&lt;label for=&quot;time&quot;&gt;Unix Timestamp:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;time&quot; id=&quot;time&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
			&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Register Peer with Service&quot; /&gt;
		&lt;/form&gt;
		</pre>
		<form action="<?php echo API_URL; ?>/v1/register/raw.api" method="post">
			<label for="license-key">Licensing Key:&nbsp;</label><input type="text" name="license-key" id="license-key" value="" size="26" />
			<label for="company">Company/Organisation:&nbsp;</label><input type="text" name="company" id="company" value="" size="26" />
			<label for="uname">Username:&nbsp;</label><input type="text" name="uname" id="uname" value="" size="26" />
			<label for="email">eMail:&nbsp;</label><input type="text" name="email" id="email" value="" size="26" />
			<label for="password">Password MD5 Hash:&nbsp;</label><input type="text" name="password" id="password" value="" size="26" />
			<label for="protocol">Peer Protocol:&nbsp;</label><input type="text" name="protocol" id="protocol" value="" size="26" />
			<label for="realm">Peer Realm/Domain:&nbsp;</label><input type="text" name="realm" id="realm" value="" size="26" />
			<label for="path">Peer URL Path:&nbsp;</label><input type="text" name="path" id="path" value="" size="26" />
			<label for="type">API Type String:&nbsp;</label><input type="text" name="type" id="type" value="" size="26" />
			<label for="timezone">PHP Timezone:&nbsp;</label><input type="text" name="timezone" id="timezone" size="26"/><br/>
			<label for="time">Unix Timestamp:&nbsp;</label><input type="text" name="time" id="time" size="26"/><br/>
			<input type="submit" id="submit" Value="Register Peer with Service" />
		</form>
		Example of Form:-
		<pre>
		&lt;form action=&quot;&lt;?php echo API_URL; ?&gt;/v1/register/raw.api&quot; method=&quot;post&quot;&gt;
			&lt;label for=&quot;license-key&quot;&gt;Licensing Key:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;license-key&quot; id=&quot;license-key&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;company&quot;&gt;Company/Organisation:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;company&quot; id=&quot;company&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;uname&quot;&gt;Username:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;uname&quot; id=&quot;uname&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;email&quot;&gt;eMail:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot; id=&quot;email&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;password&quot;&gt;Password MD5 Hash:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;password&quot; id=&quot;password&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;protocol&quot;&gt;Peer Protocol:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;protocol&quot; id=&quot;protocol&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;realm&quot;&gt;Peer Realm/Domain:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;realm&quot; id=&quot;realm&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;path&quot;&gt;Peer URL Path:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;path&quot; id=&quot;path&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;type&quot;&gt;API Type String:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;type&quot; id=&quot;type&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;timezone&quot;&gt;PHP Timezone:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;timezone&quot; id=&quot;timezone&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
			&lt;label for=&quot;time&quot;&gt;Unix Timestamp:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;time&quot; id=&quot;time&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
			&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Register Peer with Service&quot; /&gt;
		&lt;/form&gt;
		</pre>
		<form action="<?php echo API_URL; ?>/v1/register/serial.api" method="post">
			<label for="license-key">Licensing Key:&nbsp;</label><input type="text" name="license-key" id="license-key" value="" size="26" />
			<label for="company">Company/Organisation:&nbsp;</label><input type="text" name="company" id="company" value="" size="26" />
			<label for="uname">Username:&nbsp;</label><input type="text" name="uname" id="uname" value="" size="26" />
			<label for="email">eMail:&nbsp;</label><input type="text" name="email" id="email" value="" size="26" />
			<label for="password">Password MD5 Hash:&nbsp;</label><input type="text" name="password" id="password" value="" size="26" />
			<label for="protocol">Peer Protocol:&nbsp;</label><input type="text" name="protocol" id="protocol" value="" size="26" />
			<label for="realm">Peer Realm/Domain:&nbsp;</label><input type="text" name="realm" id="realm" value="" size="26" />
			<label for="path">Peer URL Path:&nbsp;</label><input type="text" name="path" id="path" value="" size="26" />
			<label for="type">API Type String:&nbsp;</label><input type="text" name="type" id="type" value="" size="26" />
			<label for="timezone">PHP Timezone:&nbsp;</label><input type="text" name="timezone" id="timezone" size="26"/><br/>
			<label for="time">Unix Timestamp:&nbsp;</label><input type="text" name="time" id="time" size="26"/><br/>
			<input type="submit" id="submit" Value="Register Peer with Service" />
		</form>
		Example of Form:-
		<pre>
		&lt;form action=&quot;&lt;?php echo API_URL; ?&gt;/v1/register/serial.api&quot; method=&quot;post&quot;&gt;
			&lt;label for=&quot;license-key&quot;&gt;Licensing Key:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;license-key&quot; id=&quot;license-key&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;company&quot;&gt;Company/Organisation:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;company&quot; id=&quot;company&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;uname&quot;&gt;Username:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;uname&quot; id=&quot;uname&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;email&quot;&gt;eMail:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot; id=&quot;email&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;password&quot;&gt;Password MD5 Hash:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;password&quot; id=&quot;password&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;protocol&quot;&gt;Peer Protocol:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;protocol&quot; id=&quot;protocol&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;realm&quot;&gt;Peer Realm/Domain:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;realm&quot; id=&quot;realm&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;path&quot;&gt;Peer URL Path:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;path&quot; id=&quot;path&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;type&quot;&gt;API Type String:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;type&quot; id=&quot;type&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;timezone&quot;&gt;PHP Timezone:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;timezone&quot; id=&quot;timezone&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
			&lt;label for=&quot;time&quot;&gt;Unix Timestamp:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;time&quot; id=&quot;time&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
			&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Register Peer with Service&quot; /&gt;
		&lt;/form&gt;
		</pre>
		<form action="<?php echo API_URL; ?>/v1/register/xml.api" method="post">
			<label for="license-key">Licensing Key:&nbsp;</label><input type="text" name="license-key" id="license-key" value="" size="26" />
			<label for="company">Company/Organisation:&nbsp;</label><input type="text" name="company" id="company" value="" size="26" />
			<label for="uname">Username:&nbsp;</label><input type="text" name="uname" id="uname" value="" size="26" />
			<label for="email">eMail:&nbsp;</label><input type="text" name="email" id="email" value="" size="26" />
			<label for="password">Password MD5 Hash:&nbsp;</label><input type="text" name="password" id="password" value="" size="26" />
			<label for="protocol">Peer Protocol:&nbsp;</label><input type="text" name="protocol" id="protocol" value="" size="26" />
			<label for="realm">Peer Realm/Domain:&nbsp;</label><input type="text" name="realm" id="realm" value="" size="26" />
			<label for="path">Peer URL Path:&nbsp;</label><input type="text" name="path" id="path" value="" size="26" />
			<label for="type">API Type String:&nbsp;</label><input type="text" name="type" id="type" value="" size="26" />
			<label for="timezone">PHP Timezone:&nbsp;</label><input type="text" name="timezone" id="timezone" size="26"/><br/>
			<label for="time">Unix Timestamp:&nbsp;</label><input type="text" name="time" id="time" size="26"/><br/>
			<input type="submit" id="submit" Value="Register Peer with Service" />
		</form>
		Example of Form:-
		<pre>
		&lt;form action=&quot;&lt;?php echo API_URL; ?&gt;/v1/register/xml.api&quot; method=&quot;post&quot;&gt;
			&lt;label for=&quot;license-key&quot;&gt;Licensing Key:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;license-key&quot; id=&quot;license-key&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;company&quot;&gt;Company/Organisation:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;company&quot; id=&quot;company&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;uname&quot;&gt;Username:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;uname&quot; id=&quot;uname&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;email&quot;&gt;eMail:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot; id=&quot;email&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;password&quot;&gt;Password MD5 Hash:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;password&quot; id=&quot;password&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;protocol&quot;&gt;Peer Protocol:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;protocol&quot; id=&quot;protocol&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;realm&quot;&gt;Peer Realm/Domain:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;realm&quot; id=&quot;realm&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;path&quot;&gt;Peer URL Path:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;path&quot; id=&quot;path&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;type&quot;&gt;API Type String:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;type&quot; id=&quot;type&quot; value=&quot;&quot; size=&quot;26&quot; /&gt;
			&lt;label for=&quot;timezone&quot;&gt;PHP Timezone:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;timezone&quot; id=&quot;timezone&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
			&lt;label for=&quot;time&quot;&gt;Unix Timestamp:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;time&quot; id=&quot;time&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
			&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Register Peer with Service&quot; /&gt;
		&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>LODGE Document Output</h2>
    <p>This is done with the <em>lodge.api</em> extension at the end of the url.</p>
    <blockquote>
		<form action="<?php echo API_URL; ?>/v3/lodge.api" method="post">
			<label for="response-json">Response formated JSON&nbsp;</label><input type="radio" name="response" id="response-json" value="json" checked="checked"/>
			<label for="response-serial">Response formated PHP Serialisation&nbsp;</label><input type="radio" name="response" id="response-serial" value="serial"/>
			<label for="response-xml">Response formated XML&nbsp;</label><input type="radio" name="response" id="response-xml" value="xml"/><br/>
			<label for="response-raw">Response formated RAW&nbsp;</label><input type="radio" name="response" id="response-raw" value="raw"/><br/>
			<label for="email">Email Address:&nbsp;</label><input type="text" name="email" id="email" maxlen="198" size="26"/><br/>
			<label for="name">Email Naming:&nbsp;</label><input type="text" name="name" id="name" maxlen="198" size="26"/><br/>
			<label for="variable">Salt Variable Name:&nbsp;</label><input type="text" name="variable" id="variable" maxlen="128" size="26"/><br/>
			<label for="pin">4 - 12 Digit Only Pin:&nbsp;</label><input type="text" name="pin" id="pin" maxlen="12" size="13"/><br/>
			<label for="uri">Site Root Path:&nbsp;</label><input type="text" name="uri" id="uri" maxlen="12" size="13" value="<?php echo API_URL . '/'; ?>"/><br/>
			<label for="salt">Encryption Salt:&nbsp;</label><textarea name="salt" id="salt" rows="9" cols="55"><?php echo $data; ?></textarea><br/>
			<input type="submit" id="submit" Value="Create New Salt Lodgement" />
		</form>
		Example of Form:-
		<pre style="overflow: scroll; max-width: 95%">
	&lt;form action=&quot;<?php echo API_URL; ?>/v3/lodge.api&quot; method=&quot;post&quot;&gt;
		&lt;label for=&quot;response-json&quot;&gt;Response formated JSON&nbsp;&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-json&quot; value=&quot;json&quot; checked=&quot;checked&quot;/&gt;
		&lt;label for=&quot;response-serial&quot;&gt;Response formated PHP Serialisation&nbsp;&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-serial&quot; value=&quot;serial&quot;/&gt;
		&lt;label for=&quot;response-xml&quot;&gt;Response formated XML&nbsp;&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-xml&quot; value=&quot;xml&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;response-raw&quot;&gt;Response formated RAW&nbsp;&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-raw&quot; value=&quot;raw&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;email&quot;&gt;Email Address:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot; id=&quot;email&quot; maxlen=&quot;198&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;name&quot;&gt;Email Naming:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; maxlen=&quot;198&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;pin&quot;&gt;4 - 12 Digit Only Pin:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;pin&quot; id=&quot;pin&quot; maxlen=&quot;12&quot; size=&quot;13&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;variable&quot;&gt;Salt Variable Name:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;variable&quot; id=&quot;variable&quot; maxlen=&quot;128&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;uri&quot;&gt;Site Root Path:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;uri&quot; id=&quot;uri&quot; maxlen=&quot;12&quot; size=&quot;13&quot; value=&quot;<?php echo API_URL . '/'; ?>&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;salt&quot;&gt;Encryption Salt:&nbsp;&lt;/label&gt;&lt;textarea name=&quot;salt&quot; id=&quot;salt&quot; rows=&quot;9&quot; cols=&quot;26&quot;&gt;<?php echo $data; ?>&lt;/textarea&gt;&lt;br/&gt;
		&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Create New Salt Lodgement&quot; /&gt;
	&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>RETRIEVE Document Output</h2>
    <p>This is done with the <em>retrieve.api</em> extension at the end of the url.</p>
    <blockquote>
		<form action="<?php echo API_URL; ?>/v3/retrieve.api" method="post">
			<label for="response-json">Response formated JSON&nbsp;</label><input type="radio" name="response" id="response-json" value="json" checked="checked"/>
			<label for="response-serial">Response formated PHP Serialisation&nbsp;</label><input type="radio" name="response" id="response-serial" value="serial"/>
			<label for="response-xml">Response formated XML&nbsp;</label><input type="radio" name="response" id="response-xml" value="xml"/><br/>
			<label for="response-raw">Response formated RAW&nbsp;</label><input type="radio" name="response" id="response-raw" value="raw"/><br/>
			<label for="email">Email Address:&nbsp;</label><input type="text" name="email" id="email" maxlen="198" size="26"/><br/>
			<label for="variable">Salt Variable Name:&nbsp;</label><input type="text" name="variable" id="variable" maxlen="128" size="26"/><br/>
			<label for="pin">4 - 12 Digit Only Pin:&nbsp;</label><input type="text" name="pin" id="pin" maxlen="12" size="13"/><br/>
			<label for="uri">Site Root Path:&nbsp;</label><input type="text" name="uri" id="uri" maxlen="12" size="13" value="<?php echo API_URL . '/'; ?>"/><br/>
			<input type="submit" id="submit" Value="Retrieve Salt Lodgement" />
		</form>
		Example of Form:-
		<pre>
	&lt;form action=&quot;<?php echo API_URL; ?>/v3/retrieve.api&quot; method=&quot;post&quot;&gt;
		&lt;label for=&quot;response-json&quot;&gt;Response formated JSON&nbsp;&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-json&quot; value=&quot;json&quot; checked=&quot;checked&quot;/&gt;
		&lt;label for=&quot;response-serial&quot;&gt;Response formated PHP Serialisation&nbsp;&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-serial&quot; value=&quot;serial&quot;/&gt;
		&lt;label for=&quot;response-xml&quot;&gt;Response formated XML&nbsp;&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-xml&quot; value=&quot;xml&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;response-raw&quot;&gt;Response formated RAW&nbsp;&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-raw&quot; value=&quot;raw&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;email&quot;&gt;Email Address:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot; id=&quot;email&quot; maxlen=&quot;198&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;variable&quot;&gt;Salt Variable Name:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;variable&quot; id=&quot;variable&quot; maxlen=&quot;128&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;pin&quot;&gt;4 - 12 Digit Only Pin:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;pin&quot; id=&quot;pin&quot; maxlen=&quot;12&quot; size=&quot;13&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;uri&quot;&gt;Site Root Path:&nbsp;&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;uri&quot; id=&quot;uri&quot; maxlen=&quot;12&quot; size=&quot;13&quot; value=&quot;<?php echo API_URL . '/'; ?>&quot;/&gt;&lt;br/&gt;
		&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Retrieve Salt Lodgement&quot; /&gt;
	&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>The Author</h2>
    <p>This was developed by Simon Roberts in 2017 and is part of the Chronolabs System and api's.<br/><br/>This is open source which you can download from <a href="https://sourceforge.net/projects/chronolabsapis/">https://sourceforge.net/projects/chronolabsapis/</a> contact the scribe  <a href="mailto:wishcraft@users.sourceforge.net">wishcraft@users.sourceforge.net</a></p></body>
    <p>You can also pull this API from GitHub at the following URL: <a href="https://github.com/Chronolabs-Cooperative/Salty-API-PHP/">https://github.com/Chronolabs-Cooperative/Salty-API-PHP/</a></p></body>
</div>
</html>
<?php 

