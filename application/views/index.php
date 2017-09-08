<?php

// Turn off all error reporting
error_reporting(0);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.2/leaflet.css"/>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.2/leaflet.js"></script>

  <script type="text/javascript" src="https://cdn.aerisjs.com/aeris.js"></script>

		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://dfqhb50p6jl8.cloudfront.net/css/main.css/8f954d4f4e727c3527df58e8cec2772cdef0490c" />
		<link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://dfqhb50p6jl8.cloudfront.net/css/page-country-map.css/8f954d4f4e727c3527df58e8cec2772cdef0490c" />
		<link rel="stylesheet" type="text/css" media="print" href="https://dfqhb50p6jl8.cloudfront.net/css/print.css/533ec29a44f53c71224809bdd820ee8eb59915a0" />
		<link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://dfqhb50p6jl8.cloudfront.net/css/regress.css/8f954d4f4e727c3527df58e8cec2772cdef0490c" />
		<link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://dfqhb50p6jl8.cloudfront.net/css/data-uri/images-common.css/6803cdf6647d6288941d70b1d89863df5d00eacd" />
		<link rel="stylesheet" type="text/css" media="screen,projection,print" href="https://dfqhb50p6jl8.cloudfront.net/css/data-uri/images-icons.css/6803cdf6647d6288941d70b1d89863df5d00eacd" />



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

 <!--<script src="https://maps.google.com/maps/api/js?key=AIzaSyCk-BXmpXFjGcDSIat-7ZwLohZB2GdnJNw&sensor=false"  type="text/javascript"></script>-->
	<style type="text/css">
		ul.map-frontpage li a{border-bottom: 1px solid #00357b;font-size: 16px;font-weight: normal;}
		ul.map-frontpage li b{font-weight: normal;}
	</style>
 <script type="text/javascript" src="assest/js/fusioncharts.js"></script>
    <script type="text/javascript" src="assest/js/themes/fusioncharts.theme.fint.js"></script>
	<script type="text/javascript" src="assest/js/fusioncharts.maps.js"></script>
	<script type="text/javascript" src="assest/js/maps/fusioncharts.sweden.js"></script>


	<?php

	//$where = "name='Joe' AND status='boss' OR status='active'";
    // $wdb =  $this->db->get_where('city_weather',array('x !=' => 0,'y !='=>0))->result_array();

  $wdb = $this->db
   ->select('*')
   ->where("x !=",0)
  ->where("y !=",0)
  ->group_by('icon')
  ->get('city_weather');


  //echo "<pre>";
  // print_r($wdb->result_array()); exit;



      $prefix .= '';
      $prefix .= "[\n";
     foreach ( $wdb->result_array() as $data ) {

      $icon = $data['icon'];
      $icon_url = $data['icon_url'];
      if($icon_url==""){
      $icon = "clears";
      $icon_url = "https://icons.wxug.com/i/c/k/clear.gif";
      }

				$prefix .= " {\n";

				$prefix .= '  "id": "' . $icon . '",' . "\n";
                $prefix .= '  "type": "' . "image" . '",' . "\n";
                $prefix .= '  "url": "' . $icon_url . '",' . "\n";
                $prefix .= '  "xscale": "' . "50" . '",' . "\n";
                $prefix .= '  "yscale": "' . "50" . '",' . "\n";
                $prefix .= '  "labelPadding": "' . "15" . '"' . "\n";

				$prefix .= "},\n";

     }
     	$prefix .= "\n]";


  $query =  $this->db->get_where('city_weather',array('x !=' => 0,'y !='=>0))->result_array();
  //print_r($query); exit;


      $items .= '';
      $items .= "[\n";
     foreach ( $query as $data ) {

      $icon = $data['icon'];
      $icon_url = $data['icon_url'];
      if($icon_url==""){
      $icon = "clears";
      $icon_url = "https://icons.wxug.com/i/c/k/clear.gif";
      }
      $name = $data['city'];
      $lat = $data['lat'];
      $lon = $data['lng'];
      $desc = $data['weather'];
      $temp = $data['temp_c'];
      $x = $data['x'];
      $y = $data['y'];



				$items .= " {\n";

				$items .= '  "id": "' . $name . '",' . "\n";
                $items .= '  "shapeid": "' . $icon . '",' . "\n";
                $items .= '  "x": "' . $x . '",' . "\n";
                $items .= '  "y": "' . $y . '",' . "\n";
                $items .= '  "label": "' . "$temp". '°",' . "\n";
                $items .= '  "tooltext": "' . "$temp,$desc" . '",' . "\n";
                $items .= '  "labelpos": "' . "left" . '"' . "\n";

				$items .= "},\n";

     }
     	$items .= "\n]";

    // print_r($items); exit;

	?>


    <script>
    FusionCharts.ready(function() {
        var airportsMap = new FusionCharts({
            type: 'maps/sweden',
            renderAt: 'chart-container',
            width: '400',
            height: '600',
            dataFormat: 'json',
            dataSource: {
                "chart": {
                    "caption": "Vädret	idag",
                    "subcaption": "",
                    "theme": "fint",
                    "markerBgColor": "#FF0000",
                    "markerRadius": "10",
                    "showBorder" : "1",
                    "borderColor" :"#000",
                    "borderAlpha" : "10",
                    "showLabels": "0",
                    "showMarkerLabels": "1",
                    "fillcolor": "F1f1f1",
                    "basefont": "Helvetica",
                    "baseFontColor": "#0808a8",
                    "basefontsize": "15",
                    "basefontbold": "bold",
                    "showmarkertooltip": "1",
                    "entityFillColor": "#e5f8a9",
                    "entityFillHoverColor": "#00357b",
					"showCanvasBorder": "0",


                },

				 "map": {
						"showshadow": "0",
						"showlabels": "0",
						"showmarkerlabels": "0",
						"fillcolor": "F1f1f1",
						"bordercolor": "CCCCCC",
						"basefont": "Verdana",
						"basefontsize": "10",
						"markerbordercolor": "000000",
						"markerbgcolor": "FF5904",
						"markerradius": "6",
						"usehovercolor": "0",
						"hoveronempty": "0",
						"showmarkertooltip": "1",
						"canvasBorderColor": "375277",
						"canvasBorderAlpha": "0"
					},

                "markers": {
					"shapes": <?php echo $prefix; ?>,
                    "items": <?php echo $items; ?>
                },
                 "data": [
        {
            "data": [
                {
                    "id": "10",
                    "value": "",
                    "link": "?home/stateweather/Dalarnas"
                },
                {
                    "id": "12",
                    "value": "",
                    "link": "?home/stateweather/Kronoberg"
                },
                {
                    "id": "14",
                    "value": "",
                    "link": "?home/stateweather/Norrbotten"
                },
                {
                    "id": "15",
                    "value": "",
                    "link": "?home/stateweather/Orebro"
                },
                {
                    "id": "16",
                    "value": "",
                    "link": "?home/stateweather/Ostergotland"
                },
                {
                    "id": "18",
                    "value": "",
                    "link": "?home/stateweather/Sodermanland"
                },
                {
                    "id": "21",
                    "value": "",
                    "link": "?home/stateweather/Uppsala"
                },
                {
                    "id": "22",
                    "value": "",
                    "link": "?home/stateweather/Varmland"
                },
                {
                    "id": "23",
                    "value": "",
                    "link": "?home/stateweather/Vasterbotten"
                },
                {
                    "id": "24",
                    "value": "",
                    "link": "?home/stateweather/Vasternorrland"
                },
                {
                    "id": "25",
                    "value": "",
                    "link": "?home/stateweather/Vastmanland"
                },
                {
                    "id": "26",
                    "value": "",
                    "link": "?home/stateweather/Stockholm"
                },
                {
                    "id": "27",
                    "value": "",
                    "link": "?home/stateweather/Skane"
                },
                {
                    "id": "28",
                    "value": "",
                    "link": "?home/stateweather/VastraGotaland"
                },
                {
                    "id": "02",
                    "value": "",
                    "link": "?home/stateweather/Blekinge"
                },
                {
                    "id": "07",
                    "value": "",
                    "link": "?home/stateweather/Jamtland"
                },
                {
                    "id": "03",
                    "value": "",
                    "link": "?home/stateweather/Gavleborg"
                },
                {
                    "id": "06",
                    "value": "",
                    "link": "?home/stateweather/Halland"
                },
                {
                    "id": "09",
                    "value": "",
                    "link": "n-?home/stateweather/Kalmar"
                },
                {
                    "id": "08",
                    "value": "",
                    "link": "?home/stateweather/Jonkoping"
                },
                {
                    "id": "05",
                    "value": "",
                    "link": "?home/stateweather/Gotland"
                }
            ]
        }
    ]
            }
        }).render();
    });
    </script>

  <!------------- Java Scripts for Map  ------------------->
  <!--  <script type="text/javascript">

    //--------------------- Sample code written by vIr ------------

                    var center = null;
                    var map = null;
                    var currentPopup;
                    var bounds = new google.maps.LatLngBounds();
                    function addMarker(lat, lng, info, iconurl ) {
                        var icon = new google.maps.MarkerImage(iconurl,
               new google.maps.Size(50, 60), new google.maps.Point(0, 0),
               new google.maps.Point(16, 32));
                        var pt = new google.maps.LatLng(lat, lng);
                        bounds.extend(pt);
                        var marker = new google.maps.Marker({
                            position: pt,
                            icon: icon,
                            map: map
                        });
                        var popup = new google.maps.InfoWindow({
                            content: info,
                            maxWidth: 300
                        });
                        google.maps.event.addListener(marker, "click", function() {
                            if (currentPopup != null) {
                                currentPopup.close();
                                currentPopup = null;
                            }
                            popup.open(map, marker);
                            currentPopup = popup;
                        });
                        google.maps.event.addListener(popup, "closeclick", function() {
                            map.panTo(center);
                            currentPopup = null;
                        });
                    }
                    function initMap() {
                        map = new google.maps.Map(document.getElementById("map"), {

                            center: new google.maps.LatLng(0, 0),
                            zoom: 12,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            mapTypeControl: true,
                            mapTypeControlOptions: {
                                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                            },
                            navigationControl: true,
                            navigationControlOptions: {
                                style: google.maps.NavigationControlStyle.ZOOM_PAN
                            }
                        });
     <?php
     $wdb =  $this->db->get_where('city_weather',array('lat !=' => 0,'lng !='=>0))->result_array();
     foreach ($wdb as $data ) {
      $icon_url = $data['icon_url'];
      if($icon_url==""){
      $icon_url = "https://icons.wxug.com/i/c/k/clear.gif";
      }
      $name = $data['city'];
      $lat = $data['lat'];
      $lon = $data['lng'];
      $desc = $data['weather'];
      $temp = $data['temp_c'];

   //echo("addMarker($lat, $lon, '<b>$name</b><br />$desc,$temp C','$icon_url');\n");
   }
  ?>
   center = bounds.getCenter();
   map.fitBounds(bounds);

   }
   </script> -->



  </style>

<style>
h5{
font-size: 20px;}
#country-list{float:left;list-style:none;margin:0;/*padding:0*/;width:100%;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}

</style>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){



  $("#search-box").keyup(function(){
var a=$(this).val()
console.log(a.length);
if(a==0){
  $("#suggesstion-box").hide();
  }
else{


    $.ajax({
    type: "POST",
    url: "/index.php?home/autocomplete",
    data:'keyword='+$(this).val(),
    beforeSend: function(){
      $("#search-box").css("background","#FFF url(assest/img/LoaderIcon.gif) no-repeat 165px");
    },
    success: function(data){
        console.log(data);
      if(data==""){
        console.log("he");
        $("#suggesstion-box").hide();
      }
      else{ $("#suggesstion-box").show();
      $("#suggesstion-box").html(data);
      $("#search-box").css("background","#FFF");
    }
    }
    });

}

  });
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>

</head>
<body style="background-color: #fff !important;">
<style>
	#country-list {padding-left:0px !important;}
a.ubm_banner, a.ubm_banner:hover {
    background: transparent !important;
    color: transparent !important;
    /* text-decoration: none !important; */
    padding: 0px !important;
    margin: 0px !important;
    vertical-align: top !important;
}

.page-sidebar {
    float: right;
    width: 100%;
    max-width: 250px;
}


@media (min-width: 992px)

.hide-on-mobile {
    display: inline;
}


svg{
/*left: -65.985776px !important;*/
}

.list .item {
    width: calc(33.33333% - 26.66667px);
    float: left;
}

.list .item {
    margin-bottom: -121px;
}

.list {
list-style: none;
}

.hide-on-mobile {
    display: none;
}
@media (min-width: 992px){

.hide-on-mobile {
    display: inline;
}
}


</style>





<div class="row" style="margin-bottom: 15px;" >
    <div class="col-sm-12">

		<div id="id1" style="box-shadow: 0 0px 1px rgba(0,0,0,0.15); padding:2px; background:#fff;"><script src="backend/js/ubm-jsonp.js"></script>
	    <!-- <a  target="blank" class="ubm_banner" href="http://www.ikea.com/se/sv/" title="bmw"><img src="assest/img/header.jpg" alt="bmw" style="height: 300px;    width: 100%;"></a>-->

		 <?php
		 if(!empty($banners)){ ?>
            <a target="_blank" class="ubm_banner" href="http://wazzer.se/?home/adclicked/<?php echo $bannerid; ?>" title="bmw">
                <img src="<?php echo $banners; ?>" alt="bmw" style="height: 300px;width: 100%;">
        <?php }else{ ?>
            <a target="_blank" class="ubm_banner" href="http://www.ikea.com/se/sv/" title="bmw">
                <img src="assest/img/header.jpg" alt="bmw" style="height: 300px;width: 100%;">
        <?php } ?>
    </a>
    </div>
			</div>
		</div>
<div class="row" style="background-color: #fff;">

		<div class="col-sm-10" style="/*background-color:*/ #E4EAEF; padding: 10px 10px; margin-top: 1.5%; margin-bottom: 12px;">
					<div class="col-sm-10" style="/*padding: 0px;*/ border: 1px solid #d8d2d2; border-radius: 20px 2px 0px 20px; padding-left: 0px; padding-right: 0px;">
						<form action="search.php" method="post">
						<input type="text" id="search-box" name="search_box" class="form-control" style="width: 100%; height: 40px; border: none; padding-top: 5px; border-radius: 0px; border-radius: 20px 0px 0px 20px;" placeholder="Sök vädret på din ort...">

							<div id="suggesstion-box"></div>
					</form></div>

						<div class="col-sm-2" style="padding-left: 5px;">
							<button type="submit" class="btn btn-primary btn-block" style="border-radius: 0px 20px 20px 0px; width: auto; height: 42px; line-height: 25px; background-color: #90caf7;">Sök</button>
						</div>


		</div> <!--Search bar end-->
	</div>


	<div class="row" style="background-color: #fff;">
<div class="col-sm-5">
<table class="table">
    <thead>
      <tr>
        <th>Platser</th>

<th style="text-transform: capitalize;"><?php $t=date('d-m-Y');
setlocale(LC_ALL, 'sv_SE');
echo  utf8_encode(strftime('%a')); //date("D",strtotime($t));
?></th>
        <th style="text-transform: capitalize;">
<?php
//$startdate1=date("d+1-m-y");
$startdate1 = date('Y-m-d', strtotime("+1 days"));
//$parts = explode('-',$startdate1);
//$startdate2 = date('d-m-Y',mktime(0,0,0,$parts[1],($parts[0]+1),$parts[2]));
//echo $startdate2;
//$startdate3 = date('d-m-Y',mktime(0,0,0,$parts[1],($parts[0]+2),$parts[2]));
//echo $startdate3;
//echo  date("D",strtotime($startdate2));

echo  utf8_encode(strftime('%a', strtotime("+1 days")));
?>
</th>
        <th style="text-transform: capitalize;"><?php $t=date('Y-m-d', strtotime("+2 days"));
echo  utf8_encode(strftime('%a', strtotime("+2 days")));
?></th>

 <th style="text-transform: capitalize;"><?php
 $t=date('Y-m-d', strtotime("+3 days"));
//$t=date('d-m-Y',mktime(0,0,0,$parts[1]+2,($parts[0]),$parts[2]));
echo  utf8_encode(strftime('%a', strtotime("+3 days")));
?></th>

      </tr>
    </thead>
    <tbody>
      <?php
/*$cityss = array("Uppsala","Lulea","Umea", "Sundsvall", "Gavle","Stockholm","Visby","Linkoping","Norrkoping",
"Goteborg","Malmo");*/
$citywea = array("Kiruna","Lulea","Umea", "Sundsvall", "Gavle","Solvesborg","Visby","Linkoping","Norrkoping",
"Ostersund","Malung");

for ($j=0; $j <count($citywea) ; $j++) {
         $mycitywea=$citywea[$j];
	$extensionwea="json";
$cityswe = "$mycitywea.$extensionwea";
//$json_string1 = file_get_contents("https://api.wunderground.com/api/99483c3334b2220c/forecast/q/Sweden/".$citys);
  //$parsed_json1 = json_decode($json_string1);

  /*$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, "https://api.wunderground.com/api/41fa9d4659883149/forecast/q/Sweden/".$cityswe);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_HEADER, FALSE);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
  "Accept: application/json"
));
$response1 = curl_exec($ch1);
curl_close($ch1);
$json1 = json_decode($response1, true);
 $error = $json1['response']['error'];
if($error != ""){
      $ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, "https://api.wunderground.com/api/6bcd3b41522132d7/forecast/q/Sweden/".$cityswe);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_HEADER, FALSE);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
  "Accept: application/json"
));
$response1 = curl_exec($ch1);
curl_close($ch1);
$json1 = json_decode($response1, true);
$error = $json1['response']['error'];
  }
$myjson=$json1['forecast']['simpleforecast']['forecastday'];

$mydata['nextdate']	=$myjson[$i]['date']['day'].' '.$myjson[$i]['date']['monthname_short'].' '.$myjson[$i]['date']['year'];
//print_r($mydata['nextdate']);
$mydata['nextconditions']=$myjson[$i]['conditions'];

$mydata['nexticon']=$myjson[$i]['icon'];
$mydata['nexticonurl']=$myjson[$i]['icon_url'];
$mydata['nexttem']=$myjson[$i]['high']['celsius'];

if($error=="" && $json1 !=""){
?>

<tr>
        <td><?php echo $mycitywea;?></td>
        <?php for($i=0;$i<4;$i++){ ?>
        <td>
<img style="height: 50%;" src="<?php echo $myjson[$i]['icon_url']; ?>">
<?php echo $myjson[$i]['high']['celsius']. ' C'; ?>
</td>
     <?php } ?>
      </tr>

<?php
}
else
{*/
     $wdb =  $this->db->get_where('weatherforcast' , array('city' =>$mycitywea, 'nextdate !=' => ''))->result_array();
//echo "<pre>";
//print_r($wdb);
?>
       <tr>
        <td><?php if($mycitywea == 'Ostersund'){echo 'Östersund';}
	elseif($mycitywea == 'Norrkoping'){echo 'Norrköping';}
	elseif($mycitywea == 'Linkoping'){echo 'Linköping';}
	elseif($mycitywea == 'Solvesborg'){echo 'Sölvesborg';}
	elseif($mycitywea == 'Gavle'){echo 'Gävle';}
	elseif($mycitywea == 'Umea'){echo 'Umeå';}
	elseif($mycitywea == 'Lulea'){echo 'Luleå';}
	else{echo $mycitywea ;}?></td>
        <td>
<img style="height: 50%;" src="<?php echo $wdb[0]['nexticonurl']; ?>">
<?php echo $wdb[0]['nexttem']. '°' ?>
</td>
         <td><img style="height: 50%;"  src="<?php echo $wdb[1]['nexticonurl']; ?>">
<?php echo $wdb[1]['nexttem']. '°' ?></td>
 <td><img style="height: 50%;" src="<?php echo $wdb[2]['nexticonurl']; ?>">
<?php echo $wdb[2]['nexttem']. '°' ?></td>
<td><img style="height: 50%;" src="<?php echo $wdb[3]['nexticonurl']; ?>">
<?php echo $wdb[3]['nexttem']. '°' ?></td>
      </tr>
<?php // }


}





/*for($i=0;$i<11;$i++){
 $c =$cityss[$i] ;

           $wdb =  $this->db->get_where('weatherforcast' , array('city' =>$c, 'nextdate !=' => ''))->result_array();
//echo "<pre>";
//print_r($wdb);

if($wdb[0]['nexttem'] ==""){ $wdb[0]['nexttem']="15";}
if($wdb[1]['nexttem'] ==""){ $wdb[1]['nexttem']="15";}
if($wdb[2]['nexttem'] ==""){ $wdb[2]['nexttem']="15";}
if($wdb[3]['nexttem'] ==""){ $wdb[3]['nexttem']="15";}
?>

       <tr>
        <td><?php echo $c ;?></td>
        <td>
<img style="height: 50%;" src="<?php echo $wdb[0]['nexticonurl']; ?>">
<?php echo $wdb[0]['nexttem']. ' C' ?>
</td>
         <td><img style="height: 50%;"  src="<?php echo $wdb[1]['nexticonurl']; ?>">
<?php echo $wdb[1]['nexttem']. ' C' ?></td>
 <td><img style="height: 50%;" src="<?php echo $wdb[2]['nexticonurl']; ?>">
<?php echo $wdb[2]['nexttem']. ' C' ?></td>
<td><img style="height: 50%;" src="<?php echo $wdb[3]['nexticonurl']; ?>">
<?php echo $wdb[3]['nexttem']. ° ?></td>
      </tr>



<?php }*/ ?>

    </tbody>
  </table>



</div>


<div class="col-sm-4">

	<div class="map sweden">

		<div>

		<!--	<img src="assest/img/Sweden.png" alt="">-->
	<!--<div id="map" style="height: 500px;"></div>-->
	<div id="chart-container">A world map will load here!</div>

		</div>

	</div>

</div>

		<div class="col-md-3">


		    	<ul style="list-style: none;text-align: right;" class="map-frontpage">
		    	    <li class="province-norrbotten">
		    	   <h3> Alla Sveriges län</h3>
		    	    </li>
									<li class="province-norrbotten">

<h4>
							<div onclick="javascript:window.location.href='#'"><a  href="?home/stateweather/Norrbotten" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Norrbotten"><span class="gui popup"><b>Norrbotten</b></span></a></div>
													</h4>

											</li>

									<li class="province-vasterbotten">

<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Vasterbotten" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Västerbotten"><span class="gui popup"><b>Västerbotten</b></span></a></div>
													</h4>

											</li>

									<li class="province-jamtland">
					<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Jamtland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Jämtland"><span class="gui popup"><b>Jämtland</b></span></a></div>
													</h4>
													</li>

									<li class="province-vasternorrland">
						<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Vasternorrland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Västernorrland"><span class="gui popup"><b>Västernorrland</b></span></a></div>
													</h4>

											</li>

									<li class="province-gavleborg">

<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Gavleborg" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Gävleborg"><span class="gui popup"><b>Gävleborg</b></span></a></div>
													</h4>

											</li>

									<li class="province-dalarna">
					<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Dalarna" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Dalarna"><span class="gui popup"><b>Dalarna</b></span></a></div>
													</h4>

											</li>

									<li class="province-varmland">
									<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Varmland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Värmland"><span class="gui popup"><b>Värmland</b></span></a></div>
													</h4>

											</li>

									<li class="province-orebro">
						<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Orebro" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Örebro"><span class="gui popup"><b>Örebro</b></span></a></div>
													</h4>

											</li>

									<li class="province-vastmanland">

<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Vastmanland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Västmanland"><span class="gui popup"><b>Västmanland</b></span></a></div>
													</h4>

											</li>

									<li class="province-uppsala">

<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Uppsala" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Uppsala"><span class="gui popup"><b>Uppsala</b></span></a></div>
													</h4>

											</li>

									<li class="province-stockholm">
					<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Stockholm" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Stockholm"><span class="gui popup"><b>Stockholm</b></span></a></div>
													</h4>

											</li>

									<li class="province-sodermanland">
					<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Sodermanland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Södermanland"><span class="gui popup"><b>Södermanland</b></span></a></div>
													</h4>

											</li>

									<li class="province-ostergotland">
							<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Ostergotland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Östergötland"><span class="gui popup"><b>Östergötland</b></span></a></div>
													</h4>

											</li>

									<li class="province-vastra-gotaland">
					<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/VastraGotaland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Västra Götaland"><span class="gui popup"><b>Västra Götaland</b></span></a></div>
													</h4>

											</li>

									<li class="province-jonkoping">
										<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Jonkoping" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Jönköping"><span class="gui popup"><b>Jönköping</b></span></a></div>
													</h4>
											</li>

									<li class="province-kalmar">
									<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Kalmar" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Kalmar"><span class="gui popup"><b>Kalmar</b></span></a></div>
													</h4>
											</li>

									<!--<li class="province-gotland">
										<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Gotland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Gotland"><span class="gui popup"><b>Gotland</b></span></a></div>
													</h4>

											</li>-->

									<li class="province-halland">
									<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Halland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Halland"><span class="gui popup"><b>Halland</b></span></a></div>
													</h4>

											</li>

									<li class="province-kronoberg">
									<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Kronoberg" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Kronoberg"><span class="gui popup"><b>Kronoberg</b></span></a></div>
													</h4>

											</li>

									<li class="province-blekinge">
										<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Blekinge" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Blekinge"><span class="gui popup"><b>Blekinge</b></span></a></div>
													</h4>

											</li>

									<li class="province-skane">

<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Skane" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Skåne"><span class="gui popup"><b>Skåne</b></span></a></div>
													</h4>

											</li>

							<li class="province-gotland">

<h4>
							<div onclick="javascript:window.location.href='/#/'"><a  href="?home/stateweather/Gotlands" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Gotlands"><span class="gui popup"><b>Gotlands</b></span></a></div>
													</h4>

											</li>

									<!--<li class="province-aland">
						<h4>
							<div onclick="javascript:window.location.href='/#/'"><a targt="_blank" href="?home/stateweather/Aland" data-tracker="enabled" data-tracker-ga-category="Site navigation" data-tracker-ga-action="Country map" data-tracker-ga-label="Åland"><span class="gui popup"><b>Åland</b></span></a></div>
													</h4>

											</li>-->

								</ul>

		</div>

		</div>

	<div class="row" style="margin-top: 10px;margin-bottom: 15px; background-color: #fff;" >
	   <div class="col-md-10">
	        <a ><span class="gui popup">
	            <h4><b>Populära platser</b></h4>
	            </span>
	            </a>

	    <ul class="list" style="margin-top: 10px;">

  <?php
for ($j=0; $j <9 ; $j++) {
         $mycitywea=$citywea[$j];
	$extensionwea="json";
$cityswe = "$mycitywea.$extensionwea";
//$json_string1 = file_get_contents("https://api.wunderground.com/api/99483c3334b2220c/forecast/q/Sweden/".$citys);
  //$parsed_json1 = json_decode($json_string1);

 /* $ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, "https://api.wunderground.com/api/41fa9d4659883149/forecast/q/Sweden/".$cityswe);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_HEADER, FALSE);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
  "Accept: application/json"
));
$response1 = curl_exec($ch1);
curl_close($ch1);
$json1 = json_decode($response1, true);

 $error = $json1['response']['error'];
if($error != ""){
     $ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, "https://api.wunderground.com/api/6bcd3b41522132d7/forecast/q/Sweden/".$cityswe);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_HEADER, FALSE);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array(
  "Accept: application/json"
));
$response1 = curl_exec($ch1);
curl_close($ch1);
$json1 = json_decode($response1, true);
  }


$myjson=$json1['forecast']['simpleforecast']['forecastday'];
if($error=="" && $json1 !=""){
?>


<li id="place-102666199" class="item">
    <a href="/se/uppsala-l%C3%A4n/v%C3%A4der-uppsala/" class="link">
      <?php echo $mycitywea ;?>
    </a>

      <span class="weather">
                <span class="temp">
                  <?php echo $myjson[0]['high']['celsius']. '°' ?>
                   <img style="width: 25px;" src="<?php echo $myjson[0]['icon_url']; ?>">
                </span>
                <svg class="icon icon-d300-dims" aria-label="Prognos: Molnigt">
                  <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/assets/img/sprite.svg#d300"></use>
                </svg>

              </span>

  </li>


<?php }

else
{*/
     $wdb =  $this->db->get_where('weatherforcast' , array('city' =>$mycitywea, 'nextdate !=' => ''))->result_array();
//echo "<pre>";
//print_r($wdb);
?>

<li id="place-102666199" class="item">
    <a href="/index.php?Home/cityweather/<?php echo $mycitywea;?>" class="link">
      <?php if($mycitywea == 'Ostersund'){echo 'Östersund';}
	elseif($mycitywea == 'Norrkoping'){echo 'Norrköping';}
	elseif($mycitywea == 'Linkoping'){echo 'Linköping';}
	elseif($mycitywea == 'Solvesborg'){echo 'Sölvesborg';}
	elseif($mycitywea == 'Gavle'){echo 'Gävle';}
	elseif($mycitywea == 'Umea'){echo 'Umeå';}
	elseif($mycitywea == 'Lulea'){echo 'Luleå';}
	else{echo $mycitywea ;}?>
    </a>

      <span class="weather">
                <span class="temp">
                  <?php echo $wdb[0]['nexttem']. '°' ?>
                   <img style="width: 25px;" src="<?php echo $wdb[0]['nexticonurl']; ?>">
                </span>
                <svg class="icon icon-d300-dims" aria-label="Prognos: Molnigt">
                  <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/assets/img/sprite.svg#d300"></use>
                </svg>

              </span>

  </li>
<?php //}

}?>


</ul>
	  </div>
	</div>



  </div>






    </div>




</div>


</body>
</html>
