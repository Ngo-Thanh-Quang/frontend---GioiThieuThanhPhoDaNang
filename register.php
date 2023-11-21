<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt vé chuyến đi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dangkychuyendi.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comforter&family=Itim&family=Patrick+Hand&family=Tilt+Prism&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="icon" type="image/png" href="image/vuichoi.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/png" href="image/plane.png"/>
</head>

<body>
    <div class="container">
        <div class="menu">
            <nav class="navbar navbar-expand-lg bg-light justify-content-center ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="trangchu.html">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dacsan.html">Đặc sản</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="NoiBat.html">Nổi bật</a>
                        <ul class="submenu">
                            <li class="na"><a href="Helio1.html" id="ma">Hè rực rỡ với HELIO KIDS DANCE 2023</a></li>
                            <li class="na"><a href="phaohoa.html" id="ma">TOP các địa điểm xem pháo hoa Đà Nẵng (DIFF
                                    2023) CỰC ĐỈNH</a></li>
                            <li class="ne"><a href="lehoi.html" id="ma">Tất tần tật Lễ hội mùa hè Đà Nẵng 2023 tại Sun
                                    World Bà Nà Hills và Asia Park</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" id="tnghiem">
                        <a class="nav-link" href="duthuyen.html">Trải nghiệm</a>
                        <ul class="submenu" id="tnghiem">
                            <li class="na"><a href="duthuyen.html" id="ma">Du thuyền sông Hàn</a></li>
                            <li class="ne"><a href="truyenthong.html" id="ma">Truyền thống</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" id="pox">
                        <a class="nav-link" href="review.html">Giới thiệu</a>
                        <ul class="submenu" id="pox">
                            <li class="na"><a href="review.html" id="ma">Dịch vụ</a></li>
                            <li class="ne"><a href="congty.html" id="ma">Công ty</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/dangnhap/register.php" style="color: #73faea">Chuyến đi</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="wrapper">
                <form id="form-login" action="reg.php" method="post">
                    <h1 class="form-heading">Đặt chuyến đi</h1>

                    <label for="fullname">Họ và tên</label><br>
                    <div class="form-group">
                        <input name="fullname" type="text" class="form-input" placeholder="Họ và tên">
                    </div>

                    <label for="telephone">Số điện thoại</label><br>
                    <div class="form-group">
                        <input name="telephone" type="tel" class="form-input" placeholder="Số điện thoại">
                    </div>

                    <label for="email">Email</label><br>
                    <div class="form-group">
                        <input name="email" type="text" class="form-input" placeholder="Email">
                    </div>

                    <label for="">Điểm đến</label><br>
                    <div class="giua">
                        <input type="radio" class="btn-check" name="place" id="hanoi" checked value="Hà Nội">
                        <label class="btn btn-outline-success" for="hanoi">Hà Nội</label>
                        <input type="radio" class="btn-check" name="place" id="hcm" value="Hồ Chí Minh">
                        <label class="btn btn-outline-success" for="hcm">Hồ Chí Minh</label>
                        <input type="radio" class="btn-check" name="place" id="haiphong" value="Hải Phòng">
                        <label class="btn btn-outline-success" for="haiphong">Hải Phòng</label>
                    </div>

                    <label for="">Giờ khởi hành</label><br>
                    <div class="giua">
                        <input type="radio" class="btn-check" name="time" id="6h30"  checked value="6:30">
                        <label class="btn btn-outline-danger" for="6h30">06:30</label>

                        <input type="radio" class="btn-check" name="time" id="12h20" value="12:20">
                        <label class="btn btn-outline-danger" for="12h20">12:20</label>

                        <input type="radio" class="btn-check" name="time" id="17h25" value="17:25">
                        <label class="btn btn-outline-danger" for="17h25">17:25</label>

                        <input type="radio" class="btn-check" name="time" id="18h50" value="18:50">
                        <label class="btn btn-outline-danger" for="18h50">18:50</label>
                    </div>

                    <input type="submit" value="Đặt vé ngay" class="form-submit" name="btn-Reg">
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start bg-light text-muted">
        <div class="text-center p-4" style="background-color: rgba(118, 224, 229, 0.05);">
            © 2023 Copyright Q&T
        </div>
    </footer>

</body>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
<script src="login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>