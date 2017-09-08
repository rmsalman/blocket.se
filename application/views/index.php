<?php

// Turn off all error reporting
error_reporting(0);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?= PLUGINS; ?>/fusioncharts/fusioncharts.js"></script>
    <script type="text/javascript" src="<?= PLUGINS; ?>/fusioncharts/fusioncharts.theme.fint.js"></script>
	<script type="text/javascript" src="<?= PLUGINS; ?>/fusioncharts/fusioncharts.maps.js"></script>
	<script type="text/javascript" src="<?= PLUGINS; ?>/fusioncharts/fusioncharts.sweden.js"></script>


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
                 "data": [
        {
            "data": [
                {
                    "id": "10",
                    "value": ""
                },
                {
                    "id": "12",
                    "value": ""
                },
                {
                    "id": "14",
                    "value": ""
                },
                {
                    "id": "15",
                    "value": ""
                },
                {
                    "id": "16",
                    "value": ""
                },
                {
                    "id": "18",
                    "value": ""
                },
                {
                    "id": "21",
                    "value": ""
                },
                {
                    "id": "22",
                    "value": ""
                },
                {
                    "id": "23",
                    "value": ""
                },
                {
                    "id": "24",
                    "value": ""
                },
                {
                    "id": "25",
                    "value": ""
                },
                {
                    "id": "26",
                    "value": ""
                },
                {
                    "id": "27",
                    "value": ""
                },
                {
                    "id": "28",
                    "value": ""
                },
                {
                    "id": "02",
                    "value": ""
                },
                {
                    "id": "07",
                    "value": ""
                },
                {
                    "id": "03",
                    "value": ""
                },
                {
                    "id": "06",
                    "value": ""
                },
                {
                    "id": "09",
                    "value": ""
                },
                {
                    "id": "08",
                    "value": ""
                },
                {
                    "id": "05",
                    "value": ""
                }
            ]
        }
    ]
            },
            "events": {
                "entityClick": function(evt, data) {
                    alert("You have clicked on " + data.label + ".");
                },
            }
        }).render();
    });
    </script>

<div class="col-sm-4">

	<div class="map sweden">

		<div>
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




  </div>






    </div>




</div>


</body>
</html>
