AmCharts.makeChart("chartdiv",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"fontSize": 12,
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonText": "[[title]] of [[category]]:[[value]]",
							"fillAlphas": 1,
							"id": "AmGraph-1",
							"title": "graph 1",
							"type": "column",
							"valueField": "column-1"
						},
						{
							"balloonText": "[[title]] of [[category]]:[[value]]",
							"fillAlphas": 1,
							"id": "AmGraph-2",
							"title": "graph 2",
							"type": "column",
							"valueField": "column-2"
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"title": "Axis title"
						}
					],
					"allLabels": [],
					"balloon": {},
					"legend": {
						"enabled": false,
						"useGraphSettings": true
					},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "Chart Title"
						}
					],
					"dataProvider": [
						{
							"category": "var x",
							"column-1": 8,
							"column-2": 5
						},
						{
							"category": "var y",
							"column-1": 6,
							"column-2": 7
						},
						{
							"category": "var z",
							"column-1": 2,
							"column-2": 3
						}
					]
				}
			);