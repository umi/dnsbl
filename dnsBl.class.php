<?php
/**
 * DNSBL check
 *
 * @author umi
 * @create 2011/07/15
 */
class DnsBl {
	/**
	 * BBQ
	 */
	const BBQ = 'niku.2ch.net';
	
	/**
	 * spam champuru
	 */
	const CHAMPURU = 'dnsbl.spam-champuru.livedoor.com';
	
	/**
	 * bbx
	 */
	const BBX = 'bbx.2ch.net';
	
	/**
	 * DSBL
	 */
	const UNCONFIRMED_DSBL = 'unconfirmed.dsbl.org';
	const LIST_DSBL = 'list.dsbl.org';
	
	/**
	 * DNSBL
	 */
	const SORBS_DNSBL = 'http.dnsbl.sorbs.net';
	
	/**
	 * TOR
	 */
	const TOR = 'tor.s2n.ch';
	
	private function __construct() {
	}
	
	/**
	 * lookup
	 */
	public static function exist($ip, $rbl = self::BBQ){
		$query_addr = implode('.',array_reverse(explode( ".", $ip))).'.'.$rbl;
		$addr = gethostbyname($query_addr);
		if($addr == "127.0.0.2"){
			return true;
		}else{
			return false;
		}
	}
}
