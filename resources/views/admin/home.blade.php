@extends('admin.layout.header')

@section('content')


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/icomoon.css">

<style type="text/css">
    body {
      background-color: #252830;
      color: white;
    }
    .container-fluid {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateY(-50%) translateX(-50%);
      width: 100%;
    }
    @media (max-width: 768px) {
      .container-fluid {
        margin-bottom: 15px;
      }
    }
    .chart {
      text-align: left;
    }
    @media (max-width: 768px) {
      .chart + .chart {
        margin-top: 15px;
      }
    }
    .chart-inner {
      background-color: rgba(255, 255, 255, 0.5);
    }
    .header {
      box-sizing: border-box;
      padding: 30px 15px;
      position: relative;
      text-shadow: 1px 1px 2px black;
    }
    .tagline {
      opacity: 0.75;
      text-transform: uppercase;
    }
    .count {
      display: inline-block;
      font-size: 32px;
      font-weight: 300;
      vertical-align: middle;
    }
    .velocity {
      display: inline-block;
      margin-right: 5px;
      vertical-align: middle;
    }
    .velocity i {
      font-size: 20px;
    }
</style>




<div class="container-fluid">
  <div class="chart col-md-4 col-sm-4 col-xs-12">
    <div class="chart-inner stat-1">
      <div class="header">
        <div class="tagline">
          <div class="velocity"><i class="icon icon-arrow-up-right2"></i></div>page views
        </div>
        <div class="count">5,923</div>
      </div>
      <canvas id="lineChart_1" height="100"></canvas>
    </div>
  </div>
  <div class="chart col-md-4 col-sm-4 hidden-xs">
    <div class="chart-inner stat-2">
      <div class="header">
        <div class="tagline">
          <div class="velocity"><i class="icon icon-arrow-up-right2"></i></div>unique visitors
        </div>
        <div class="count">1,277</div>
      </div>
      <canvas id="lineChart_2" height="100"></canvas>
    </div>
  </div>
  <div class="chart col-md-4 col-sm-4 hidden-xs">
    <div class="chart-inner stat-3">
      <div class="header">
        <div class="tagline">
          <div class="velocity"><i class="icon icon-arrow-down-right2"></i></div>active users
        </div>
        <div class="count">814</div>
      </div>
      <canvas id="lineChart_3" height="100"></canvas>
    </div>
  </div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
<script type="text/javascript">
  
  class Charts {
  chartOptions;
  constructor() {
    this.chartOptions = {
      scales: {
        xAxes: [{
          display: false
        }],
        yAxes: [{
          display: false
        }]
      },
      tooltips: {
        enabled: false
      },
      legend: {
        display: false
      }
    };
    this.initLineCurved();
  }
  
  initLineCurved(): void {
    var ctx_1 = $("#lineChart_1"),
       ctx_2 = $("#lineChart_2"),
       ctx_3 = $("#lineChart_3"),
       chartData_1 = {
        type: 'line',
        data: {
          labels: ["A", "B", "C", "D", "E", "F"],
          datasets: [
            {
              lineTension: 0,
              borderColor: this.convertHex("#FC5185", 100),
              backgroundColor: this.convertHex("#FC5185", 100),
              pointBorderWidth: 0,
              pointRadius: 0,
              data: [35, 59, 78, 60, 71, 65]
            },
            {
              lineTension: 0,
              borderColor: this.convertHex("#364F6B", 100),
              backgroundColor: this.convertHex("#364F6B", 100),
              pointBorderWidth: 0,
              pointRadius: 0,
              data: [55, 79, 88, 63, 89, 75]
            }
          ]
        },
        options: this.chartOptions
      },
       chartData_2 = {
        type: 'line',
        data: {
          labels: ["A", "B", "C", "D", "E", "F"],
          datasets: [
            {
              lineTension: 0,
              borderColor: this.convertHex("#EDF68D", 100),
              backgroundColor: this.convertHex("#EDF68D", 100),
              pointBorderWidth: 0,
              pointRadius: 0,
              data: [48, 89, 78, 41, 61, 95]
            },
            {
              lineTension: 0,
              borderColor: this.convertHex("#377FD9", 100),
              backgroundColor: this.convertHex("#377FD9", 100),
              pointBorderWidth: 0,
              pointRadius: 0,
              data: [65, 118, 90, 83, 89, 75]
            }
          ]
        },
        options: this.chartOptions
      },
       chartData_3 = {
        type: 'line',
        data: {
          labels: ["A", "B", "C", "D", "E", "F"],
          datasets: [
            {
              lineTension: 0,
              borderColor: this.convertHex("#70D4B4", 100),
              backgroundColor: this.convertHex("#70D4B4", 100),
              pointBorderWidth: 0,
              pointRadius: 0,
              data: [55, 64, 88, 101, 81, 95]
            },
            {
              lineTension: 0,
              borderColor: this.convertHex("#B51A62", 100),
              backgroundColor: this.convertHex("#B51A62", 100),
              pointBorderWidth: 0,
              pointRadius: 0,
              data: [95, 81, 109, 112, 104, 115]
            }
          ]
        },
        options: this.chartOptions
      },
       
       myLineChart_1 = new Chart(ctx_1, chartData_1),
       myLineChart_2 = new Chart(ctx_2, chartData_2),
       myLineChart_3 = new Chart(ctx_3, chartData_3);
  }
  convertHex(hex, opacity) {
    hex = hex.replace('#','');
    var r = parseInt(hex.substring(0,2), 16);
    var g = parseInt(hex.substring(2,4), 16);
    var b = parseInt(hex.substring(4,6), 16);
    
    var result = 'rgba('+r+','+g+','+b+','+opacity/100+')';
    return result;
  }
}

new Charts();

</script>

@endsection


