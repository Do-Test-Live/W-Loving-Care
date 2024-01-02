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
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '主頁'; else echo 'Home';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '私家看護'; else echo 'Private care';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '人手方案'; else echo 'Staffing Solutions';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '陪診服務'; else echo 'Accompanying';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '起居照顧服務'; else echo 'Daily Care';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '保健員'; else echo 'Health Worker';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '服務收费'; else echo 'Service Charges';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '服務細則'; else echo 'Service Details';?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php if($_SESSION['lan'] == 'CN') echo '人員聯絡我們'; else echo 'Contact Us';?></a>
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
                        (852) 67321204
                    </a>
                </div>
            </div>
        </nav>
    </div>
</section>