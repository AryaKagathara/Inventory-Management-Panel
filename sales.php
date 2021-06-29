<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sales</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/app.js"></script>
</head>

<body>
  <?php include('navbar/navbar.php') ?>

  <div class="container-fluid p-5 bg-black text-white">
    <div class="container mb-5">
      <div class="row alignm-items-center">
        <div class="col-lg-1 mx-2">
          <img src="assets/images/logo-white.png" alt="logo" width="125px" />
        </div>
        <div class="col-lg-10">
          <h2 class="text-left col-12 mt-3 mx-5 ">Sales</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <h3 class="col-10 fs-5">Overview</h3>
        <hr />
      </div>
      <div class="row text-center flex-wrap justify-content-center">
        <a class="col-lg-2 col-md-5 p-3 m-1 mx-5 shadow border border-success rounded text-decoration-none text-dark zoom" href="#">
          <h4 class="text-wrap fs-5 fw-bold text-success">Delivery</h4>
          <h1 class="fw-bold display-5 text-success">5</h1>
        </a>
        <a class="col-lg-2 col-md-5 p-3 m-1 mx-5 shadow border border-warning rounded text-decoration-none text-dark zoom" href="#">
          <h4 class="text-wrap fs-5 fw-bold text-warning">Orders</h4>
          <h1 class="fw-bold display-5 text-warning">12</h1>
        </a>
        <a class="col-lg-2 col-md-5 p-3 m-1 mx-5 shadow border border-danger rounded text-decoration-none text-dark zoom" href="#">
          <h4 class="text-wrap fs-5 fw-bold text-danger">Stocks</h4>
          <h1 class="fw-bold display-5 text-danger">3</h1>
        </a>
        <a class="col-lg-2 col-md-5 p-3 m-1 mx-5 shadow border border-primary rounded text-decoration-none text-dark zoom" href="sales.html">
          <h4 class="text-wrap fs-5 fw-bold text-primary">Sales</h4>
          <h1 class="fw-bold display-5 text-primary">5</h1>
        </a>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-12">
        <select class="form-select" aria-label="Default select example">
          <option selected>Select Product</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
    </div>
  </div>

  <div class="container">
    <div id="columnchart_values"></div>
  </div>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    // Bar chart
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Month", "Sales", {
          role: "style"
        }],
        ["January", 18, "#198754"],
        ["February", 15, "#198754"],
        ["March", 1, "#dc3545"],
        ["April", 5, "#dc3545"],
        ["May", 10, "#ffc107"],
        ["June", 20, "#198754"],
        ["July", 10, "#ffc107"],
        ["August", 12, "#ffc107"],
        ["September", 10, "#ffc107"],
        ["October", 1, "#dc3545"],
        ["November", 4, "#dc3545"],
        ["December", 6, "#dc3545"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([
        0,
        1,
        {
          calc: "stringify",
          sourceColumn: 1,
          type: "string",
          role: "annotation",
        },
        2,
      ]);

      var options = {
        title: "Overall Sales",
        width: 1300,
        height: 800,
        bar: {
          groupWidth: "95%"
        },
        legend: {
          position: "none"
        },
      };
      var chart = new google.visualization.ColumnChart(
        document.getElementById("columnchart_values")
      );
      chart.draw(view, options);
    }
  </script>

  <!--      
        <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
      integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
      crossorigin="anonymous"
    ></script>   
    <canvas id="myChart" width="50px" class="container"></canvas>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
          ],
          datasets: [
            {
              label: "Total Product",
              data: [12, 15, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
              backgroundColor: [
                "rgba(54, 162, 235, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 99, 132, 0.2)",
                "rgba(255, 99, 132, 0.2)",
              ],
              borderColor: [
                "rgba(54, 162, 235, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 99, 132, 1)",
                "rgba(255, 99, 132, 1)",
                "rgba(255, 99, 132, 1)",
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 99, 132, 1)",
                "rgba(255, 99, 132, 1)",
                "rgba(255, 99, 132, 1)",
                "rgba(255, 99, 132, 1)",
              ],
              borderWidth: 5,
            },
          ],
        },
        options: {
          scales: {
            xAxes: [{
                ticks: {
                  beginAtZero: true,
                  fontSize: 20,
                },
            }],
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                  fontSize: 20,
                },
              },
            ],
          },
        },
      });
    </script> -->
</body>

</html>