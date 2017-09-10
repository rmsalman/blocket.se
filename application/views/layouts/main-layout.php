<?php
	$this->load->view('includes/main-header-files');
?>
</head>
<body>
<?php $this->load->view('includes/navigation'); ?>
<?php $this->load->view('includes/main-header'); ?>

	<?php $this->load->view('pages/'.$page); ?>

<?php $this->load->view('includes/main-footer'); ?>


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

</body>
</html>