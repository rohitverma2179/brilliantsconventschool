    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa fa-dashboard" aria-hidden="true"></i> Dashboard</h1>
          <!-- <p>A free and open source Bootstrap 4 admin template</p> -->
        </div>
        <!--<ul class="app-breadcrumb breadcrumb">-->
        <!--  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>-->
        <!--  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>-->
        <!--</ul>-->
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>TOTAL CUTOMERS</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="widget-small info"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>TOTAL POLICIES</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="widget-small warning"><i class="icon fa fa-handshake-o fa-3x"></i>
            <div class="info">
              <h4>TOTAL SALES</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Sponser(Month)</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="sponserMonthly"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Policy(Month)</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="policyMonthly"></canvas>
            </div>
          </div>
        </div>
      </div>

    </main>
    
    <!-- Essential javascripts for application to work-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    
    <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		}]
      };
      
      var pdata = [
      	{
      		value: 300,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Edge Policy"
      	},
      	{
      		value: 50,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Inhance Policy"
      	},
      	{
      		value: 100,
      		color: "#FDB45C",
      		highlight: "#FFC870",
      		label: "Basic Policy"
      	}
      ]
      
      var ctxl = $("#sponserMonthly").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#policyMonthly").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
      
    </script>

  </body>
</html>