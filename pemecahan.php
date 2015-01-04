<?php
	include "ceksesi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SISTEM REGISTRASI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/datepicker.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<style>
	.datepicker{z-index:1151;}
	</style>
	<script>
		jQuery(function($){
		    $("#tanggal").datepicker({
			format:'yyyy-mm-dd'
		    });
                });
	    </script>
	
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
	
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">SISTEM REGISTRASI</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="panelmember.php">Home</a></li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Input Pelayanan <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <?php
						include "koneksi.php";
						
						$tampil = "SELECT * FROM pelayanan";
						$querytampil = mysql_query($tampil);
						$i = 1;
						while($hasil = mysql_fetch_array($querytampil)) {
							$id = $hasil['kodepelayanan'];
							$nama = $hasil['jenispelayanan'];
							
							if ($nama=="Pemecahan"){
					?>
								<li><a href="pemecahan.php?id=<?php  echo $id; ?>"><?php echo $nama; ?></a></li>
					<?php
							}
							else { 
					?>		
								<li><a href="gantinama.php?id=<?php  echo $id; ?>"><?php echo $nama; ?></a></li>
					<?php		
							}
							
							$i++;
						}
					?>
                </ul>
              </li>
			  <li class=""><a href="logout.php">Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->

      <!-- Example row of columns -->
      <div class="hero-unit">
		<h3>Data Pemecahan</h3><br/>
		<center>
        <form method="POST" action="pemecahan2.php">
		<table border="0" cellspacing="40">
			<tr>
				<td class="span2">Nama Pemohon</td>
				<td>:</td>
				<td><input name="nama1" type="text" id="nama_depan" required="required" /></td>
			</tr>
			<tr>
				<td>NOP Lama</td>
				<td>:</td>
				<td><input type="text" name="nop1" class="input-xlarge" /></td>
			</tr>
			<td>Kecamatan</td>
				<td>:</td>
				<td>
					<select name="kecamatan" >
					<?php
						include "koneksi.php";
						
						$tampil = "SELECT * FROM kecamatan";
						$querytampil = mysql_query($tampil);
						$i = 1;
						while($hasil = mysql_fetch_array($querytampil)) {
							$id = $hasil['idkecamatan'];
							$nama = $hasil['namakecamatan'];
							
					?>
						<option value="<?php echo $id;?>"><?php echo $nama;?></option>
						<?php } ?>
					</select>
				</td>			
				<tr>
			<td>Tanggal Proses</td>
			<td>:</td>
			<td><input type="text" id="tanggal" name="tanggal" ></td>
			</tr>
				<tr>
				<td>Jumlah Pemecahan</td>
				<td>:</td>
				<td><input name="jumalah" type="text" id="nama_depan" required="required" /></td>
			</tr>
			
			<tr>
				
			
			<tr>
				<td colspan="3">
					<center>
					<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-large"/>
					<input type="reset" name="reset" value="Reset" class="btn btn-large"/>
					</center>
				</td>
			</tr>
		</table>
		</form>
		</center>
      </div>

      <hr>

      <footer>
        <p>Copyright &copy; ERA 2014</p>
      </footer>

    </div> <!-- /container -->
	<!--javascript here-->
	<script src="js/bootstrap-modal.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
