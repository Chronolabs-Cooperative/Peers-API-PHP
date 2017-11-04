<?php
/**
 * Chronolabs REST Whois API
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
 * @package         whois
 * @since           1.0.2
 * @author          Simon Roberts <meshy@labs.coop>
 * @version         $Id: functions.php 1000 2013-06-07 01:20:22Z mynamesnot $
 * @subpackage		api
 * @description		Whois API Service REST
 */

if (!function_exists('getRandomGammaSalt'))
{
    function getRandomGammaSalt()
    {
        $results = array('salt_alpha', 'salt_charley', 'salt_delta', 'salt_alpha + salt_alpha', 'salt_charley + salt_alpha', 'salt_delta + salt_alpha', 'salt_alpha + salt_charley', 'salt_charley + salt_charley', 'salt_delta + salt_charley', 'salt_alpha + salt_delta', 'salt_charley + salt_delta', 'salt_delta + salt_delta', 'none');
        shuffle($results);
        while(mt_rand(0,50)>9)
            shuffle($results);
        return $results[mt_rand(0,count($results)-1)];
    }
}

if (!function_exists('registerUserResource'))
{
    /**
     * Include Hashing Class
     */
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'class' . DIRECTORY_SEPARATOR . 'xcp' . DIRECTORY_SEPARATOR . 'xcp.class.php';
    
    function registerUserResource($type, $version, $licensekey, $company, $uname, $email, $password, $protocol, $realm, $path, $timezone)
    {
        $user = array();
        while (count($user) == 0)
        {
            $sql = "SELECT * FROM `" . $GLOBALS['APIDB']->prefix('users') . "` WHERE `uname` LIKE '$uname' AND 'pass' LIKE '$password'";
            if ($GLOBALS['APIDB']->getRowsNum($result = $GLOBALS['APIDB']->queryF($sql))==0)
            {
                $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('users') . "` (`name`, `uname`, `email`, `hash`, `actkey`, `pass`, `api_regdate`, `timezone`, `api_mailok`, `salt_alpha`, `salt_charley`, `salt_delta`, `salt_gamma`) VALUES(%s, %s, %s, %s, %s, %s, UNIX_TIMESTAMP(), %s, 1, %s, %s, %s, %s)";
                $alpha = '';
                for($t=mt_rand(0, 10); $t<mt_rand(22,45); $t++)
                    while(mt_rand(0,55)<= 39)
                        $alpha .= chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("Z"))) . chr(mt_rand(ord("A"),ord("Z"))) . chr(mt_rand(ord("a"),ord("z"))) . chr(mt_rand(ord("!"),ord("="))) . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z"))) ;
                $charley = '';
                for($t=mt_rand(0, 10); $t<mt_rand(22,45); $t++)
                    while(mt_rand(0,85)<= 69)
                        $charley .= chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("Z"))) . chr(mt_rand(ord("A"),ord("Z"))) . chr(mt_rand(ord("a"),ord("z"))) . chr(mt_rand(ord("!"),ord("="))) . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z"))) ;
                $delta = '';
                for($t=mt_rand(0, 10); $t<mt_rand(22,45); $t++)
                    while(mt_rand(0,75)<= 55)
                        $delta .= chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("Z"))) . chr(mt_rand(ord("A"),ord("Z"))) . chr(mt_rand(ord("a"),ord("z"))) . chr(mt_rand(ord("!"),ord("="))) . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z"))) ;
                $gamma = getRandomGammaSalt();   
                $xcp = new xcp(NULL, mt_rand(0, 255), mt_rand(5,11));
                $hash = $xcp->calc(str_replace('salt_alpha', $alpha, str_replace('salt_charley', $charley, str_replace('salt_delta', $delta, str_replace(' + ', '', $gamma)))));
                $xcp = new xcp(NULL, mt_rand(0, 255), mt_rand(5,7));
                $actkey = $xcp->calc($charley);
                if (!$GLOBALS['APIDB']->queryF($sql = sprintf($sql, $GLOBALS['APIDB']->quote($company), $GLOBALS['APIDB']->quote($uname), $GLOBALS['APIDB']->quote($email), $GLOBALS['APIDB']->quote($hash), $GLOBALS['APIDB']->quote($actkey), $GLOBALS['APIDB']->quote($password), $GLOBALS['APIDB']->quote($timezone), $GLOBALS['APIDB']->quote($alpha), $GLOBALS['APIDB']->quote($charley), $GLOBALS['APIDB']->quote($delta), $GLOBALS['APIDB']->quote($gamma))))
                    die("SQL Failed: $sql;");
                $GLOBALS['APIDB']->queryF("COMMIT");
            } else 
                $user = $GLOBALS['APIDB']->fetchArray($result);
        }
        $sql = "INSERT INTO `" . $GLOBALS['APIDB']->prefix('users') . "` (`uid`, `company`, `license`, `email`, `protocol`, `host`, `path`, `version`, `type`) VALUES(%s, %s, %s, %s, %s, %s, %s, %s, %s)";
        if (!$GLOBALS['APIDB']->queryF($sql = sprintf($sql, $GLOBALS['APIDB']->quote($user['uid']), $GLOBALS['APIDB']->quote($company), $GLOBALS['APIDB']->quote($licensekey), $GLOBALS['APIDB']->quote($email), $GLOBALS['APIDB']->quote($protocol), $GLOBALS['APIDB']->quote($realm), $GLOBALS['APIDB']->quote($path), $GLOBALS['APIDB']->quote($version), $GLOBALS['APIDB']->quote($type))))
            die("SQL Failed: $sql;");
        $pid = $GLOBALS['APIDB']->getInsertId();
        $GLOBALS['APIDB']->queryF("COMMIT");
        return array('pid' => $pid, 'uid' => $user['uid'], 'uname' => $user['uname'], 'referee' => $user['hash'], 'authkey' => md5($user['api_regdate'] . $user['uname'] . $user['email'] . str_replace('salt_alpha', $user['salt_alpha'], str_replace('salt_charley', $user['salt_charley'], str_replace('salt_delta', $user['salt_delta,'], str_replace(' + ', '', $user['salt_gamma']))))));
    }
}


