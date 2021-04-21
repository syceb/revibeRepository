<?php include("includes/iheader.php");?>



<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<div id="chartdiv"></div>

<table>

<tr>
<td>
Stressi-indexi
</td>
</tr>

<tr>
<td id="s1">
</td>
</tr>

<tr>
<td id="s2">
</td>
</tr>

<tr>
<td id="s3">
</td>
</tr>

<tr>
<td id="s4">
</td>
</tr>

<tr>
<td id="s5">
</td>
</tr>

<tr>
<td id="s6">
</td>
</tr>

<tr>
<td id="s7">
</td>
</tr>

</table>
<script>
fetch('https://users.metropolia.fi/~miikkast/Projekti/api/api.php')
  .then((response) => {
	return response.json();
  })
  .then((data) => {   
	console.log(data);
	 
    am4core.useTheme(am4themes_animated);
// Themes end

// Create chart
var chart = am4core.create("chartdiv", am4charts.XYChart);
chart.paddingRight = 20;

chart.data = data;
chart.dateFormatter.inputDateFormat = "yyyy";

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 1;
valueAxis.max = 5;
valueAxis.tooltip.disabled = true;
valueAxis.maxPrecision = 0;

var series = chart.series.push(new am4charts.StepLineSeries());
series.dataFields.categoryX = "category";
series.dataFields.valueY = "value";
series.tooltipText = "{valueY.value}";
series.strokeWidth = 3;

chart.cursor = new am4charts.XYCursor();
chart.cursor.xAxis = categoryAxis;
chart.cursor.fullWidthLineX = true;
chart.cursor.lineX.strokeWidth = 0;
chart.cursor.lineX.fill = chart.colors.getIndex(2);
chart.cursor.lineX.fillOpacity = 0.1;

chart.scrollbarX = new am4core.Scrollbar();


	  document.getElementById("s1").innerHTML=data[0].value;
    document.getElementById("s2").innerHTML=data[1].value;
    document.getElementById("s3").innerHTML=data[2].value;
    document.getElementById("s4").innerHTML=data[3].value;
    document.getElementById("s5").innerHTML=data[4].value;
    document.getElementById("s6").innerHTML=data[5].value;
    document.getElementById("s7").innerHTML=data[6].value;
  });

</script>










<?php include("includes/ifooter.php");?>