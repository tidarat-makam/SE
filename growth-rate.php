<?

$data[] = $_GET['name'];

?>
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
 <script src="https://dataapi.moc.go.th/border-statistic" ></script>
</head>

<body>
      <script type="text/javascript">
            $(document).ready(function(){

              $("#btf").click(function(){
                document.getElementById("mm").innerHTML = "" ;
                document.getElementById("fy").innerHTML = "" ;
                document.getElementById("ly").innerHTML = "" ;
                // var data;
                country_code= $("select[name=country_code]").val(); //$("select[name=country_code]").val();
                fy= $("input[name=yearF]").val(); //$("select[name=transaction_type]").val();
                ly= $("input[name=yearL]").val();
                tstype = $("select[name=transaction_type]").val();
                lm="100";
                $.get("https://dataapi.moc.go.th/border-statistic?country_code="+ country_code +"&year="+ fy +"&limit="+ lm +"", function(data1){
                  // for (x in data1[0]) {
                  //   document.getElementById("demo").innerHTML += x + "<br>"; 
                  // }
                  for(i=tstype;i<96;i++){
                  // for (x in data1[i]) {
                  //   // document.getElementById("yoy").innerHTML += data[i][x] + "<br>";
                  // }
                  if(i%8==tstype){
                    document.getElementById("mm").innerHTML += data1[i].month + "<br>";
                    document.getElementById("fy").innerHTML += data1[i].value_baht + "<br>";
                    // document.getElementById("mm").innerHTML += data[i].month + "<br>";
                  }
                }
                  // window.location.href = "growth_rate.php?name=" + data; 
                  // Qjson = file_get_contents(data);
                  // $Qdata = json_decode(data);
                  // $QisData=sizeof($Qdata);
                  // alert(obj);

                });

                $.get("https://dataapi.moc.go.th/border-statistic?country_code="+ country_code +"&year="+ ly +"&limit="+ lm +"", function(data2){
                  // for (x in data2[0]) {
                  //   // document.getElementById("demo").innerHTML += x + "<br>"; 
                  // }
                  for(i=tstype;i<96;i++){
                  // for (x in data2[i]) {
                  //   // document.getElementById("yoy").innerHTML += data[i][x] + "<br>";
                  // }
                  if(i%8==tstype){
                    // document.getElementById("mm").innerHTML += data1[i].month + "<br>";
                    document.getElementById("ly").innerHTML += data2[i].value_baht + "<br>";
                    // document.getElementById("mm").innerHTML += data[i].month + "<br>";
                  }
                }
                  // window.location.href = "growth_rate.php?name=" + data; 
                  // Qjson = file_get_contents(data);
                  // $Qdata = json_decode(data);
                  // $QisData=sizeof($Qdata);
                  // alert(obj);

                });

              });
            });
      </script>


  
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
        <div style=" position:relative;left: 15%;" class="row">

          <div class="form-group row">
             <label for="country_code" class="col-sm-3 col-form-label">ประเทศ</label>
                    <div class="col-sm-6">
                        <select class="form-control chosen-select" name="country_code">
                          <option value="">-- เลือก --</option>
                          <option value="KH"> กัมพูชา - CAMBODIA (KH)</option>
                          <option value="LA"> ลาว - LAOS (LA)</option>
                          <option value="MM"> เมียนมา - MYANMAR (MM)</option>
                          <option value="VN"> เวียดนาม - VIETNAM (VN)</option>
                        </select>
                    </div>
                    <!-- <script>
                        $("select[name=country_code]").val().trigger('change');
                    </script> -->
          </div>

           <div class="form-group row">
             <label for="country_code" class="col-sm-3 col-form-label">ประเภท</label>
                    <div class="col-sm-7">
                        <select class="form-control chosen-select" name="transaction_type">
                          <option value="">-- เลือก --</option>
                          <option value="6"> นำเข้า       </option>
                          <option value="5"> ส่งออก      </option>
                          <option value="7"> ดุลการค้า    </option>
                          <option value="4"> มูลค่ารวม    </option>
                        </select>
                        <!-- <script>
                        $("select[name=transaction_type]").val().trigger('change');
                    </script> -->
                    </div>
          </div>

           <div class="form-group row">
             <label for="yearF" class="col-sm-3 col-form-label">ปีต้น</label>
                    <div class="col-sm-5">
                        <input type="number" name="yearF" class="form-control" />
                        <!-- <script>
                        $("input[name=yearF]").val().trigger('change');
                    </script> -->
                    </div>
          </div>

          <div class="form-group row">
             <label for="yearF" class="col-sm-3 col-form-label">ปีหลัง</label>
                    <div class="col-sm-5">
                        <input type="number" name="yearL" class="form-control" />
                    </div>
          </div>




          <button type="button" id="btf" class="btn btn-primary" style="width: 100px; height: 35px;">ค้นหา</button>

        </div>
        </form>
        
        

        <table border=1>
          <tr>
            <td>เดือน</td>
            <td>ปีต้น</td>
            <td>ปีหลัง</td>
            <td>ดุล</td>
          </tr>
          <tr>
            <td id="mm"></td>
            <td id="fy"></td>
            <td id="ly"></td>
            <td id="yoy"></td>
          </tr>
        </table>

<p id="demo">        
          </p>


      <div style="width: 100%;height: 107px;background-color:#113f67">
        <div style="position:relative; top:5px; left: 20px; width: 100px;height: 100px; ">
           
     </div>

        
</body>
</html>
