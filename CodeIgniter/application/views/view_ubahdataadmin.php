
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ubah Data Admin | SI Himpunan Alumni Amanatul Ummah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
		background: url(../../assets/img/bg.jpg) no-repeat;
		background-size: 300% 300%;
		background-position: center top;
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }
		
      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
	  .logo{
		width : 290px;
		height : 290px;
	  }
      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }
	  
	  

    </style>
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../../assets/ico/favicon-himah.jpg">
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="../home"> <img src="../../assets/img/logo-himah.png" width="25px" height="25px"/> SI-HIMAH</a>
            <div class="nav-collapse  navbar-responsive-collapse collapse">
              <ul class="nav">
                <li> <a href="../home"><i class="icon-home"></i> Beranda</a></li>
                
                <li><a href="../pilihadmin/tentang"> <i class="icon-bookmark"> </i> Tentang</a></li
              </ul>
			</div>
				
			<div class="nav-collapse collapse">
			<ul class="nav pull-right">
				
				<li>
					<div class="btn-group">
					<a href="#" class="btn btn-primary"><i class="icon-user icon-white"></i><?php echo $NamaLengkap . " "; ?>(sebagai admin)</a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="../pilihadmin/ubahdataadmin"><i class="icon-pencil"></i> Mengubah Data Admin</a></li>
						<li><a href="../pilihadmin/tambahakun"><i class="icon-pencil"></i> Menambah Akun</a></li>
						<li><a href="../pilihadmin/ubahdataalumni"><i class="icon-pencil"></i> Mengubah Data Alumni</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Pengaturan</li>
						
						<li><a href="../pilihadmin/ubahdataadmin"><i class="icon-lock"></i> Mengubah Password</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Akun</li>
						
						<li><a href="../home/sign_out"><i class="icon-off"></i> Keluar</a></li>
					</ul>
					</div>
				</li>
			
			  </ul>
				
			</div><!--/.nav-collapse -->
		  
		  
        </div>
      </div>
	 </div>

      <!-- Begin page content -->
      <div class="container">
        <center><h2>&nbsp &nbsp Mengubah Data Admin</h2></center>
				<br>
			<div class="row-fluid">
				<div class="span4"> </div>
				<div class="span4">
				<form class="form-horizontal" method="post" action="">
					<div class="control-group">
						<label class="control-label" for="inputNama" style="text-align: left"> Nama</label>
							<div class="controls">
								<input type="text" id="inputNama" value="" placeholder="Nama">
							</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputUsername" style="text-align: left"> Username</label>
							<div class="controls">
								<input type="text" id="inputUsername" value="" placeholder="Username">
							</div>
					</div>
					<div class="control-group">
							<label class="control-label" for="inputPasswordLama" style="text-align: left"> Password Lama</label>
						<div class="controls">
							<input type="password" id="inputPasswordLama" value="" placeholder="Password Lama">
						</div>
					</div>
					<div class="control-group">
							<label class="control-label" for="inputPasswordBaru" style="text-align: left"> Password Baru</label>
						<div class="controls">
							<input type="password" id="inputPasswordBaru" value="" placeholder="Password Baru">
						</div>
					</div>
					<div class="control-group">
								<label class="control-label" for="inputKonfirmasiPassword" style="text-align: left"> Konfirmasi Password</label>
							<div class="controls">
								<input type="password" id="inputKonfirmasiPassword" value="" placeholder="Konfirmasi Password">
							</div>
						</div>
				
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn btn-primary"> Simpan</button>
					</div>
				  </div>
				</form>
				
				</div>
				
				<div class="span4"> </div>
				
			</div>
			
	</div>

    </div>

    <div id="footer">
      <div class="container">
		<div class="span11">
			<center><h5 style="background-color: #e3e3e3">Copyright &copy; Manajemen Proyek Perangkat Lunak (D) 2015</h5></center>
		</div>
		
      </div>
	 
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap-transition.js"></script>
    <script src="../../assets/js/bootstrap-alert.js"></script>
    <script src="../../assets/js/bootstrap-modal.js"></script>
    <script src="../../assets/js/bootstrap-dropdown.js"></script>
    <script src="../../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../assets/js/bootstrap-tab.js"></script>
    <script src="../../assets/js/bootstrap-tooltip.js"></script>
    <script src="../../assets/js/bootstrap-popover.js"></script>
    <script src="../../assets/js/bootstrap-button.js"></script>
    <script src="../../assets/js/bootstrap-collapse.js"></script>
    <script src="../../assets/js/bootstrap-carousel.js"></script>
    <script src="../../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
