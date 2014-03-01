<?php
// Sal Sodano
// www.salscode.com

if(!function_exists("rblcheck"))
{
	// Lookup IPv4 IPs on a set of blacklists.
	function rblcheck($ip)
	{
		$blacklists = array(
			"0spam.fusionzero.com",
			"dnsbl.sorbs.net",
			"spam.dnsbl.sorbs.net",
			"b.barracudacentral.org",
			"bl.mailspike.net",
			"bl.spameatingmonkey.net",
			"bl.spamcannibal.org",
			"bl.tiopan.com",
			"blackholes.five-ten-sg.com",
			"blackholes.intersil.net",
			"bogons.cymru.com",
			"cbl.abuseat.org",
			"combined.njabl.org",
			"db.wpbl.info",
			"dnsbl.ahbl.org",
			"dnsbl.inps.de",
			"dnsbl.justspam.org",
			"dnsbl.mags.net",
			"dnsbl.rangers.eu.org",
			"dnsbl-1.uceprotect.net",
			"ip.v4bl.org",
			"ips.backscatterer.org",
			"ix.dnsbl.manitu.net",
			"l2.apews.org",
			"no-more-funn.moensted.dk",
			"psbl.surriel.com",
			"rbl.efnet.org",
			"bl.spamcop.net",
			"drone.abuse.ch",
			"spam.dnsbl.anonmails.de",
			"spam.spamrats.com",
			"spamguard.leadmon.net",
			"t1.dnsbl.net.au",
			"tor.dan.me.uk",
			"tor.dnsbl.sectoor.de",
			"ubl.unsubscore.com",
			"virbl.dnsbl.bit.nl",
			"zen.spamhaus.org",
			"dul.ru",
			"spamsources.fabel.dk",
			"dnsrbl.swinog.ch",
			"uribl.swinog.ch",
			"cblplus.anti-spam.org.cn",
			"dnsbl.kempt.net",
			"truncate.gbudb.net",
			"blacklist.woody.ch",
			"virbl.bit.nl",
			"orvedb.aupads.org",
			"korea.services.net",
			"bl.emailbasura.org"
		);
		
		$listed = array();
		
		if($ip && filter_var($ip, FILTER_VALIDATE_IP))
		{
			$reverse_ip = implode(".", array_reverse(explode(".",$ip)));
			foreach($blacklists as $blacklist)
			{
				if(checkdnsrr($reverse_ip.".".$blacklist.".", "A"))
				{
					$listed[] = $blacklist;
				}
			}
		}
		
		return count($listed) > 0 ? $listed : null;
	}
}
?>