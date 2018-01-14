//chartjs sales
Chart.defaults.global.legend.display = false;
Chart.defaults.global.defaultFontFamily = "'Poppins', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif";
Chart.defaults.global.defaultFontSize = 13;
Chart.defaults.global.barThickness = .2;
// Chart.defaults.global.title.display = true;
var ctx = document.getElementById("thisYearSales").getContext('2d');
var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'bar',

  // The data for our dataset
  data: {
      labels: ["January", "February", "March", "April", "May", "June", "July", 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
      datasets: [{
          label: "Ventes Cette Annee",
          backgroundColor: 'rgba(127, 42, 255, .5)',
          borderColor: 'rgb(127, 42, 255)',
          data: [0, 10000, 50000, 30000, 20, 30, 45],
          borderWidth: 2,
          pointBackgroundColor: 'rgb(127, 42, 255)',
          pointBorderColor: '#fff',
          pointBorderWidth: 2,
          pointRadius: 5
      }]
  },

  // Configuration options go here
  options: {
    barPercentage: 0.2,
    categoryPercentage: 0.2,
    barThickness: 20,
    maxBarThickness: 20,
    scales: {
        xAxes: [{
            gridLines: {
                display: false,
                drawBorder: false
            }
        }],
        yAxes: [{
            gridLines: {
                display: false,
                drawBorder: false
            },
            display: false
        }]
      }
    }
});
