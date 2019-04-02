<!doctype html>
<html>
<head>
<!-- 4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- 3.7 -->
  <link rel = 'stylesheet' href="style.css"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--  -->

<meta charset="utf-8">
<title>การวิเคราะห์การเจริฐเติบโตทางเศรษฐกิจ</title>

<style type="text/css">
p{
  font-family: supermarket;
  font-size: 20px;
  
}

</style>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Month');
      data.addColumn('number', 'นำเข้า');
      data.addColumn('number', 'ส่งออก');
      data.addColumn('number', 'มูลค่ารวม');

      data.addRows([
        [1,  53.05, 51.2, 32.0],
        [2,  14.29, 55.2, 25.03],
        [3,  7.70, 59.25, 64.58],
        [4,  6.75, 58.4, 58.56],
        [5,  0.12, 86.1, 83.4],
        [6,   3.34, 74.52, 12],
        [7,   -9.05, 75],
        [8,  15.69, ],
        [9,  16.9, ],5
        [10, 3.07, ],
        [11,  16.35, ],
        [12,  6.30,  ],
      ]);

      var options = {
        chart: {
          title: 'อัตราการเจริญเติบโตด้านการนำเข้า ของสาธารณรัฐประชาธิปไตยประชาชนลาว เปรียบเทียบปี 2017-2018',
          // subtitle: 'in millions of dollars (USD)'
        },
        width: 900,
        height: 600,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>

  <script src="https://dataapi.moc.go.th/border-statistic" ></script>

</head>

<body> 
      
      <script type="text/javascript">
            $(document).ready(function(){

              $("button").click(function(){
                $.get("https://dataapi.moc.go.th/border-statistic?country_code=VN&year=2018&month=1", function(data){
                  alert("Data: " + data[0].year );
                });
              });
            });
      </script>

        <button>click</button>

        <div style="width: 100%;height: 107px;background-color:#113f67">
            <div style="position:relative; top:5px; left: 13%; width: 100px;height: 100px; " class="row">
                    <div><img src="./photo/lilthing.png" style="width: 100px;height: 100px;"/></div>       
            </div>
        </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" margin-left: 15%;margin-right: 15% ">
          <a class="navbar-brand" href="./index.html">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="./Gconomic.php">Economic growth graph</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./growth_rate.php">growth rate</a>
              </li>
              </ul>
          </div>
        </nav>

      <form id="search-form" method="get" action="#">
        <div style="position:relative; top:5px; left: 20%; width: 100%;" class="row">

          <div class="form-group row">
             <label for="country_code" class="col-sm-3 col-form-label">ประเทศ</label>
                    <div class="col-sm-6">
                        <select class="form-control chosen-select" name="country_code">
                          <option value="">-- โปรดเลือก --</option>
                          <option value="KH"> กัมพูชา - CAMBODIA (KH)</option>
                          <option value="LA"> ลาว - LAOS (LA)</option>
                          <option value="MM"> เมียนมา - MYANMAR (MM)</option>
                          <option value="VN"> เวียดนาม - VIETNAM (VN)</option>
                        </select>
                    </div>
          </div>

          <div class="form-group row">
             <label for="year" class="col-sm-3 col-form-label">ปี</label>
                    <div class="col-sm-5">
                        <input type="number" name="year" class="form-control" />
                    </div>
          </div>

          <!--  <div class="form-group row">
              <label for="month" class="col-sm-3 col-form-label">เดือน</label>
                <div class="col-sm-9">
                  <select class="form-control" name="month">
                    <option value="">-- เลือก --</option>
                    <option value="1">มกราคม</option>
                    <option value="2">กุมภาพันธ์</option>
                    <option value="3">มีนาคม</option>
                    <option value="4">เมษายน</option>
                    <option value="5">พฤษภาคม</option>
                    <option value="6">มิถุนายน</option>
                    <option value="7">กรกฎาคม</option>
                    <option value="8">สิงหาคม</option>
                    <option value="9">กันยายน</option>
                    <option value="10">ตุลาคม</option>
                    <option value="11">พฤศจิกายน</option>
                    <option value="12">ธันวาคม</option>
                  </select>
                </div>
           </div> -->


          <button type="button" class="btn btn-primary" style="width: 100px; height: 35px;margin-left: 5%">ค้นหา</button>

        </div>
        </form>

          
        <div id="line_top_x" style="width: 90%;height: 90%; margin-left: 20%;margin-right:20%;margin-top:5%; margin-bottom:10%; "></div>


      <div style="width: 100%;height: 107px;background-color:#113f67">
        <div style="position:relative; top:5px; left: 20px; width: 100px;height: 100px; ">
           
     </div>
     <div>
       
     </div>
        
</body>
</html>
