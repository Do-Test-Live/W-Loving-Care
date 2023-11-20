<section class="sticky-top bg-white">
    <div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid nav-padding">
                <a class="navbar-brand" href="#">
                    <div class="logo-container">
                        <img src="image/logo.png" alt="" class="img-fluid">
                    </div>
                </a>
                <button class="navbar-toggler accent-color border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 font-2 fw-semibold gap-lg-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '關於我們'; else echo 'About Us';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '居家護理服務'; else echo 'Home Care Services';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '企業服務'; else echo 'Corporate Services';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '護理人員中心'; else echo 'Caregiver Center';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '護理人員中心'; else echo 'Advise & Tips';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '聯繫我們'; else echo 'Contact Us';?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <?php if($_SESSION['lan'] == 'CN') echo '語言'; else echo 'Language';?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="include/lan.php?lan=CN">Chinese</a></li>
                                <li><a class="dropdown-item" href="include/lan.php?lan=EN">English</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a href="#" type="button" class="btn button bg-accent-color me-3" type="submit"><?php if($_SESSION['lan'] == 'CN') echo '立即預約'; else echo 'Book Service';?></a>
                    <a href="#" style="color: #e63186;"><i class="fa-solid fa-phone"></i>
                        +123-456-789</a>
                </div>
            </div>
        </nav>
    </div>
</section>