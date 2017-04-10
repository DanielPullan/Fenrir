<!DOCTYPE html>
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <title>Krypton</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="{URL}/template/{TPL}/css/krypton.css" rel="stylesheet">
        <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    </HEAD>

    <BODY>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static" role=" navigation ">
            <div class="container ">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                    <button type="button " class="navbar-toggle " data-toggle="collapse " data-target="#bs-example-navbar-collapse-1 ">
                        <span class="sr-only ">Toggle navigation</span>
                        <span class="icon-bar "></span>
                        <span class="icon-bar "></span>
                        <span class="icon-bar "></span>
                    </button>
                    <a class="navbar-brand " href="{URL}">Krypton</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1 ">
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    <div class="container">
        <div class=".col-md-6">
            <div class="wrapper">
                <form action="" method="post" name="Login_Form" class="form-signin">
                    <h3 class="form-signin-heading text-center">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/d0f16745969491.5607bc041aaa9.png" alt=""/>
                    </h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="fa fa-user"></i>
                        </span>
                        <input type="text" class="form-control" name="log_username" placeholder="Username" required="" autofocus="" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input type="password" class="form-control" name="log_password" placeholder="Password" required="" />
                    </div>
                    <input class="btn btn-lg btn-primary btn-block" name="submit" value="Login" type="submit"></input>
                </form>
            </div>
        </div>
    </div>
<!-- Footer -->
	<div class="footer">
		<div class="container">
			<p class="navbar-text pull-left">© 2016 - CrySys
			</p>
		</div>
	</div>
	<!-- /.container -->

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="{URL}/template/{TPL}/js/bootstrap.min.js "></script>




	</body>
</HTML>
