@extends('layouts/main')
@section('content')
<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>VISUALISASI</h1>

<div class="col-md-8">
<div id="chart"></div> 
</div>
<div class="col-md-4">
<div id="mapid"></div> 

</div>
</div>
</div>
</div>

</div>
</div>
@endsection
@section('visual')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'VISUALISASI PMKS & PSKS'
    },
    subtitle: {
        text: 'Kota Tasikmalaya 2020'
    },
    xAxis: {
        categories: {!!json_encode($categories)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'value'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'PMKS',
        color: 'red',
        data: {!!json_encode($data)!!}},
        {
        name: 'PSKS',
        color: 'blue',
        data: {!!json_encode($data1)!!}}]
});
</script>
@endsection