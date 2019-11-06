window.onload = function () {
  var barCanvas = $("#barCanvas");
  var data = {
    labels : ["01","02","03","04","05","06","07","08","09","10","11","12",
              "13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],
    datasets : [
            {
                label : "Collection",
                data : [300, 200, 1000, 200, 3000, 100, 1200, 600, 300,0,300, 200, 1000, 200, 3000, 100, 1200, 600, 300,0,
                300, 200, 1000, 200, 3000, 100, 1200, 600, 300,0,199],
                backgroundColor : [
                        "#108013","#108013","#108013",
                        "#108013","#108013","#108013",
                        "#108013","#108013","#108013",
                        "#108013","#108013","#108013","#108013",
                        "#108013","#108013","#108013",
                        "#108013","#108013","#108013",
                        "#108013","#108013","#108013","#108013",
                        "#108013","#108013","#108013",
                        "#108013","#108013","#108013",
                        "#108013","#108013"
                ]
            },
            {
                label : "Expenses",
                data : [500, 2200, 100, 100, 300, 1000, 200, 60, 200,100,500, 2200, 100, 100, 300, 1000, 200, 60, 200,100,
                500, 2200, 100, 100, 300, 1000, 200, 60, 200,100,120],
                backgroundColor : [
                        "#f12222","#f12222","#f12222",
                        "#f12222","#f12222","#f12222",
                        "#f12222","#f12222","#f12222",
                        "#f12222","#f12222","#f12222","#f12222",
                        "#f12222","#f12222","#f12222",
                        "#f12222","#f12222","#f12222",
                        "#f12222","#f12222","#f12222","#f12222",
                        "#f12222","#f12222","#f12222",
                        "#f12222","#f12222","#f12222",
                        "#f12222","#f12222"
                ]
            }
    ]
  };
  var options = {
    title : {
      display : true,
      position : "top",
      text: " Fee Collection & Expenses For October - 2019",
      fontSize : 18,
      fontColor : "#111"
    },
    legend : {
      display : true,
      position : "bottom"
    },
    scales : {
      yAxes : [{
        ticks: {
          min : 0
        },
        gridLines : {
          display : false
        }
      }],
      xAxes : [{
        gridLines : {
          display : false
        }
      }]

    }
  }
  var barchart = new Chart( barCanvas, {
          type: "bar",
          data: data,
          options : options
  });

barchart.render();
var lineCanvas = $("#LineCanvas");
var lineChartData = {

    labels : [ "Jan" ,"Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"],
    datasets : [
            {
                label : "Collection",
                data : [300, 200, 1000, 700, 2000, 100, 1200, 600, 300,0,300, 200],
                backgroundColor : [ "#41CEB1"],
                pointBackgroundColor : "black"  

            }]
};
var lineChartOptions = {
    title : {
      display : true,
      position : "top",
      text: " Fee Collection & Expenses For year - 2019",
      fontSize : 18,
      fontColor : "#111"
    },
    legend : {
      display : true,
      position : "bottom"
    },
    scales : {
      yAxes : [{
        ticks: {
          min : 0
        },
        gridLines : {
          display : false
        }
      }],
      xAxes : [{
        gridLines : {
          display : false
        }
      }]

    }};
var lineChart = new Chart(lineCanvas, {
    type : "line",
    data : lineChartData,
    options : lineChartOptions
});
lineChart.render();
}