if (!function_exists("getHTMLForm")) {
    /**
     * Get the HTML Forms for the API
     *
     * @param unknown_type $mode
     * @param unknown_type $clause
     * @param unknown_type $output
     * @param unknown_type $version
     *
     * @return string
     */
    function getHTMLForm($mode = '', $return = '', $callback = '')
    {
        $head = array();
        $form = array();
        $foot = array();
        switch ($mode)
        {
            case "upload":
                $form[] = "<form name=\"avatar\" method=\"POST\" enctype=\"multipart/form-data\" action=\"" . API_URL . "/v3/upload/image.api\">";
                $form[] = "\t<table class='avatar-uploader' id='avatar-uploader' style='vertical-align: top !important; min-width: 98%;'>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3'>";
                $form[] = "\t\t\t\t<label for='image'>Any Image File Possible:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t\t<input type='file' name='image' id='image'><br/>";
                $form[] = "\t\t\t\t<div style='margin-left:42px; font-size: 71.99%; margin-top: 7px; padding: 11px;'>";
                $form[] = "\t\t\t\t\t ~~ <strong>Maximum Upload Size Is: <em style='color:rgb(255,100,123); font-weight: bold; font-size: 132.6502%;'>" . ini_get('upload_max_filesize') . "!!!</em></strong><br/>";
                $form[] = "\t\t\t\t</div>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3'>";
                $form[] = "\t\t\t\t<label for='ip'>Your IP Address:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t\t<input type='text' size='20' name='ip' id='ip' value='".$_SERVER['REMOTE_ADDR']."'><br/>";
                $form[] = "\t\t\t\t</div>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3'>";
                $form[] = "\t\t\t\t<label for='referee'>Asset Referee Key:&nbsp;<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold'>*</font></label>";
                $form[] = "\t\t\t\t<input type='text' size='20' maxlen='128' name='referee' id='referee' value='".md5(time().API_URL)."'><br/>";
                $form[] = "\t\t\t\t</div>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3'>";
                $form[] = "\t\t\t\t<label for='email'>Image Uploaders Email:&nbsp;</label>";
                $form[] = "\t\t\t\t<input type='text' size='20' name='email' id='email' value=''><br/>";
                $form[] = "\t\t\t\t</div>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3' style='padding-left:64px;'>";
                $form[] = "\t\t\t\t<input type='hidden' name='return' value='$return'>";
                $form[] = "\t\t\t\t<input type='hidden' name='callback' value='$callback'>";
                $form[] = "\t\t\t\t<input type='submit' value='Upload + Convert Image' name='submit' style='padding:11px; font-size:122%;'>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t\t\t<td colspan='3' style='padding-top: 8px; padding-bottom: 14px; padding-right:35px; text-align: right;'>";
                $form[] = "\t\t\t\t<font style='color: rgb(250,0,0); font-size: 139%; font-weight: bold;'>* </font><font  style='color: rgb(10,10,10); font-size: 99%; font-weight: bold'><em style='font-size: 76%'>~ Required Field for Form Submission</em></font>";
                $form[] = "\t\t\t</td>";
                $form[] = "\t\t</tr>";
                $form[] = "\t\t<tr>";
                $form[] = "\t</table>";
                $form[] = "</form>";
                break;
        }
        return (empty($head) && empty($foot) ? implode("\n", $form) : array('head' => implode("\n", $head), 'html' => implode("\n", $form), 'foot' => implode("\n", $foot)));
    }
}

