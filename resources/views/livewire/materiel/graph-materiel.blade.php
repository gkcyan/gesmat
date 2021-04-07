
<script>
window.onload = function() {

var dataPoints = [];

var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
    animationEnabled: true,
	theme: "light2",
	title: {
		text: "Repartition du materiel par marque"
	},
	axisY: {
		title: "Units",
		titleFontSize: 24,
		includeZero: true
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{date}</b>: {y}%",
		showInLegend: "true",
		legendText: "{date}",
		indexLabelFontSize: 16,
		indexLabel: "{date} - {y}%",
		dataPoints: dataPoints
	}]
});

function addData(data) {
	for (var i = 0; i < data.length; i++) {
		dataPoints.push({
			x: new Date(data[i].date),
			y: data[i].units
		});
	}
	chart.render();

}

$.getJSON("https://canvasjs.com/data/gallery/javascript/daily-sales-data.json", addData);

}
</script>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
