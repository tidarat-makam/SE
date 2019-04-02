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

</head>

<body> 
  
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
          </div>

           <div class="form-group row">
             <label for="country_code" class="col-sm-3 col-form-label">ประเภท</label>
                    <div class="col-sm-7">
                        <select class="form-control chosen-select" name="transaction_type">
                          <option value="">-- เลือก --</option>
                          <option value=""> นำเข้า       </option>
                          <option value=""> ส่งออก      </option>
                          <option value=""> ดุลการค้า    </option>
                          <option value=""> มูลค่ารวม    </option>
                        </select>
                    </div>
          </div>

           <div class="form-group row">
             <label for="yearF" class="col-sm-3 col-form-label">ปีต้น</label>
                    <div class="col-sm-5">
                        <input type="number" name="yearF" class="form-control" />
                    </div>
          </div>

          <div class="form-group row">
             <label for="yearF" class="col-sm-3 col-form-label">ปีหลัง</label>
                    <div class="col-sm-5">
                        <input type="number" name="yearL" class="form-control" />
                    </div>
          </div>




          <button type="button" class="btn btn-primary" style="width: 100px; height: 35px;">ค้นหา</button>

        </div>
        </form>

                  
      <div style="width: 100%;height: 107px;background-color:#113f67">
        <div style="position:relative; top:5px; left: 20px; width: 100px;height: 100px; ">
           
     </div>

        
</body>
</html>
