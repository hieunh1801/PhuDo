<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Bất động sản Phú Đô" />
  <title>BDS Phú Đô</title>
  <!-- Phân biệt giữa các vùng trong public -->
  <base href="{{asset('')}}">
  <!-- Boostrap css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awsome -->
  <link rel="stylesheet" href="css/font-awsome.min.css" />
  <script src="https://use.fontawesome.com/releases/v5.9.0/js/all.js" data-auto-replace-svg="nest"></script>

  <link rel="icon" href="image/icons/brandicon.ico" />
</head>

<body>
  <style>
    /* xóa viền xung quanh nút */
    .btn:focus {
      outline: none !important;
      box-shadow: none !important;
      -webkit-box-shadow: none !important;
    }

    .form-control:focus {
      outline: none !important;
      box-shadow: none !important;
      -webkit-box-shadow: none !important;
    }


    /* Nav Bar */
    .navBarContainer {
      background-color: #004393;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 50px;
    }

    .brandContainer {
      display: flex;
      justify-content: center;
      align-items: center;
      color: 000000;
      height: 30px;
    }

    .brandIcon {
      font-size: 30px;
      margin: 0 20px;
      color: #000000;
    }

    .menuIcon {
      color: #FFFFFF;
    }

    .nav-link {
      color: #FFFFFF;
      size: 16px;
      font-weight: 400;
    }

    .nav-item {
      padding-left: 20px;
      margin-bottom: -10px;
    }

    .nav-link:hover:focus:active {
      color: ffffff;
    }

    .navBarCollapseContainer {
      background-color: #004393
    }

    .caroselContainer {
      min-height: 330px;
      background-color: #b6b6b6;
    }

    .carousel-indicators {
      /* background-color: red; */
    }

    .dotCustom {
      height: 10px;
      width: 10px;
      border-radius: 10px;
    }

    .wrapper {
      background-color: #fafafa;
    }

    /* Loại Hình Bất động sản */
    .tabContainer {
      margin-bottom: 10px;
      background-color: #fffff;
      height: 300px;
    }

    .imgTab {
      width: 100%;
      height: 240px;
      object-fit: cover;
    }

    .tabTxt {
      height: 56px;
      font-weight: 300;
      background-color: #ffffff;
      color: black;
      text-decoration: none;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 20px;
    }

    .tabTxt:hover {
      text-decoration: none;

    }
  </style>
  <!-- wrapper - start -->
  <div class="wrapper">
    <!-- Header - start -->
    <img src="image/bds phú đô logo.PNG" style="width:100%; height: 100px" />
    <!-- Navbar - Start-->
    <nav class="navbar navbar-expand-lg sticky-top navbar-inverse navBarContainer">
      <div class="container">
        <!-- Brand Icon -->
        <a class="navbar-brand brandContainer" href="#">
          {{-- <i class="fab fa-drupal brandIcon"></i> --}}
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIHRfvyLvoksvhIpcN8Y-QarsGRtdTih5XxyEjA1TN55X_eKkYmQ"
            alt="" style="width: 30px; height: 30px;" />
        </a>
        <!-- Icon khi hiển thị trên điện thoại -->
        <button class="navbar-toggler customButton" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-chevron-circle-down menuColor"></i>
        </button>

        <!-- Content menu when collapse -->
        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent"
          style="">
          <div class="row">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Trang chủ</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Bất động sản</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ & Tư vấn</a>
              </li>

              <!-- Search input -->
              <li class="nav-item d-flex">
                <form class="form-inline my-2 my-lg-0" style="height: 30px">
                  <div class="input-group mb-3" style="height: 30px">
                    <input type="text" class="form-control" placeholder="Search" style="height: 30px; border:none">
                    <div class="input-group-append">
                      <button class="btn btn-sm" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Header - End -->
    <!-- Banner - START -->
    <div id="demo" class="carousel slide caroselContainer" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" style="height: 10px; width: 10px; border-radius: 10px" class="active">
        </li>
        <li data-target="#demo" data-slide-to="2" style="height: 10px; width: 10px; border-radius: 10px"></li>
        <li data-target="#demo" data-slide-to="3" style="height: 10px; width: 10px; border-radius: 10px"></li>
      </ul>

      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="https://elements-cover-images-0.imgix.net/aecc0bda-39e5-41a5-ac57-c97c02af448c?auto=compress%2Cformat&fit=max&w=1370&s=9999df3128e99c57031a2de32880d1bd"
            alt="Los Angeles" width="100%" height="330" style="object-fit: cover">

        </div>
        <div class="carousel-item">
          <img
            src="https://elements-cover-images-0.imgix.net/aecc0bda-39e5-41a5-ac57-c97c02af448c?auto=compress%2Cformat&fit=max&w=1370&s=9999df3128e99c57031a2de32880d1bd"
            alt="Chicago" width="100%" height="330" style="object-fit: cover">

        </div>
        <div class="carousel-item">
          <img
            src="https://elements-cover-images-0.imgix.net/aecc0bda-39e5-41a5-ac57-c97c02af448c?auto=compress%2Cformat&fit=max&w=1370&s=9999df3128e99c57031a2de32880d1bd"
            alt="New York" width="100%" height="330" style="object-fit: cover">

        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <!-- Banner - END -->
    <!-- Content - Start -->
    <div class="container" style="margin-top: 30px;">
      <h3>Loại hình bất động sản</h3>
      <div class="row">
        <div class="col-md-6 tabContainer">
          <div class="shadow-sm bg-white rounded lienKeContainer">
            <a href="" style="text-decoration: none;">
              <img src="https://neohouse.vn/wp-content/uploads/2018/10/bia-thiet-ke-biet-thu-hien-dai-2-tang-5.jpg"
                alt="" class="imgTab">
              <div class="tabTxt">Biệt thự</div>

            </a>
          </div>
        </div>
        <div class="col-md-6 tabContainer">
          <div class="shadow-sm bg-white rounded canHoChungCuContainer" class="">
            <a href="" style="text-decoration: none;">
              <img src="http://vinhomesimperia.com/wp-content/uploads/sites/18/2017/01/biet-thu-paris.jpg" alt=""
                class="imgTab">
              <div class="tabTxt">Liền kề</div>

            </a>
          </div>
        </div>
        <div class="col-md-6 tabContainer">
          <div class="shadow-sm bg-white rounded kiotContainer">
            <a href="" style="text-decoration: none;">
              <img src="http://cafefcdn.com/thumb_w/650/2018/10/4/photo1538649293790-15386492937911264929810.jpg" alt=""
                class="imgTab">
            </a>
            <div class="tabTxt">Căn hộ</div>

          </div>
        </div>
        <div class="col-md-6 tabContainer">
          <div class="shadow-sm bg-white rounded bietThuContainer">
            <a href="" style="text-decoration: none;">
              <img
                src="https://chungcuthevesta.info/wp-content/uploads/2018/05/Ti%E1%BA%BFn-%C4%91%E1%BB%99-d%E1%BB%B1-%C3%A1n-the-vesta-h%C3%A0-%C4%91%C3%B4ng-6.jpg"
                alt="" class="imgTab">
            </a>
            <div class="tabTxt">Kiot</div>

          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- wrapper - end -->

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>