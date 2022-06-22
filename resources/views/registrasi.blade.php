<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/bootstrap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/bootstrap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/bootstrap/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/bootstrap/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
       
        <div id="" >
          <section class="login_content">
            <form method="post" action="{{route('registrasi.store')}}">
                 @csrf
              <h1>Create Account</h1>
             <div class="item form-group">
                 <label for="" class= "col-form-label col-md-3 col-sm-3 label-align">Nama</label>
                <input type="text" class="form-control"  name = "username" placeholder="Username" required="" />
              </div>
              <div class="item form-group">
              <label class = "col-form-label col-md-3 col-sm-3 label-align">Gender :</label>
				<P  class = "col-form-label">						
              <input  type="radio" name="gender" id="genderM" value="M" checked="" required />  Laki-laki
            <input type="radio" name="gender" id="genderF" value="F" />Perempuan

                </p>

									
			</div>
             <div class="item form-group">
                <label for="" class = "col-form-label col-md-3 col-sm-3 label-align"> Tanggal Lahir</label>
                <input type="date"  name ="tgl_lahir"class="form-control" placeholder="Password" required="" />
              </div>
             <div class="item form-group">
                <label for="" class = "col-form-label col-md-3 col-sm-3 label-align">Email</label>
                <input type="email" name ="email" class="form-control" placeholder="email" required="" />
              </div>
             <div class="item form-group">
                <label for="" class = "col-form-label col-md-3 col-sm-3 label-align"> telp</label>
                <input type="text"  name = "telp" class="form-control" placeholder="+62" required="" />
              </div>
             <div class="item form-group">
                <label for="" class = "col-form-label col-md-3 col-sm-3 label-align"> Password</label>
                <input type="password" name= "pass" class="form-control" placeholder="Password" required="" />
              </div>
              <div class="item form-group">
                <label for="" class = "col-form-label col-md-3 col-sm-3 label-align"> Konfirmasi Password</label>
                <input type="password" name= "pas1" class="form-control" placeholder="Password" required="" />
              </div>
               
              
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="{{route('loginAdmin.index')}}" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
