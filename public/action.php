<?php


$plus_plus = $_POST['101'] + $_POST['102']+ $_POST['107']+ $_POST['108']+ $_POST['116']+ $_POST['117']+ $_POST['121']+ $_POST['127'];

$plus_moins = $_POST['103'] + $_POST['105']+ $_POST['109']+ $_POST['114']+ $_POST['115']+ $_POST['118']+ $_POST['122']+ $_POST['129'];

$moins_plus = $_POST['104'] + $_POST['110']+ $_POST['113']+ $_POST['119']+ $_POST['120']+ $_POST['124']+ $_POST['125']+ $_POST['131'];

$moins_moins = $_POST['106'] + $_POST['111']+ $_POST['112']+ $_POST['123']+ $_POST['126']+ $_POST['128']+ $_POST['130']+ $_POST['132'];




$dataPoints = array(
	array("label"=>"Plus Plus", "y"=>$plus_plus),
	array("label"=>"Plus Moins", "y"=>$plus_moins),
	array("label"=>"Moins Plus", "y"=>$moins_plus),
	array("label"=>"Moins Moins", "y"=>$moins_moins)
)

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {


var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Résultats : Position de Vie"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>