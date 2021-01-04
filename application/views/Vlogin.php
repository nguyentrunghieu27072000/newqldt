<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/jpg" sizes="16x16" href="images/favio.jpg">
	<link rel="stylesheet" type="text/css" href="asset/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="asset/login/css/main.css">
 -->
</head>
<style>
	body {
		font-family: 'Noto Serif', serif,sans-serif;
	}
	.login,
	.image {
		min-height: 100vh;
	}
	.bg-image {
		background-image: url('images/unnamed.jpg');
		background-size: cover;
		background-position: center center;
	}
    .lg-content{
        color: #fff;
        padding: 0 40px;
        margin-top: 20%;
        text-align: center;
    }
	
</style>
<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="col-md-5 d-none d-md-flex bg-image">
            <div class="lg-content">
                <h3>HỆ THỐNG QUẢN LÝ ĐÀO TẠO</h3>
                <h3>THẠC SĨ VÀ TIẾN SĨ</h3>
            </div>
        </div>
        <div class="col-md-7 bg-light">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xl-6 mx-auto">
                            <h5 class="text-uppercase">đăng nhập hệ thống</h4>
                            <p class="text-muted mb-4"><!-- Create a login split page using Bootstrap 4. --></p>
                            <form action="" method="POST">
                                <div class="form-group mb-3">
                                    <input type="text" name="username" placeholder="Tên đăng nhập" required="" autofocus="" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" placeholder="Mật khẩu" required="" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" name="login" value="login">Đăng nhập</button>
                                <div class="text-center d-flex mt-4"><a href="#"> Quên mật khẩu?</a></div>
                                <input type="hidden" class="csrf" name="{$csrf_token_name}" value="{$csrf_token}">
                            </form>
                        </div>
                    </div>
                </div><!-- End -->
            </div>
        </div><!-- End -->
    </div>
</div>


</body>
</html>
{literal}
<script>

</script>
{/literal}
<script src="asset/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="asset/login/js/main.js"></script>