if (!function_exists("sendURIData")) {
    
    /* function getURIData()
     *
     * 	Get a supporting domain system for the API
     * @author 		Simon Roberts (Chronolabs) simon@snails.email
     *
     * @return 		float()
     */
    function sendURIData($uri = '', $timeout = 25, $connectout = 25, $post = array(), $headers = array())
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
        $info = curl_info($btt);
        curl_close($btt);
        return array('value' => $data, 'info' => $info);
    }
}


if (!function_exists("getCompleteFilesListAsArray")) {
	function getCompleteFilesListAsArray($dirname, $result = array())
	{
		foreach(getCompleteDirListAsArray($dirname) as $path)
			foreach(getFileListAsArray($path) as $file)
				$result[$path.DIRECTORY_SEPARATOR.$file] = $path.DIRECTORY_SEPARATOR.$file;
				return $result;
	}

}


if (!function_exists("getCompleteDirListAsArray")) {
	function getCompleteDirListAsArray($dirname, $result = array())
	{
		$result[$dirname] = $dirname;
		foreach(getDirListAsArray($dirname) as $path)
		{
			$result[$dirname . DIRECTORY_SEPARATOR . $path] = $dirname . DIRECTORY_SEPARATOR . $path;
			$result = getCompleteDirListAsArray($dirname . DIRECTORY_SEPARATOR . $path, $result);
		}
		return $result;
	}

}

if (!function_exists("getCompleteHistoryListAsArray")) {
	function getCompleteHistoryListAsArray($dirname, $result = array())
	{
		foreach(getCompleteDirListAsArray($dirname) as $path)
		{
			foreach(getHistoryListAsArray($path) as $file=>$values)
				$result[$path][sha1_file($path . DIRECTORY_SEPARATOR . $values['file'])] = array_merge(array('fullpath'=>$path . DIRECTORY_SEPARATOR . $values['file']), $values);
		}
		return $result;
	}
}

