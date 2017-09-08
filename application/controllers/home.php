<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$page = 'home'; 
		$this->load->view('layouts/main-layout', compact('page'));
	}
	public function wazzer() {


$date = new DateTime('now', new DateTimeZone('Asia/jakarta'));

 $mycurrenttime=$date->format('Y-m-d H:i:s');

////////////////insertion////////////
$city = array("Alvsbyn","Arjeplog","Arvidsjaur","Boden","Gallivare","Jokkmokk","Kalix","Kiruna","Lulea","Pajala","Pitea","Overkalix","Karlskrona","Olofstrom","Ronneby","Solvesborg","Avesta","Borlange","Falun","Hedemora","Leksand","Ludvika","Malung","Mora","Orsa","Smedjebacken","Sater","Alvdalen","Bollnas","Gavle","Hofors","Hudiksvall","Ljusdal","Nordanstig","Ockelbo","Ovanaker","Sandviken","Soderhamn","Falkenberg","Halmstad","Hylte","Kungsbacka","Laholm","Varberg","Berg","Bracke","Harjedalen","Krokom","Ragunda","Stromstad","Are","Ostersund","Aneby","Eksjo","Gislaved","Gnosjo","Habo","Jonkoping","Mullsjo","Nassjo","Savsjo","Tranas","Vaggeryd","Vetlanda","Varnamo","Borgholm","Emmaboda",
"Hultsfred","Hogsby","Kalmar","Monsterås","Morbylanga","Nybro","Oskarshamn","Torsas","Vimmerby","Vastervik","Alvesta","Lessebo","Ljungby","Markaryd","Tingsryd","Uppvidinge","Vaxjo","Almhult","Askersund","Degerfors","Hallsberg","Hallefors","Karlskoga","Kumla","Laxa","Lekeberg","Lindesberg","Ljusnarsberg","Nora","Orebro","Boxholm","Finspang","Kinda","Linkoping","Mjolby","Motala","Norrkoping","Soderkoping","Valdemarsvik","Ydre","Atvidaberg","arvika","arboga","balsta","stockholm","eskilstuna","atvidaberg","goteborg","eksjo","visby","vaxjo","Bjuv","Bromolla","Burlov","Bastad","Eslov","Hassleholm","Hoganas","Horby","Hoor","Klippan","Kristianstad","Kavlinge","Landskrona","Lomma","Lund","Malmo","Osby",
"Perstorp","Simrishamn","Sjobo","Skurup","Staffanstorp","Svalov","Svedala","Tomelilla","Trelleborg","Ystad","Angelholm","Astorp","Orkelljunga","Ostra Goinge","Eskilstuna","Flen","Gnesta","Katrineholm","Nykoping","Oxelosund","Strangnas","Trosa","Vingaker","Botkyrka","Ekero","Haninge","Huddinge","Jarfalla","Nacka","Norrtalje","Nykvarn","Nynashamn","Salem","Sigtuna","Solna","Stockholm","Sundbyberg","Sodertalje","Taby","Tyreso","Upplands-Bro","Upplands-Vasby","Vallentuna","Vaxholm","Varmdo","Osteraker","Enkoping","Heby","Habo","Knivsta","Tierp","Uppsala","Alvkarleby","Osthammar","Arvika","Eda","Filipstad","Forshaga","Grums","Hagfors","Hammaro","Karlstad","Kil","Kristinehamn","Munkfors",
"Storfors","Sunne","Saffle","Torsby","Arjang","Bjurholm","Mala","Nordmaling","Norsjo","Robertsfors","Skelleftea","Sorsele","Storuman","Umea","Vilhelmina","Vindeln","Vannas","Asele","Harnosand","Kramfors","Solleftea","Sundsvall","Ange","Ornskoldsvik","Arboga","Fagersta","Hallstahammar","Koping","Kungsor","Norberg","Sala","Skinnskatteberg","Surahammar","Vasteras","Ale","Alingsas","Boras","Dals-Ed","Fargelanda","Grastorp","Gullspang","Goteborg","Gotene","Herrljunga","Harryda","Karlsborg","Kungalv","Lidkoping","Lilla Edet","Lysekil","Mariestad","Mark","Mellerud","Orust","Skovde","Sotenas","Stromstad",
"Svenljunga","Tjorn","Tranemo","Toreboda","Uddevalla","Amal","Ockero","malmo","mariehamn","faro","larbo","Lickershamn","Aminne","Bjarges","Klintehamn","Ljugarn","Havdhem","Burgsvik","Sundre");
for ($i=0; $i <count($city) ; $i++) { 
	$mycity=$city[$i];
	$extension="json";
$citys = "$mycity.$extension";

 
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.wunderground.com/api/41fa9d4659883149/geolookup/conditions/q/Sweden/".$citys);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Accept: application/json"
));
$response = curl_exec($ch);
curl_close($ch);
$json = json_decode($response, true);

$error = $json['response']['error'];
if($error != ""){
    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.wunderground.com/api/6bcd3b41522132d7/geolookup/conditions/q/Sweden/".$citys);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Accept: application/json"
));
$response = curl_exec($ch);
curl_close($ch);
$json = json_decode($response, true);
}
 if($json ==""){   
  $json =  $response; 
 }


//$page_data['rainfall']=$json['current_observation']['icon'];
$page_data['icon']=$json['current_observation']['icon'];
$page_data['icon_url']=$json['current_observation']['icon_url'];
$page_data['visibility_km']=$json['current_observation']['visibility_km'];
$page_data['pressure_mb']=$json['current_observation']['pressure_mb']; 
$page_data['windchill_c']=$json['current_observation']['windchill_c'];  
$page_data['relative_humidity']=$json['current_observation']['relative_humidity']; 
$page_data['temp_c']=$json['current_observation']['temp_c']; 
$page_data['weather']=$json['current_observation']['weather']; 
$update_time = $json['current_observation']['observation_time'];
$page_data['city']=$json['current_observation']['display_location']['city'];
$page_data['state']=$json['current_observation']['display_location']['state'];
$page_data['country']=$json['current_observation']['display_location']['state_name']; 
$page_data['lat']=$json['current_observation']['display_location']['latitude'];
$page_data['lng']=$json['current_observation']['display_location']['longitude'];
 
 $page_data['update_time']=$mycurrenttime;


}








	    $this->load->view('index', $page_data);

	}
}