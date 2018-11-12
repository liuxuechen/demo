<!DOCTYPE html>
 <html>
      <head>
           <title>Webslesson Tutorial | Show JSON Data in Jquery Datatables</title>
           <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.js"></script>
             <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.js"></script>
             <link href="//cdnjs.cloudflare.com/ajax/libs/c3/0.1.29/c3.css" rel="stylesheet" type="text/css">

      <div id="chart"></div>
      <h1 id="chart">This text will not be visible</h1>
      var chart = c3.generate({
    data: {
        columns: [
            ['Lulu', 50],
            ['Olaf', 50],
        ],
        type : 'donut'
    },
    donut: {
        title: "Dogs love:",
    }
});
data: {
    columns: [
        ['Lulu', 50,4,3,2],
        ['Olaf', 50,6,8,1]
    ]
  }
  var chart = c3.generate({
    data: {
        columns: [
            ['data1', 30, -200, -100, 400, 150, 250],
            ['data2', -50, 150, -150, 150, -50, -150],
            ['data3', -100, 100, -40, 100, -150, -50]
        ],
        type: 'bar',
        labels: true
    }
});
var chart = c3.generate({
    data: {
        columns: [
            ['sample', 30, 200, 100, 400, 150, 250],
            ['sample2', 130, 300, 200, 500, 250, 350]
        ],

    },
    axis: {
        x: {
            label: 'X Label'
        },
        y: {
            label: 'Y Label'
        }
    }
});
var chart = c3.generate({
    bindto: '#chart4',
    data: {
        columns: [
            ['data1', 300, 350, 300, 0, 0, 0],
            ['data2', 130, 100, 140, 200, 150, 50]
        ],
        types: {
            data1: 'area',
            data2: 'area-spline'
        },
         colors: {
           data1: 'hotpink',
           data2: 'pink'
         }
    }
});
<div id="offer-need" data-source="<%= @statistics.data_offer_need %>"></div>
var dataSource = $("#chart-offer-need").attr("data-source");

 var data = JSON.parse(dataSource);

 var chart = c3.generate({
   bindto: '#chart-offer-need',
   data: { columns: data }
  });
      </head>
      <body>
