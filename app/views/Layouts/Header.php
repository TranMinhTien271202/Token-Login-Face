<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="../../../public/assets/js/checkToken.js" rel="stylesheet"></script>
    <script src="../../../public/assets/js/contrains.js" rel="stylesheet"></script>
    <script src="../../../public/assets/js/axios.js" rel="stylesheet"></script>
    <script src="../../../public/assets/js/loading.js" rel="stylesheet"></script>
    <link href="../../../public/assets/css/style.css" rel="stylesheet" />
    <link href="../../../public/assets/css/loading.css" rel="stylesheet" />
    <link href="../../../public/assets/css/base.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="is-loading" class="container is-loadding d-hidden">
        <div class="line"></div>
        <div class="line d1"></div>
        <div class="line d2"></div>
        <div class="line d3"></div>
        <div class="line d4"></div>
        <div class="line d5"></div>
        <br>
        <div class="caption">
            <p style='display:inline-block;'>Đang tải trang</p>
            <div class="dot">.</div>
            <div class="dot">.</div>
            <div class="dot">.</div>

        </div>
    </div>
    <div class="nav-main" id="nav-main">
        <div class="sidebar close">
            <div class="logo-details">
                <i class='bx bxl-c-plus-plus'></i>
                <span class="logo_name">Responsive</span>
            </div>
            <ul class="nav-links">
                <li class="nav-link">
                    <a href="/" data-active-url="/">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Trang Chủ</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="/" data-active-url="/">Trang Chủ</a></li>
                    </ul>
                </li>
                <li class="nav-link">
                    <a href="/campaigns" data-active-url="/campaigns,/campaigns/adsets,/campaigns/ads">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="link_name">Chiến dịch</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="/campaigns" data-active-url="/campaigns,/campaigns/adsets,/campaigns/ads">Chiến dịch</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <div class="iocn-link">
                        <a href="#">
                            <i class='bx bx-collection'></i>
                            <span class="link_name">Category</span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="#">Category</a></li>
                        <li><a href="#">HTML & CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">PHP & MySQL</a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="/settings" data-active-url="/settings">
                        <i class='bx bx-cog'></i>
                        <span class="link_name">Setting</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="/settings" data-active-url="/settings">Setting</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu'></i>
                <!-- <span class="text">Dashboard</span> -->
            </div>
        </section>