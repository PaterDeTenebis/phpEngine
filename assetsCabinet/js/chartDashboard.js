var ctx = document.getElementById('btcChart').getContext('2d');
var gradient = ctx.createLinearGradient(0, 0, 0, 900);
    gradient.addColorStop(0, 'rgba(44,39,25,1)');   
    gradient.addColorStop(1, 'rgba(44,39,25,0)');
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["ЯНВ", "МАР", "МАЙ", "ИЮЛ"],
        datasets: [{
            backgroundColor: gradient,
            borderColor: 'rgb(227,203,131)',
            borderWidth: 5,
            lineTension: 0.3,
            data: [10,15,12,18],
            pointRadius: 0
        }]
    },
    options: {
        legend:{
            display: false,
            labels: {
                fontColor: 'rgb(171,176,193)',
            }
        },
        layout: {
            padding: {
                top: 10,
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                  display: false
                }
            }],
            xAxes: [{
                ticks: {
                  display: false
                }
            }]
        },
        tooltips: {
            mode: 'interpolate',
            intersect: false
          },
          plugins: {
            crosshair: {
              line: {
                color: 'rgb(0,216,189)',  
                width: 1        
              },
            }
        }    
    }
    
});

