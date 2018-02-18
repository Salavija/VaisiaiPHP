<footer class="pt-4 my-md-5 pt-md-5 border-top">
	<div class="row">
		  <div class="col-6 col-md">
		    <h3>Susisiekite</h3>
		    <ul class="list-unstyled text-small">
		      <td class="text-muted"><b>Mobilus</b></td>
		      <td class="text-muted">+370 655 94863</td><br>
		      <td class="text-muted"><b>Adresas</b></td>
		      <td class="text-muted">Pilies g. 15, Kaunas</td><br>
		      <td><?php include('darbovalandos.php'); ?></td>
		    </ul>
		  </div>
		  <div class="col-6 col-md">
		    <h3>Darbo laikas</h3>
		    <ul class="list-unstyled text-small">
			          <strong>Working hours</strong>
			          	<td>
			          <em>Monday - Wednesday</em>
			          15:00 - 18:00<br>
						</td>
						<td>
			          <em>Friday - Saturday</em>
			          12:00 - 18:00<br>
			          </td>
			          <td>
			          <em>Thursday and Sunday</em>
			          Closed<br>
			          </td>
		    </ul>
		  </div>
		  <div class="col-6 col-md">
			<?php
			date_default_timezone_set('Europe/Vilnius');
			$today = date('F j, Y');
			$this_year = date('Y');?>
		  </div>
		</div>
		<div class="inner">
		<div id="copyright text-right">© Copyright 2018 Aurelija Ragaisyte</div>
	</div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>


</body>
</html>