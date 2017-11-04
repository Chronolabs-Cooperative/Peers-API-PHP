<?php
/**
 * Chronolabs REST Geospatial API Services API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://snails.email
 * @license         GNU GPL 3 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         api
 * @since           2.0.1
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @subpackage		places
 * @description		Geospatial API Services API
 * @see			    http://internetfounder.wordpress.com
 * @see			    http://sourceoforge.net/projects/chronolabsapis
 * @see			    https://github.com/Chronolabs-Cooperative/API-API-PHP
 */

$parts = explode(".", microtime(true));
mt_srand(mt_rand(-time(), time())/$parts[1]);
mt_srand(mt_rand(-time(), time())/$parts[1]);
mt_srand(mt_rand(-time(), time())/$parts[1]);
mt_srand(mt_rand(-time(), time())/$parts[1]);
$salter = ((float)(mt_rand(0,1)==1?'':'-').$parts[1].'.'.$parts[0]) / sqrt((float)$parts[1].'.'.intval(cosh($parts[0])))*tanh($parts[1]) * mt_rand(1, intval($parts[0] / $parts[1]));
header('Blowfish-salt: '. $salter);

global $source;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'apiconfig.php';
$GLOBALS['APILogger']->activated = false;

/**
 * URI Path Finding of API URL Source Locality
 * @var unknown_type
 */
$odds = $inner = array();
foreach($_GET as $key => $values) {
    if (!isset($inner[$key])) {
        $inner[$key] = $values;
    } elseif (!in_array(!is_array($values) ? $values : md5(json_encode($values, true)), array_keys($odds[$key]))) {
        if (is_array($values)) {
    	$odds[$key][md5(json_encode($inner[$key] = $values, true))] = $values;
        } else {
    	$odds[$key][$inner[$key] = $values] = "$values--$key";
        }
    }
}

foreach($_POST as $key => $values) {
    if (!isset($inner[$key])) {
	$inner[$key] = $values;
    } elseif (!in_array(!is_array($values) ? $values : md5(json_encode($values, true)), array_keys($odds[$key]))) {
    	if (is_array($values)) {
    	    $odds[$key][md5(json_encode($inner[$key] = $values, true))] = $values;
    	} else {
    	    $odds[$key][$inner[$key] = $values] = "$values--$key";
    	}
    }
}

foreach(parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'], '?')?'&':'?').$_SERVER['QUERY_STRING'], PHP_URL_QUERY) as $key => $values) {
    if (!isset($inner[$key])) {
	$inner[$key] = $values;
    } elseif (!in_array(!is_array($values) ? $values : md5(json_encode($values, true)), array_keys($odds[$key]))) {
    	if (is_array($values)) {
    	    $odds[$key][md5(json_encode($inner[$key] = $values, true))] = $values;
    	} else {
    	    $odds[$key][$inner[$key] = $values] = "$values--$key";
    	}
    }
}

error_reporting(0);
$help=false;
if ((!isset($inner['mode']) || empty($inner['mode']))) {
	$help=true;
} elseif (isset($inner['output']) || !empty($inner['output'])) {
    if (isset($inner['mode']) && in_array($inner['mode'], array('register', 'upload', 'update', 'avatar', 'authenticate'))) {
        $mode = $inner['mode'];
        $output = trim($inner['output']);
        $callback = (!isset($inner['callback'])?'':$inner['callback']);
        $itemkey = (!isset($inner['key'])?'':$inner['key']);
    }
} else {
	$help=true;
}

switch ($mode)
{
    case 'register':
        if ($_SERVER['API-TYPE'] != $inner['type'] || $_SERVER['API-TIMEZONE'] != $inner['timezone'] || floor($_SERVER['API-UNIXTIME']) != floor($inner['time']))
            $help = true;
        else 
        {
            $version = $_SERVER['API-VERSION'];
        }
}
error_reporting(0);
if ($help==true||!isset($mode)) {
	http_response_code(400);
	include dirname(__FILE__).'/help.php';
	if ($sessions = @APICache::read('sessions-'.md5($_SERVER['HTTP_HOST'])))
	{
	    foreach($sessions as $key => $seconds)
		if ($seconds<time())
		{
		    @APICache::delete($key);
		    unset ($sessions[$key]);
		}
	    @APICache::write('sessions-'.md5($_SERVER['HTTP_HOST']), $sessions, API_CACHE_SECONDS * API_CACHE_SECONDS * API_CACHE_SECONDS);
	}
	exit;
}

error_reporting(0);
http_response_code(200);

if (!$data = APICache::read($keyname))
{
    $retries = 0;
    $data = array();
    
    switch ($mode)
    {
        case 'register':
            $data = registerUserResource($inner['type'], $version, $inner['license-key'], $inner['company'], $inner['uname'], $inner['email'], $inner['password'], $inner['protocol'], $inner['realm'], $inner['path'], $inner['timezone']);
            break;
    }
}

error_reporting(0);
if (!empty($data))
{
    @APICache::write($keyname, $data, API_CACHE_SECONDS);
    if (!$sessions = APICache::read('sessions-'.md5($_SERVER['HTTP_HOST'])))
        $sessions = array();
    $sessions[$keyname] = time() + API_CACHE_SECONDS;
    @APICache::write('sessions-'.md5($_SERVER['HTTP_HOST']), $sessions, API_CACHE_SECONDS * API_CACHE_SECONDS * API_CACHE_SECONDS);
}

if (function_exists('mb_http_output')) {
    mb_http_output('pass');
}

error_reporting(0);
switch ($output) {
	default:
		echo '<pre style="font-family: \'Courier New\', Courier, Terminal; font-size: 0.77em;">';
		echo print_r($data, true);
		echo '</pre>';
		break;
	case 'raw':
	    header('Content-type: application/x-httpd-php');
	    echo ('<?php'."\n\n".'return ' . var_export($data, true) . ";\n\n?>");
		break;
	case 'json':
		header('Content-type: application/json');
		echo (json_encode($data));
		break;
	case 'serial':
		header('Content-type: text/html');
		echo (serialize($data));
		break;
	case 'xml':
		header('Content-type: application/xml');
		$dom = new XmlDomConstruct('1.0', 'utf-8');
		$dom->fromMixed(array($mode=>$data));
		echo ($dom->saveXML());
		break;
}


error_reporting(0);
if ($sessions = @APICache::read('sessions-'.md5($_SERVER['HTTP_HOST'])))
{
    foreach($sessions as $key => $seconds)
        if ($seconds<time())
        {
            @APICache::delete($key);
            unset ($sessions[$key]);
        }
    @APICache::write('sessions-'.md5($_SERVER['HTTP_HOST']), $sessions, API_CACHE_SECONDS * API_CACHE_SECONDS * API_CACHE_SECONDS);
}
