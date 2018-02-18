<!DOCTYPE html>
<html>
<head>
  <title>Vaisiai</title>
  <style type="text/css">
    fieldset {
  overflow: hidden
}

.some-class {
  float: left;
  clear: none;
}

label {
  float: left;
  clear: none;
  display: block;
  padding: 2px 1em 0 0;
}

input[type=radio],
input.radio {
  float: left;
  clear: none;
  margin: 2px 0 0 2px;
}

  </style>
</head>
<body>
<?php require_once $dir . '/models/db.php' ?>
<body class="text-center">
	<div class="form-group">
		<div class="container">
    	<form class="form-signin" action="insert.php" method='post'>
     	 <h1 class="h3 mb-3 font-weight-normal">Naujas užsakymas</h1>
     	 <div class="form-group">
		<input value="<?php echo "<input type='text' value='".date('m/d/y')."'";?>" type="date" name="time" placeholder="Data" >
		</div>
		<div class="form-group">
			<input value="Vardas" type="string" name="date" placeholder="Iveskite datą">
		</div>
		<div class="form-group">
			<input value="Pavardė" type="string" name="number" placeholder="Iveskite numerį">
		</div>
<fieldset>
    <div class="some-class">
    <div class="form-group">
      <label for="Mazas">
    <input type="radio" id="Mazas" class="radio" name="ProductId" value="Mazas" checked />
    Mažas</label>
        <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <h1 class="card-title pricing-card-title">15 Eur <small class="text-muted">/ vnt</small></h1>
            <img src="http://localhost/VaisiaiPHP/views/image/mazas.jpg" alt="Vaisiai Pic1" height="200" width="200">
            <ul class="list-unstyled mt-3 mb-4">
              <li>5 kg. Vaisių</li>
              <li>10 skirtingų rūšių</li>
            </ul>
          </div>
        </div>
      </div>
      <label for="Vidutinis">
          <input type="radio" id="Vidutinis" class="radio" name="ProductId" value="Vidutinis" />
    Vidutinis</label>
          <div class="card mb-4 box-shadow">
          <div class="card-body">
            <h1 class="card-title pricing-card-title">25 Eur <small class="text-muted">/ vnt</small></h1>
            <img src="http://localhost/VaisiaiPHP/views/image/vidutinis.jpg" alt="Vaisiai Pic2" height="200" width="200">
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 kg. vaisių</li>
              <li>15 skitingų rūšių</li>
              <li>Įeina ir egzotiniai vaisiai</li>
            </ul>
          </div>
        </div>
        <label for="Didelis">
      <input type="radio" id="Didelis" class="radio" name="ProductId" value="Didelis" />Didelis</label>
          <div class="card mb-4 box-shadow">
          <div class="card-body">
            <h1 class="card-title pricing-card-title">34 Eur <small class="text-muted">/ vnt</small></h1>
            <img src="http://localhost/VaisiaiPHP/views/image/didelis.jpg" alt="Vaisiai Pic3" height="200" width="200">
            <ul class="list-unstyled mt-3 mb-4">
              <li>15 kg. vaisių</li>
              <li>18 skirtingų vaisių rūšių</li>
              <li>Įeina ir reti egzotiniai vaisiai</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      </fieldset>
		<button class="btn btn-lg btn-primary" type="submit">Užsakyti</button>
    </form>
    </div>
</div>
</body>
