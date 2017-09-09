

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
  $("#header-slide").owlCarousel({ 
      loop: true,
      items : 5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      smartSpeed: 900,
      dots: false,
      autoplay:true,
      autoplayTimeout:5000,
      responsive:{
        0:{
            items:3,
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
        }
    }
 
  });
</script>

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
                        $('#'+data.label).modal('show');
                    },
                }
            }).render();
        });
    </script>
