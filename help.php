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
    	<p>This is the API Call for registering a peer + user with the peer securities databases!</p>
		<pre style="overflow: scroll; max-width: 95%; height: 560px;">
if (!function_exists("getURIData")) {
    
    /* function getURIData()
     *
     * 	Get a supporting domain system for the API
     * @author 		Simon Roberts (Chronolabs) simon@snails.email
     *
     * @return 		float()
     */
    function getURIData($uri = '', $timeout = 25, $connectout = 25, $post = array(), $headers = array())
    {
        if (!function_exists("curl_init"))
        {
            die("Require module: php-curl -- run on ubuntu: $ sudo apt-get install php-curl");
        }
        if (!$btt = curl_init($uri)) {
            return false;
        }
        if (count($headers)>0)
        {
            curl_setopt($btt, CURLOPT_HEADER, true);
            curl_setopt($btt, CURLOPT_HTTPHEADER, implode("\n", $headers));
        } else
            curl_setopt($btt, CURLOPT_HEADER, 0);
        if (count($post)>0)
        {
            curl_setopt($btt, CURLOPT_POST, true);
            curl_setopt($btt, CURLOPT_POSTFIELDS, http_build_query($post_data));
        } else
            curl_setopt($btt, CURLOPT_POST, 0);
        curl_setopt($btt, CURLOPT_CONNECTTIMEOUT, $connectout);
        curl_setopt($btt, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($btt, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($btt, CURLOPT_VERBOSE, false);
        curl_setopt($btt, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($btt, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($btt);
        $state = curl_getinfo($btt, CURLINFO_HTTP_CODE);
        $header = curl_getinfo($btt, CURLINFO_HEADER_OUT);
        $info = curl_getinfo($btt);
        curl_close($btt);
        return array('value' => $data, 'state' => $state, 'header' => $header, 'info' => $info);
    }
}
		

/**
 * This is the calling of this form function done correctly with security headers set!!
 *
 */		
$results = getURIData('<?php echo API_URL; ?>/v3/register/json.api', 10, 10, array(		'license-key'   =>  $system_key,
                                                                                        'company'       =>  $vars['ADMIN_COMPANY'],
                                                                                        'uname'         =>  $vars['ADMIN_UNAME'],
                                                                                        'email'         =>  $vars['ADMIN_EMAIL'],
                                                                                        'password'      =>  md5($vars['ADMIN_PASSWORD']),
                                                                                        'protocol'      =>  parse_url($vars['URL'], PHP_URL_SCHEME),
                                                                                        'realm'         =>  parse_url($vars['URL'], PHP_URL_HOST),
                                                                                        'path'          =>  parse_url($vars['URL'], PHP_URL_PATH),
                                                                                        'type'          =>  API_TYPE,
                                                                                        'timezone'      =>  date_default_timezone_get(),
                                                                                        'time'          =>  microtime(true),
                                                                                  ),
                                                                                  array('API-VERSION'   =>  'API-VERSION: ' . API_VERSION,
                                                                                        'API-TYPE'      =>  'API-TYPE: ' . API_TYPE,
                                                                                        'API-TIMEZONE'  =>  'API-TIMEZONE: ' . date_default_timezone_get(),
                                                                                        'API-UNIXTIME'  =>  'API-UNIXTIME: ' . microtime(true),
                                                                                  ));	
		</pre>
    </blockquote>
    <h2>UPLOAD Document Output</h2>
    <p>This is done with the <em>upload.api</em> extension at the end of the url.</p>
    <blockquote>
		<?php echo getHTMLForm('upload', API_URL . '/v3/return/upload/%referee.api?peer=%peer', API_URL . '/v3/callback/upload/%referee.api?peer=%peer'); ?>
		Example of Form:-
		<pre style="overflow: scroll; max-width: 95%; height: 560px;">
			<?php echo htmlspecialchars(getHTMLForm('upload', API_URL . '/v3/return/upload/%referee.api?peer=%peer', API_URL . '/v3/callback/upload/%referee.api?peer=%peer')); ?>
		</pre>
		<br></br>
		<pre>
		
/**
 * This is the calling of this form function done correctly with image file bein uploaded $_FILES 
 * code layer with the @ specified at the start of the path with cURL (also in the shell bash the same)!!
 */		
$results = getURIData('<?php echo API_URL; ?>/v3/upload/image.api', 20, 20, array(	'image'   =>  "@/tmp/peers/uploaded.png",
																					'return'  =>  "<?php echo API_URL . '/v3/return/upload/%referee.api?peer=%peer'; ?>"
																					'callback'=>  "<?php echo API_URL . '/v3/callback/upload/%referee.api?peer=%peer'; ?>"));	
		</pre>
		
    </blockquote>
    <h2>FORMS Document Output</h2>
    <p>This is done with the <em>forms.api</em> extension at the end of the url.</p>
    <blockquote>
		<pre>

/**
 * This will get a HTML form for uploadin avatars/images function done correctly with uploaded $_FILES 
 * code layer with the @ specified at the start of the path with cURL (also in the shell bash the same)!!
 */		
$results = getURIData('<?php echo API_URL; ?>/v3/forms/upload/json.api', 20, 20, array(	'return' 	=> 	"<?php echo API_URL . '/v3/return/upload/%referee.api?peer=%peer'; ?>",
																						'callback' 	=> 	"<?php echo API_URL . '/v3/callback/upload/%referee.api?peer=%peer'; ?>" ));

// Below is the HTML outputed in ~ $json = json_decode($results['value'], false);
		</pre>
		<br/>
		Example of Form:-
		<pre style="overflow: scroll; max-width: 95%; height: 560px;">
			<?php echo htmlspecialchars(getHTMLForm('upload', API_URL . '/v3/return/upload/%referee.api?peer=%peer', API_URL . '/v3/callback/upload/%referee.api?peer=%peer')); ?>
		</pre>
		<br/><br/>
		<pre>		

/**
 * This is the calling of this form function done correctly with image that has been uploaded
 * referee specified to update a current active uploaded image/avatar
 */		
$results = getURIData('<?php echo API_URL; ?>/v3/forms/update/json.api', 20, 20, array('referee' => 'skfjdhsjkdhwfhwuehfjkhjksdhfkj'));

// Below is the HTML outputed in ~ $json = json_decode($results['value'], false);
		</pre>
		<br/>
		Example of output of HTML:<br/>
		<pre>
		</pre>

		<br/><br/>
		<pre>		

/**
 * This is the calling of this form function done correctly with type specified for choosing from 
 * existing avatars not uploading one but using existing system peer avatars!
 */		
$results = getURIData('<?php echo API_URL; ?>/v3/forms/choose/json.api', 20, 20, array('uid' => '1'));

// Below is the HTML outputed in ~ $json = json_decode($results['value'], false);
		</pre>
		<br/>
		Example of output of HTML:<br/>
		<pre>
		</pre>

    </blockquote>
    <h2>The Author</h2>
    <p>This was developed by Simon Roberts in 2017 and is part of the Chronolabs System and api's.<br/><br/>This is open source which you can download from <a href="https://sourceforge.net/projects/chronolabsapis/">https://sourceforge.net/projects/chronolabsapis/</a> contact the scribe  <a href="mailto:wishcraft@users.sourceforge.net">wishcraft@users.sourceforge.net</a></p></body>
    <p>You can also pull this API from GitHub at the following URL: <a href="https://github.com/Chronolabs-Cooperative/Salty-API-PHP/">https://github.com/Chronolabs-Cooperative/Salty-API-PHP/</a></p></body>
</div>
</html>
<?php 

