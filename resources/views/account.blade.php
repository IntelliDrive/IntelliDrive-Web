@extends('layouts.app')

@section('content')
<?php
$types = array(0,0,0);
foreach ($trips as $trip) {
    $arr = (array) $trip;
    if ($arr['type'] == 'PERSONAL') {
        $types[0] += $arr['miles'];
    } else if ($arr['type'] == 'BUSINESS') {
        $types[1] += $arr['miles'];
    } else {
        $types[2] += $arr['miles'];
    }
}
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type of Travel', 'Miles'],
          ['Personal',     <?php echo $types[0];?>],
          ['Business',      <?php echo $types[1];?>],
          ['Other',  <?php echo $types[2];?>],
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>

<div class="container">

<style>
    table {
        margin: 0 auto 0 auto;
    }
    table tr td {
        padding: 1em 1em 1em 1em;
    }
</style>

<center><div id="piechart" style="width: 900px; height: 500px;"></div></center>

<table>
<tr><td>Trip Name</td><td>Type</td><td>Miles</td><td>Start Time</td><td>End Time</td><tr>
<?php
    foreach ($trips as $trip) { 
        $arr = (array) $trip;
        print "<tr><td>".$arr['trip_name']."</td><td>".$arr['type']."</td><td>".$arr['miles']."</td><td>".$arr['start']."</td><td>".$arr['end']."</td></tr>";
    }
?>
</table>

</div>
@endsection
