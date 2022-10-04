<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mager Makan</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="overflow: hidden;">
	<div id="welcomePage">
		<div id="loginContent">
			<img src="https://auyuuns.files.wordpress.com/2018/09/covered-food-tray-on-a-hand-of-hotel-room-service_318-61182.jpg" alt="Makanan">
			<br>
			<br>
			<h1><span class="welcome bounceInDown animated">Mager Makan</span></h1>
			<br>
			<h5><span class="fadeInDown animated"> Mager ? Ya pesan aja!</span></h5>
			<span class="fadeInDown animated"> Silahkan login terlebih dahulu sebelum memesan.</span>
			<br>
			<br>
			<div class="fadeInUp animated">
				<a class="btn waves-effect default" href="javascript:void(0)" id="liffLoginButton"> Login </a>
                <a class="waves-effect Default btn red" href="javascript:void(0)" id="liffLogoutButton"> Logout </a>
				<a class="waves-effect default btn red" href="javascript:void(0)" id="liffExitButton"> Exit </a>
				<br>
				<br>
				<div class="fadeInLeft animated" id="buttonNext">
			</div>
			</div>
			<br>
			<br>
			<button class="btn waves-effect Default"><a href="javascript:void(0)" id="openExternal"> Buka lewat browser Eksternal <i class="material-icons">open_in_browser</i></a></button>
			</div>
        </div>
	</div>
	<br>
	<br>
<div id="orderPage" class="hidden">
	<div class="navbar-fixed">
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand">Mager Makan</a>
    </div>
  </nav>
</div>
	<article id="liffappContent">
		<div id="userMess">

  <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><p> Halo kak <a href="javascript:void(0);" id="userName"></a>, </p></span>
          <p> Silahkan pesan pada menu di bawah ini :</p>
        </div>
      </div>
    </div>
  </div>
		<form>
			<div id="menuPesanan">
				<ul>
						<li>
								<div class="btn btn-secondary"><i class="material-icons">local_dining</i> List Menu Makanan </div>
									<div class="row">
									<label>
										<input type="checkbox" value="Bakso" name="pesanan" />
										<span style="color: black"> Bakso </span>
									</label>
								</div>
									<div class="row">
									<label>
										<input type="checkbox" value="Sate Madura" name="pesanan" />
										<span style="color: black"> Sate Madura </span>
									</label>
								</div>
									<div class="row">
									<label>
										<input type="checkbox" value="Nasi Goreng" name="pesanan" />
										<span style="color: black"> Nasi Goreng </span>
									</label>
								</div>
						</li>
						<li>
								<div class="btn btn-secondary"><i class="material-icons">local_drink</i> List Menu Minuman </div>
									<div class="row">
									<label>
										<input type="checkbox" value="Es Teh" name="pesanan" />
										<span style="color: black"> Es Teh </span>
									</label>
								</div>
									<div class="row">
									<label>
										<input type="checkbox" value="Capucino" name="pesanan" />
										<span style="color: black"> Capucino </span>
									</label>
								</div>
									<div class="row">
									<label>
										<input type="checkbox" value="Es Jeruk" name="pesanan" />
										<span style="color: black"> Es Jeruk </span>
									</label>
								</div>
						</li>
				</ul>
			</div>
			<div class="row start">
				<button class="waves-effect waves-light btn"<a href="" style="color: white"><i class="material-icons" style="float: left;">arrow_back</i>Kembali
				</a></button>
				<button class="waves-effect waves-light btn" id="pesanMenu"> Pesan </button>
			</div>
				</form>
	</article>
	</div>
	<div id="liffIdErrorMessage" class="hidden">
        <p> Error : <span id="errorCode"></span></p>
        <p> Inisialisasi LIFF Gagal</div>
    <div id="liffIdKosong" class="hidden">
    </div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
	<script type="text/javascript" src="js/liff-starter.js"></script>
	<script type="text/javascript" src="js/liff.js"></script>
</body>
</html>
