<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="card m-2 col-0">
  <div class="container card-body">
  <form  method="POST" action="BMIPasien.php">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Pasien :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user-o"></i>
          </div>
        </div> 
        <input id="name" name="name" placeholder="Masukkan Nama Anda" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="lokasi" class="col-4 col-form-label">Tempat Pemeriksaan :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-location-arrow"></i>
          </div>
        </div> 
        <input id="location" name="location" placeholder="Masukkan Tempat Lahir Anda" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-4 col-form-label">Tanggal Periksa :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tanggalperiksa" name="tanggalperiksa" placeholder="Masukkan Tanggal Periksa Anda" type="date" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin:</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
        <label for="gender_0" class="custom-control-label">Pria</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
        <label for="gender_1" class="custom-control-label">Wanita</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="weight" class="col-4 col-form-label">Berat Badan :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-balance-scale"></i>
          </div>
        </div> 
        <input id="weight" name="weight" placeholder="Masukkan Berat Badan Anda" type="number" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="height" class="col-4 col-form-label">Tinggi Badan :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-bar-chart"></i>
          </div>
        </div> 
        <input id="height" name="height" placeholder="Masukkan Tinggi Badan Anda" type="number" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email :</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope-o"></i>
          </div>
        </div> 
        <input id="email" name="email" placeholder="Masukkan Email Anda" type="email" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>
</div>
</body>
</html>