<?php
session_start();
if (!isset($_SESSION['lan'])) {
    $_SESSION['lan'] = 'CN';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <?php include('include/css.php'); ?>
    <title>LovingCare - 24/7 Home Care and Nursing Service</title>
</head>

<body>

<!-- Header -->
<?php include('include/header.php'); ?>
<!-- End  of Header -->

<main>
    <!-- Banner -->
    <section class="section image-infinite-bg position-relative"
             style="background-size: cover; background-position: center ;padding: 15em 1em 15em 1em;"
             data-images='["image/image-1920x900-1.jpg" , "image/image-1920x900-2.jpg"]'>
        <div class="r-container h-100">
            <div class="image-overlay"></div>
            <div class="d-flex flex-column justify-content-center gap-3 h-100 position-relative"
                 style="max-width: 768px; z-index: 2;">
                <?php
                if ($_SESSION['lan'] == 'CN') {
                    ?>
                    <h1 class="text-title text-white fw-bold font-1 lh-1">慈爱專業護理服務有限公司</h1>
                    <p class="text-white f-18 text-font">
                        慈爱是由擁有超過20年於醫院,護養院工 作經驗之資深註冊護士主理,致力為有護理
                        需求之人士,機構,公營及私家醫院在解决 人手方面,提供優質的護理服務及人手。
                    </p>
                    <?php
                } else {
                    ?>
                    <h1 class="text-title text-white fw-bold font-1 lh-1">LOOKING FOR TRUSTED NURSING CARE <br> AT
                        HOME?</h1>
                    <p class="text-white f-18 text-font">Let your loved ones age in the comfort of their own home.
                        Find professional nursing care from trusted caregivers within 24 hours.</p>
                    <?php
                }
                ?>

                <div>
                    <a type="button" href="#"
                       class="btn bg-accent-color text-font rounded-0"> <i
                                class="fa-brands fa-whatsapp"></i> <?php if ($_SESSION['lan'] == 'CN') echo '與我們WhatsApp'; else echo 'Whatsapp Us'; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative" style="margin-top: -80px;">
        <div class="r-container px-lg-0 px-4">
            <div class="overflow-hidden rounded-4">
                <div class="col text-white" id="banner-partner">
                    <div class="d-flex flex-row gap-1 align-items-center  p-4">
                        <img src="https://lirp.cdn-website.com/8668f1f0/dms3rep/multi/opt/partners_logo+%281%29-1382w.png"
                             class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Types Of Care -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 justify-content-center text-center">
                <h6 class="accent-color font-2 "><?php if ($_SESSION['lan'] == 'CN') echo '服務宗旨'; else echo 'TRUSTED CARE SUPPORT FOR FAMILIES AND ORGANISATIONS'; ?></h6>
                <h3 class="text-black font-1 lh-1 fw-semibold"><?php if ($_SESSION['lan'] == 'CN') echo 'We Care with Love'; else echo 'OUR SERVICES'; ?></h3>
                <p class="text-gray mx-auto" style="max-width: 768px;">
                    是慈愛的服務宗旨,我 們會致力為不同機構及個人提供專業,可靠 和富愛心的優質護理服務。
                </p>
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/image-600x400-1.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">私家看護</h5>
                                <p class="text-gray">
                                    根據客戶需要,提供最合適的私家看護,
                                    所有護理人員皆為嚴選合資格的醫護人員。
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a type="button" href="#"
                                       class="btn post-button font-2 d-flex flex-row align-items-center gap-2"><?php if ($_SESSION['lan'] == 'CN') echo '閱讀更多'; else echo 'Read
                                            More'; ?><i class="fa-solid fa-circle-arrow-right mt-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/image-600x400-2.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">人手方案</h5>
                                <p class="text-gray">
                                    慈爱護理嚴選合資格的護理人員,為公,私 營醫院及院舍,護養院,學校等等提供長
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a type="button" href="#"
                                       class="btn post-button font-2 d-flex flex-row align-items-center gap-2"><?php if ($_SESSION['lan'] == 'CN') echo '閱讀更多'; else echo 'Read
                                            More'; ?><i class="fa-solid fa-circle-arrow-right mt-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/image-600x400-3.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">陪診服務</h5>
                                <p class="text-gray">
                                    為忙碌的香港人,提供服務協助長者定期覆 診/運送樣本並在完成後向客戶交代外出細
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a type="button" href="#"
                                       class="btn post-button font-2 d-flex flex-row align-items-center gap-2"><?php if ($_SESSION['lan'] == 'CN') echo '閱讀更多'; else echo 'Read
                                            More'; ?><i class="fa-solid fa-circle-arrow-right mt-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/image-600x400-3.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">起居照顧服務</h5>
                                <p class="text-gray">
                                    提供短期/長期起居照顧服務,全方位貼合<br/><br/>
                                </p>
                                <div class="d-flex justify-content-center">
                                    <a type="button" href="#"
                                       class="btn post-button font-2 d-flex flex-row align-items-center gap-2"><?php if ($_SESSION['lan'] == 'CN') echo '閱讀更多'; else echo 'Read
                                            More'; ?><i class="fa-solid fa-circle-arrow-right mt-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center my-4">
                    <a href="#" type="button" class="btn bg-accent-color p-3 font-2">尋找其他居家護理服務</a>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Article -->
    <section class="section bg-light">
        <div class="r-container">
            <div class="d-flex flex-column gap-3">
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col mb-3">
                        <div class="card border border-light-subtle h-100">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">日間夜間急聘護士或緊急服務</h6>
                                <p class="text-gray">
                                    a) 日間(8am-8pm):如上午十時之前 急聘護士,收費以全更(十二小時)計算; 如於上午十時後急聘,以全更之比例計 算。
                                </p>
                                <p class="text-gray">
                                    b) 夜間(8pm-8am):如於夜間急聘護士,收費一律以全更(十二小時)計算。
                                </p>
                                <p class="text-gray">
                                    c) 如要求護理人員在早上六時半前或晚上 十時後上下班,均需支付交通費港幣一百元 正。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle h-100">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">每年冬至</h6>
                                <p class="text-gray">
                                    聖誕節,農曆新年期間,護 理服務雙倍收費
                                    顧客如要求在以下農曆新年期間提供護理服 務,護理服務收費則以雙倍計算。
                                </p>
                                <p class="text-gray">
                                    a) 日更:農曆年初一、農曆年初二及農曆 年初三
                                </p>
                                <p class="text-gray">
                                    b) 夜間:農曆新年前夕、農曆年初一及農 曆年初二
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle h-100">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">颱風或黑色暴雨警告期間</h6>
                                <p class="text-gray">
                                    護理服務倍 半收費
                                </p>
                                <p class="text-gray">
                                    a) 當八號風球掛起或黑色暴雨警報發生 後,如顧客仍要求護理人員當值,須支付於
                                    平日酬金的倍半收費(配方八號風球除下或 該更完畢)。
                                </p>
                                <p class="text-gray">
                                    b) 若上下班時間為八號風球或黑色暴雨預警,客戶需另支付港幣二百元交通費。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle h-100">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">臨時取消護理服務之額外費用</h6>
                                <p class="text-gray">
                                    a) 客戶如欲取消或更改服務時間,請事先 通知本公司,以便我們可以做出安排。
                                </p>
                                <p class="text-gray">
                                    b) 客戶如暫時取消護理服務,而在開始服 務前4小時未通知本公司取消服務,本公司 司將預收,港幣二百元正行政費。
                                </p>
                                <p class="text-gray">
                                    c) 如果護理人員已到達客戶地點並開始提 供提供服務,而客戶暫時縮減或終止服務, 則當天護理服務費將不獲減免。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle h-100">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">繳費方法</h6>
                                <p class="text-gray">
                                    a) 繳費會以預付形式繳付,我公司會要求 在開始服務前收齊全部服務費,以確保護理 人員可以保留時間以提供服務。
                                </p>
                                <p class="text-gray">
                                    b) 客戶可以把服務费用用轉数快方法存入 我們的銀行戶口或寄支票給我們。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle h-100">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">重要聲明</h6>
                                <p class="text-gray">
                                    a) 顧客在使用本公司服務前需仔細閱讀上 文所列出的服務細則及條款,當顧客閱讀後 後選用本公司的服務,即表示客人接受上述所列的服務細則及條款。
                                </p>
                                <p class="text-gray">
                                    b) 經本公司介紹的護理人員皆不是本公司 的員工。但本公司已查閱各護理人員的證書 及資歷,確保其專業資格。如有任何投訴, 可直接聯絡本公司。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Welcome To Seniorsy -->
    <section class="section">
        <div class="r-container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col mb-3 pe-lg-3 position-relative">
                    <div class="overlay right"></div>
                    <div class="position-relative pe-5">
                        <img src="image/image-600x700-1.jpg" alt="" class="img-fluid" style="z-index: -2;">
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="d-flex flex-column gap-3 p-3">
                        <h3 class="text-black font-1 lh-1 fw-semibold">為什麼要加入慈爱?</h3>
                        <p class="text-gray">
                            加入我們,你會得到更多福利,及更多的工作滿 足感
                        </p>
                        <div class="row">
                            <div class="mb-2">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right accent-color"></i>
                                    <span class="text-gray">公平的服務費:你們得到最好的服務费</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right accent-color"></i>
                                    <span class="text-gray">自由選擇工作:何時工作,你有絕對話事權</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right accent-color"></i>
                                    <span class="text-gray">獎金計劃:你工作得愈多,會有愈多的獎金</span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right accent-color"></i>
                                    <span class="text-gray">津貼:夜班、惡劣天氣、假日等會有額外津貼</span>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 border-bottom w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include('include/footer.php'); ?>

<?php include('include/js.php'); ?>
</body>

</html>