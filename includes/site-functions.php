<?php
	
	function clean($string){
	   return trim(preg_replace('/-+/', '-', preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $string))), '-');   
	}
	
	function jd($j){return json_decode($j);}
	
	function je($j){return json_encode($j);}
	
	function isJson($string){
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	}
	
	function utf8ize($d) {
        if (is_array($d)) {
            foreach ($d as $k => $v) {
                $d[$k] = utf8ize($v);
            }
        } else if (is_string ($d)) {
            return utf8_encode($d);
        }
        return $d;
    }
	
	function isEven($x){return fmod($x,2);}
	
	function isOdd($x){return fmod($x,2);}
	
	function random_color_part() {
		$dt = '';
		for($o=1;$o<=3;$o++){
			$dt .= str_pad( dechex( mt_rand( 0, 127 ) ), 2, '0', STR_PAD_LEFT);
		}
		return $dt;
	}
	function getRandomColor() {
		$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
		$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
		return $color;
	}
	
	function paragraph($txt){
		return trim(preg_replace('/\r\n|\r/','<br>',$txt));
	}
	function editable($txt){
		return str_ireplace('<br>',PHP_EOL,$txt);
	}
	
	function activePage($p=NULL){
		$p1 = explode('.', basename($_SERVER['PHP_SELF']))[0];
		if($p){
			return $p===$p1 ? true:false;
		}else{
			return $p1;
		}
	}
	
	function pageName($p){return ucwords(str_ireplace('-',' ',$p));}
	
	function getTimeAgo( $time ){
		$time_difference = time() - $time;
		if( $time_difference < 1 ) { return 'a few secs ago'; }
		$condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
					30 * 24 * 60 * 60       =>  ' month',
					24 * 60 * 60            =>  ' day',
					60 * 60                 =>  ' hr',
					60                      =>  ' min',
					1                       =>  ' sec'
				);
		foreach($condition as $secs => $str){
			$d = $time_difference / $secs;

			if( $d >= 1 ){
				$t = round( $d );
				return $t . '' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
			}
		}
	}
	
	
	function smallNumber($n) {
        $n = (0+str_replace(",","",$n));
        if(!is_numeric($n)) return false;
        if($n>=1000000000000) return round(($n/1000000000000),2).'T';
        else if($n>=1000000000) return round(($n/1000000000),2).'B';
        else if($n>=1000000) return round(($n/1000000),2).'M';
        else if($n>=1000) return round(($n/1000),2).'K';
        return number_format($n);
    }
	
	function nF($n,$f){$f = '%0'.$f.'d'; return sprintf($f, $n);}
	
	function password($p){return md5(base64_encode('!@#$%^&*_+'.$p));}
	
	function getIpAddress(){
			if (isset($_SERVER['HTTP_CLIENT_IP'])){
             $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
			} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else if (isset($_SERVER['HTTP_X_FORWARDED'])){
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])){
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            } else if (isset($_SERVER['HTTP_FORWARDED'])){
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            } else {
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            }
            if($ipaddress=='::1'){
				return '127.0.0.1';
			}else{
				return $ipaddress;
			}
    }
	
	$today     = strtotime('today');
	$now       = strtotime('now');
	$yesterday = strtotime("yesterday");
	$thisweekstart = strtotime("monday this week");
	$thisweekend = strtotime("+6 days",$thisweekstart);
	$thismonth  = strtotime("this month");
	$thismonthstart = strtotime(date('Y-m-01'));
	$thismonthend =strtotime(date('Y-m-t 23:59'));
	
	function userAllowed($r,$a){
		$u = false;
		if(is_array($a)){				
			foreach($a as $ar){
				if($r===$ar){
					$u = true;
				}
			}
		}else{
			if($r===$ar){
				$u = true;
			}
		}
		return $u;
     }
    
    function formatNum($num){
		return sprintf("%+d",$num);
	}
	
	function activeDay($w){
		if($w===date('l')){
			return 'active';
		}else{
			return '';
		}
	}
	
	function cpp($a,$b){
		$oldFigure = 14;
		$newFigure = 12.50;
		
		$percentChange = round(((1 - ($b / $a)) * 100),2);
		
		return $percentChange;
		
		/*$a = (int)$a;
		$b = (int)$b;
		if($b){
		    $c = (($a-$b)/$b)*100;
			return round($c,2);
		}else{
			return $a;
		}*/
	}
	function checkSession($url){
		$time = 3600; 
		if (isset($_SESSION['time']) && (time() - $_SESSION['time']) > $time){
		   header('Location: '.$url.'logout');
		   exit();
		} else {
		  $_SESSION['time'] = time();
		}
	}
	
	function clockinKey($string,$a=null){
		$output = false;	 
		$encrypt_method = "AES-256-CBC";
		$secret_key = 'i#Cl0cK!N#Kx3Y';
		$secret_iv = 'S@MS0N_KW?Z';
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
		if($a){
		   $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		   $output = base64_encode($output);
		}else{
		   $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
		}	 
		return trim(preg_replace('/=+/', '=',$output),'=');
	}
	
	
	function periods($p){
		if($p==='today'){
			return array(strtotime('Today'),strtotime('Today 23:59'));
		}elseif($p==='yesterday'){
			return array(strtotime('Yesterday'),strtotime('Yesterday 23:59'));
		}elseif($p==='week'){
			return array(strtotime('Monday this week'),strtotime('Sunday this Week 23:59'));
		}elseif($p==='month'){
			return array(strtotime(date('Y-m-01')),strtotime(date('Y-m-t 23:59')));
		}elseif($p==='last_month'){
			return array(strtotime("first day of previous month"),strtotime("last day of previous month"));
		}else{
			return false;
		}
	}
	
	function getIPInfo($ip){
		$url = 'http://ip-api.com/json/'.$ip;
	    	$ch = curl_init();  
	 	curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	        $output=curl_exec($ch);
	        curl_close($ch);
	        return $output;
	}
	
	function is_ssl() {
	    if ( isset($_SERVER['HTTPS']) ) {
	        if ( 'on' == strtolower($_SERVER['HTTPS']) )
	            return true;
	        if ( '1' == $_SERVER['HTTPS'] )
	            return true;
	    } elseif ( isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
	        return true;
	    }
	    return false;
	}
	
	function fileNewName($path, $filename){
		if ($pos = strrpos($filename, '.')) {
			$name = substr($filename, 0, $pos);
			$ext = substr($filename, $pos);
		} else {
			$name = $filename;
		}
		if(!is_dir($path)){
			mkdir($path,0755,true);
		}
		$newpath = $path.'/'.$filename;
		$newname = $filename;
		$counter = 0;
		while (file_exists($newpath)) {
			   $newname = $name .'_'. $counter . $ext;
			   $newpath = $path.'/'.$newname;
			   $counter++;
		}
		return $newname;
	}

	
	function getRequestHeaders() {
	    $headers = array();
	    foreach($_SERVER as $key => $value) {
	        if (substr($key, 0, 5) <> 'HTTP_') {
	            continue;
	        }
	        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
	        $headers[$header] = $value;
	    }
	    $headers['IP'] = getIpAddress();
	    return $headers;
	}
	
	function slugify($string){
	$preps = array('in', 'at', 'on', 'by', 'into', 'off', 'onto', 'from', 'to', 'with', 'a', 'an', 'the', 'using', 'for');
	$pattern = '/\b(?:' . join('|', $preps) . ')\b/i';
	$string = preg_replace($pattern, '', $string);
	$string = preg_replace('~[^\\pL\d]+~u', '-', $string);
	$string = trim($string, '-');
	$string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
	$string = strtolower($string);
	$string = preg_replace('~[^-\w]+~', '', $string);

	return $string;
	
	}
	

	
?>