if (!function_exists("getDirListAsArray")) {
	function getDirListAsArray($dirname)
	{
		$ignored = array(
				'cvs' ,
				'_darcs');
		$list = array();
		if (substr($dirname, - 1) != '/') {
			$dirname .= '/';
		}
		if ($handle = opendir($dirname)) {
			while ($file = readdir($handle)) {
				if (substr($file, 0, 1) == '.' || in_array(strtolower($file), $ignored))
					continue;
					if (is_dir($dirname . $file)) {
						$list[$file] = $file;
					}
			}
			closedir($handle);
			asort($list);
			reset($list);
		}

		return $list;
	}
}

if (!function_exists("getFileListAsArray")) {
	function getFileListAsArray($dirname, $prefix = '')
	{
		$filelist = array();
		if (substr($dirname, - 1) == '/') {
			$dirname = substr($dirname, 0, - 1);
		}
		if (is_dir($dirname) && $handle = opendir($dirname)) {
			while (false !== ($file = readdir($handle))) {
				if (! preg_match('/^[\.]{1,2}$/', $file) && is_file($dirname . '/' . $file)) {
					$file = $prefix . $file;
					$filelist[$file] = $file;
				}
			}
			closedir($handle);
			asort($filelist);
			reset($filelist);
		}

		return $filelist;
	}
}

if (!function_exists("getHistoryListAsArray")) {
	function getHistoryListAsArray($dirname, $prefix = '')
	{
		$formats = cleanWhitespaces(file(__DIR__ . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'history-formats.diz'));
		$filelist = array();

		if ($handle = opendir($dirname)) {
			while (false !== ($file = readdir($handle))) {
				foreach($formats as $format)
					if (substr(strtolower($file), strlen($file)-strlen(".".$format)) == strtolower(".".$format)) {
						$file = $prefix . $file;
						$filelist[$file] = array('file'=>$file, 'type'=>$format, 'sha1' => sha1_file($dirname . DIRECTORY_SEPARATOR . $file));
					}
			}
			closedir($handle);
		}
		return $filelist;
	}
}


if (!function_exists("cleanWhitespaces")) {
	/**
	 *
	 * @param array $array
	 */
	function cleanWhitespaces($array = array())
	{
		foreach($array as $key => $value)
		{
			if (is_array($value))
				$array[$key] = cleanWhitespaces($value);
				else {
					$array[$key] = trim(str_replace(array("\n", "\r", "\t"), "", $value));
				}
		}
		return $array;
	}
}


if (!function_exists("whitelistGetIP")) {

	/* function whitelistGetIPAddy()
	 * 
	 * 	provides an associative array of whitelisted IP Addresses
	 * @author 		Simon Roberts (Chronolabs) simon@labs.coop
	 * 
	 * @return 		array
	 */
	function whitelistGetIPAddy() {
		return array_merge(whitelistGetNetBIOSIP(), file(dirname(dirname(dirname(dirname(__FILE__)))) . DIRECTORY_SEPARATOR . 'whitelist.txt'));
	}
}

if (!function_exists("whitelistGetNetBIOSIP")) {

	/* function whitelistGetNetBIOSIP()
	 *
	 * 	provides an associative array of whitelisted IP Addresses base on TLD and NetBIOS Addresses
	 * @author 		Simon Roberts (Chronolabs) simon@labs.coop
	 *
	 * @return 		array
	 */
	function whitelistGetNetBIOSIP() {
		$ret = array();
		foreach(file(dirname(dirname(dirname(dirname(__FILE__)))) . DIRECTORY_SEPARATOR . 'whitelist-domains.txt') as $domain) {
			$ip = gethostbyname($domain);
			$ret[$ip] = $ip;
		} 
		return $ret;
	}
}

