AmCharts.makeChart("chartdiv1",
		{
		"type": "pie",
		"angle": 12,
		"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
		"depth3D": 15,
		"innerRadius": "40%",
		"titleField": "category",
		"valueField": "column-1",
		"theme": "light",
		"allLabels": [],
		"balloon": {},
		"legend": {
			"enabled": false,
			"align": "center",
			"markerType": "circle"
		},
		"titles": [],
		"dataProvider": [
			{
				"category": "sector 1",
				"column-1": 8
			},
			{
				"category": "sector 2",
				"column-1": 6
			},
			{
				"category": "sector 3",
				"column-1": 2
			}
		]
	}
);