<!DOCTYPE html>
<html lang="en">
<head>
  <title>knowledge</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/jpg" sizes="16x16" href="images/favio.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    .other-new{
      font-weight: bold;
      color: #d63031;
      border-bottom: 3px solid #d63031;
      font-size: 20px;
    }
    .title-min{
        font-weight: bold;
        line-height: 19px;
        margin-top: 5px;
        color: black;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">knowledge</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="http://localhost/knowledge/" class="nav-link">Trang chủ</a></li>
            <li class="nav-item"><a href="http://localhost/knowledge/chitiet?id=thethao" class="nav-link">Thể thao</a></li>
            <li class="nav-item"><a href="http://localhost/knowledge/chitiet?id=thoisu" class="nav-link">Thời sự</a></li>
            <li class="nav-item"><a href="http://localhost/knowledge/chitiet?id=giaitri" class="nav-link">Giải trí</a></li>
            <li class="nav-item"><a href="http://localhost/knowledge/chitiet?id=phapluat" class="nav-link">Pháp luật</a></li>
            <li class="nav-item"><a href="http://localhost/knowledge/chitiet?id=giaoduc" class="nav-link">Giáo dục</a></li>
            <li class="nav-item"><a href="http://localhost/knowledge/chitiet?id=khoahoc" class="nav-link">Khoa học</a></li>
        </ul>
      </div>
    </div>
  </nav> 
<section class="ftco-section bg-light" style="padding: 8em 0;">
  <div class="container">
      <h6 style="color: #0984e3">{$tin.0.ten_loaitin}</h6>
      <div class="row">
          <div class="col-md-8">
            <h2 class="font-weight-bold">{$tin.0.tieude}</h2>
<!--             <div class="slider-item js-fullheight" style="background-image:url(images/{$tin.0.hinhanh});height: 400px;margin-bottom: 20px;"></div> -->
            <img src="images/{$tin.0.hinhanh}" width="100%">
            <div class="content-min">
               {$tin.0.noidung}
            </div>
          </div>
          <div class="col-md-4">
            <div style="margin: 7px 50px 7px 30px;">
                <p class="other-new">Tin tức khác</p>
                {foreach $tin_khac as $tk}
                    <a href="{$url}tintucchitiet?id={$tk.ma_tin}">
                      <img src="images/{$tk.hinhanh}" width="100%">
                      <p class="title-min">{$tk.tieude}</p>
                    </a>
                    <hr>
                {/foreach}
            </div>
          </div>
      </div>
  </div>
</section>
<footer class="ftco-footer ftco-no-pb ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">kNOWLEDGE</h2>
            <p>Hiểu biết đo lường được sa mạc dài 12.4 dặm.Khôn ngoan mang đủ nước cho chuyến đi.Còn sáng suốt xây một quầy nước chanh ở dặm thứ 6</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Open Hours</h2>
            <ul class="list-unstyled open-hours">
              <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
              <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
              <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
              <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
              <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
              <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
              <li class="d-flex"><span>Sunday</span><span> Closed</span></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Instagram</h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Newsletter</h2>
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid px-0 bg-primary py-3">
      <div class="row no-gutters">
        <div class="col-md-12 text-center">

          <p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright ©<script>document.write(new Date().getFullYear());</script>2020 Toàn bộ bản quyền thuộc 
knowledge | Master Nguyễn Thành Đạt <i class="fa fa-heart" aria-hidden="true"></i> Đại Học Mở Hà Nội
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle></svg></div>
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    
  
  <iframe id="nr-ext-rsicon" style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;"></iframe><div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"></div></body>