if (!function_exists("whitelistGetIP")) {

	/* function whitelistGetIP()
	 *
	 * 	get the True IPv4/IPv6 address of the client using the API
	 * @author 		Simon Roberts (Chronolabs) simon@labs.coop
	 * 
	 * @param		boolean		$asString	Whether to return an address or network long integer
	 * 
	 * @return 		mixed
	 */
	function whitelistGetIP($asString = true){
		// Gets the proxy ip sent by the user
		$proxy_ip = '';
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$proxy_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else
		if (!empty($_SERVER['HTTP_X_FORWARDED'])) {
			$proxy_ip = $_SERVER['HTTP_X_FORWARDED'];
		} else
		if (! empty($_SERVER['HTTP_FORWARDED_FOR'])) {
			$proxy_ip = $_SERVER['HTTP_FORWARDED_FOR'];
		} else
		if (!empty($_SERVER['HTTP_FORWARDED'])) {
			$proxy_ip = $_SERVER['HTTP_FORWARDED'];
		} else
		if (!empty($_SERVER['HTTP_VIA'])) {
			$proxy_ip = $_SERVER['HTTP_VIA'];
		} else
		if (!empty($_SERVER['HTTP_X_COMING_FROM'])) {
			$proxy_ip = $_SERVER['HTTP_X_COMING_FROM'];
		} else
		if (!empty($_SERVER['HTTP_COMING_FROM'])) {
			$proxy_ip = $_SERVER['HTTP_COMING_FROM'];
		}
		if (!empty($proxy_ip) && $is_ip = preg_match('/^([0-9]{1,3}.){3,3}[0-9]{1,3}/', $proxy_ip, $regs) && count($regs) > 0)  {
			$the_IP = $regs[0];
		} else {
			$the_IP = $_SERVER['REMOTE_ADDR'];
		}
			
		$the_IP = ($asString) ? $the_IP : ip2long($the_IP);
		return $the_IP;
	}
}

if (!class_exists("XmlDomConstruct")) {
	/**
	 * class XmlDomConstruct
	 * 
	 * 	Extends the DOMDocument to implement personal (utility) methods.
	 *
	 * @author 		Simon Roberts (Chronolabs) simon@labs.coop
	 */
	class XmlDomConstruct extends DOMDocument {
	
		/**
		 * Constructs elements and texts from an array or string.
		 * The array can contain an element's name in the index part
		 * and an element's text in the value part.
		 *
		 * It can also creates an xml with the same element tagName on the same
		 * level.
		 *
		 * ex:
		 * <nodes>
		 *   <node>text</node>
		 *   <node>
		 *     <field>hello</field>
		 *     <field>world</field>
		 *   </node>
		 * </nodes>
		 *
		 * Array should then look like:
		 *
		 * Array (
		 *   "nodes" => Array (
		 *     "node" => Array (
		 *       0 => "text"
		 *       1 => Array (
		 *         "field" => Array (
		 *           0 => "hello"
		 *           1 => "world"
		 *         )
		 *       )
		 *     )
		 *   )
		 * )
		 *
		 * @param mixed $mixed An array or string.
		 *
		 * @param DOMElement[optional] $domElement Then element
		 * from where the array will be construct to.
		 * 
		 * @author 		Simon Roberts (Chronolabs) simon@labs.coop
		 *
		 */
		public function fromMixed($mixed, DOMElement $domElement = null) {
	
			$domElement = is_null($domElement) ? $this : $domElement;
	
			if (is_array($mixed)) {
				foreach( $mixed as $index => $mixedElement ) {
	
					if ( is_int($index) ) {
						if ( $index == 0 ) {
							$node = $domElement;
						} else {
							$node = $this->createElement($domElement->tagName);
							$domElement->parentNode->appendChild($node);
						}
					}
					 
					else {
						$node = $this->createElement($index);
						$domElement->appendChild($node);
					}
					 
					$this->fromMixed($mixedElement, $node);
					 
				}
			} else {
				$domElement->appendChild($this->createTextNode($mixed));
			}
			 
		}
		 
	}
}

?>