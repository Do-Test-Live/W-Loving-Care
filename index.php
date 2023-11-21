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
                    <h1 class="text-title text-white fw-bold font-1 lh-1">你在尋找可信賴的 <br> 私家看護嗎?</h1>
                    <p class="text-white f-18 text-font">
                        在24小時內聘請專業的護理人員提供優質上門護理服務，讓你在安全舒適的家中得到適切的照顧。</p>s
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
                <h6 class="accent-color font-2 "><?php if ($_SESSION['lan'] == 'CN') echo '值得信賴的護理服務'; else echo 'TRUSTED CARE SUPPORT FOR FAMILIES AND ORGANISATIONS'; ?></h6>
                <h3 class="text-black font-1 lh-1 fw-semibold"><?php if ($_SESSION['lan'] == 'CN') echo '上門照顧及私家看護服務'; else echo 'OUR SERVICES'; ?></h3>
                <p class="text-gray mx-auto" style="max-width: 768px;">
                    我們的目標是令你的家人可以生活得更獨立、更有尊嚴。我們的專業護理人員提供上門私家看護及長者照顧服務，
                    協助顧客於家中康復，令家人再無後顧之憂。由照顧長者個人護理，到提供專業醫療服務一應俱全，我們不同類型的居家護理方案能確保一切符合你的需要。
                </p>
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/image-600x400-1.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold">長者護理</h5>
                                <?php
                                if ($_SESSION['lan'] == 'CN') {
                                    ?>
                                    <p class="text-gray">
                                        基本至日常生活協助，複雜至為長期病患者提供看護服務，我們的護理人員都可以提供全面的上門長者照顧服務。能夠回應長者最逼切的需要之餘，也可成為長者的的良伴。</p>
                                    <?php
                                } else {
                                    ?>
                                    <p class="text-gray">From daily companionship to overnight nursing care, our
                                        caregivers can assist elderlies with personal care tasks (e.g bathing, lifting)
                                        and specialised medical care (e.g stoma care, home dialysis).</p>
                                    <?php
                                }

                                ?>

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
                                <h5 class="font-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '專科護理'; else echo 'Specialist Care'; ?></h5>
                                <?php
                                if ($_SESSION['lan'] == 'CN') {
                                    ?>
                                    <p class="text-gray">
                                        我們為中風、癌症、認知障礙症、長期臥床、糖尿病和心血管疾病人提供貼心的上門看護服務，包括臨時照顧、短期照顧、長期照顧、日間及夜間照顧。</p>
                                    <?php
                                } else {
                                    ?>
                                    <p class="text-gray">We provide elderlies and patients dealing with stroke, cancer,
                                        dementia, diabetes and cardiovascular diseases with the specialised support they
                                        need to improve and recover long-term.</p>
                                    <?php
                                }

                                ?>

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
                                <h5 class="font-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '復康護理'; else echo 'SRehabilitation Care'; ?></h5>
                                <?php
                                if ($_SESSION['lan'] == 'CN') {
                                    ?>
                                    <p class="text-gray">
                                        準備出院？我們的上門職業治療、物理治療和手術後看護服務助你的家人順利從醫院過渡到家中、設計個人復康計劃，預防併發症，重新自立。</p>
                                    <?php
                                } else {
                                    ?>
                                    <p class="text-gray">Ready for discharge? Our in-home physiotherapy, occupational
                                        therapy and post-operative care services can help your loved one regain their
                                        independence and recover with strength.</p>
                                    <?php
                                }

                                ?>
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
                                <h5 class="font-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '外購替補護理員'; else echo 'Medical Staffing'; ?></h5>
                                <?php
                                if ($_SESSION['lan'] == 'CN') {
                                    ?>
                                    <p class="text-gray">
                                        我們幫助公共和私人機構在 24 小時內配對相關專業護理人員和治療師。</p>
                                    <?php
                                } else {
                                    ?>
                                    <p class="text-gray">We help public and private organisations identify healthcare
                                        professional and therapist staffing relief within 24 hours.</p>
                                    <?php
                                }

                                ?>
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

    <!-- How It Work ? -->
    <section class="section bg-light">
        <div class="r-container">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col mb-3">
                    <div class="d-flex flex-column gap-3 h-100 justify-content-center">
                        <h3 class="font-1 lh-1 fw-bold fs-1 mb-3"><?php if ($_SESSION['lan']) echo "為你的家人找到最適合的護理服務"; else echo "START FINDING CARE FOR YOUR LOVED ONES"; ?></h3>
                        <div class="d-flex flex-column gap-5">
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <div class="d-flex flex-column">
                                    <?php
                                    if ($_SESSION['lan'] == 'EN') {
                                        ?>
                                        <p class="text-gray m-0">
                                            Fill in your contact information and one of our care specialists will reach
                                            out within 24 hours. Once we get a better understanding of your needs, we
                                            can start finding caregivers to look after your loved ones.
                                        </p>
                                        <?php
                                    } else {
                                        ?>
                                        <p class="text-gray m-0">
                                            你只需花10秒填妥以下表格，我們的護理專家將會在24小時內聯絡你以便了解家人的健康狀況，讓我們未來為你挑選最適合的護理人員提供上門照顧服務。
                                        </p>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="bg-accent-color rounded-4">
                        <div class="h-100 d-flex flex-column p-5">
                            <div class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-0 my-4"
                                 role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div
                                            class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-success">
                                        <i class="fa-solid fa-check f-36 text-success"></i>
                                        Your Message Successfully Send.
                                    </div>
                                    <button type="button"
                                            class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
                                            data-bs-dismiss="toast" aria-label="Close"><i
                                                class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-0"
                                 role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-2">
                                    <div
                                            class="toast-body f-18 d-flex flex-row gap-3 align-items-center text-danger">
                                        <i class="fa-solid fa-triangle-exclamation f-36 text-danger"></i>
                                        Something Wrong ! Send Form Failed.
                                    </div>
                                    <button type="button"
                                            class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
                                            data-bs-dismiss="toast" aria-label="Close"><i
                                                class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                            <form action="#"
                                  class="d-flex flex-column h-100 justify-content-center w-100 needs-validation mb-3 form"
                                  novalidate>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder="<?php if ($_SESSION['lan'] == 'CN') echo "名字*"; else echo "First Name*"; ?>"
                                                   required>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder="<?php if ($_SESSION['lan'] == 'CN') echo "姓氏*"; else echo "Last Name*"; ?>"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder="<?php if ($_SESSION['lan'] == 'CN') echo "聯絡電話*"; else echo "Contact Number*"; ?>"
                                                   required>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder="<?php if ($_SESSION['lan'] == 'CN') echo "電郵地址*"; else echo "Email Address*"; ?>"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected><?php if ($_SESSION['lan'] == 'CN') echo '主要護理需要'; else echo 'Primary Diagnosis'; ?></option>
                                        <option value="1"><?php if ($_SESSION['lan'] == 'CN') echo '癌症'; else echo 'Cancer'; ?></option>
                                        <option value="2"><?php if ($_SESSION['lan'] == 'CN') echo '中風'; else echo 'Stroke'; ?></option>
                                        <option value="3"><?php if ($_SESSION['lan'] == 'CN') echo '腦退化症'; else echo 'Dementia'; ?></option>
                                        <option value="3"><?php if ($_SESSION['lan'] == 'CN') echo '術後護理'; else echo 'Post-Operation'; ?></option>
                                        <option value="3"><?php if ($_SESSION['lan'] == 'CN') echo '老人看護/陪伴'; else echo 'Elder Care/Companionship'; ?></option>
                                        <option value="3"><?php if ($_SESSION['lan'] == 'CN') echo '精神病'; else echo 'Mental Illness'; ?></option>
                                        <option value="3"><?php if ($_SESSION['lan'] == 'CN') echo '其他'; else echo 'Other'; ?></option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn submit_form py-3">
                                        <?php if ($_SESSION['lan'] == 'CN') echo '查詢服務'; else echo 'Send Message'; ?>
                                    </button>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn submit_form py-3">
                                        <?php if ($_SESSION['lan'] == 'CN') echo '與我們WhatsApp'; else echo 'Chat with us in Whatsapp'; ?>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Types Of Care -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 justify-content-center text-center">
                <h3 class="text-black font-1 lh-1 fw-semibold">
                    <?php if ($_SESSION['lan'] == 'CN') echo '服務預約程序'; else echo 'How the Consultation Works'; ?>
                </h3>
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/new/icon/clipboard.png" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '第一步'; else echo 'Step 1'; ?></h5>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '花30秒填寫以上表格。'; else echo 'Take 30 seconds to fill in our request form.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/new/icon/avater.png" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '第二步'; else echo 'Step 2'; ?></h5>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '我們的護理專家會聯絡你確認細節。'; else echo 'One of our care specialists will reach out within 24 hours to
                                        confirm the details.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/new/icon/chat.png" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '第三步'; else echo 'Step 3'; ?></h5>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '你可選擇一個方便你的時間，我們會和你進行一個電話諮詢。'; else echo 'You\'ll be invited to a phone consultation at a time that suits you.'; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card p-3 with-border-bottom border-0 shadow rounded-3">
                            <img src="image/new/icon/give.png" class="card-img-top rounded-3" alt="...">
                            <div class="card-body ">
                                <h5 class="font-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '第四步'; else echo 'Step 4'; ?></h5>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '諮詢完成之後，我們將會為您配對最佳的護理人員。'; else echo 'Once the consultation is complete, we\'ll start to match you
                                        with caregivers that best meet your loved one\'s needs.'; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Seniorsy -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="col mb-3">
                    <div class="d-flex flex-column gap-3 p-3 h-100 justify-content-center">
                        <h3 class="text-black font-1 lh-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo 'LOVINGCARE如何運作'; else echo 'HOW LOVINGCARE WORKS'; ?>
                        </h3>
                        <div class="d-flex flex-lg-row flex-column">
                            <div class="col col-lg-8">
                                <?php
                                if ($_SESSION['lan'] == 'CN') {
                                    ?>
                                    <div class="d-flex flex-column">
                                        <p>
                                            透過融合科技和以人為本的思维，我們勇於改變現狀、精益求精，為長者提供更高質素的上門照顧方案。
                                        </p>
                                    </div>
                                    <div class="d-flex my-4">
                                        <a href="#" type="button" class="btn bg-accent-color p-3 font-2">>關於我們</a>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <div class="d-flex flex-column">
                                        <p>
                                            Learn how we use a high-tech and high-touch approach to deliver the best
                                            home care solutions wherever our patients are.
                                        </p>
                                    </div>
                                    <div class="d-flex my-4">
                                        <a href="#" type="button" class="btn bg-accent-color p-3 font-2">Home Care
                                            Services</a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5 pe-lg-3 position-relative">
                    <div class="overlay left"></div>
                    <div class="position-relative ps-5">
                        <img src="image/image-600x700-2.jpg" alt="" class="img-fluid rounded-3"
                             style="z-index: -2;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Article -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-lg-row flex-column text-lg-start text-center gap-lg-4 gap-2">
                    <?php
                    if ($_SESSION['lan'] == 'CN') {
                        ?>
                        <div class="col col-lg-3">
                            <h6 class="font-2 accent-color">為何選擇</h6>
                            <h3 class="font-1 lh-1 fw-bold fs-1 mb-3">LOVINGCARE</h3>
                        </div>
                        <div class="col col-lg-7">
                            <p class="text-gray">
                                我們不斷提升服務質素，務求能夠全面配合你的行程和需要，提供度身訂造的私家看護服務，讓您享受上門護理所提供的好處。</p>
                        </div>
                        <div class="col col-lg-2">
                            <a href="#" type="button" class="btn bg-accent-color p-3">上門護理收費</a>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="col col-lg-3">
                            <h6 class="font-2 accent-color">Why</h6>
                            <h3 class="font-1 lh-1 fw-bold fs-1 mb-3">Evercare</h3>
                        </div>
                        <div class="col col-lg-7">
                            <p class="text-gray">As Hong Kong's leading caregiver platform, our quality elderly care and
                                private nursing services are designed to fit seamlessly around individual needs and
                                routines.</p>
                        </div>
                        <div class="col col-lg-2">
                            <a href="#" type="button" class="btn bg-accent-color p-3">Home Care Pricing</a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '隨時隨地全年支援 '; else echo 'Hands-on Assistance Available 7 Days a Week'; ?></h6>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '快速應對問題是復康的關鍵，所以我們的護理人員可以每天提供服務，甚至夜更、週末和公眾假期。我們承諾每天守在你身邊，
                                隨時提供貼身的建議和上門護理服務，並根據你的財政預算為你選用最合理的私家看護收費價錢。'; else echo 'Responsiveness is critical when taking care of an elderly at
                                    home. Our caregivers are available daily, including weekends, public holidays,
                                    and even at night. Just let us know your needs and we can plan accordingly.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '擁有頂尖居家護理團隊'; else echo 'Access to the Top 1% of Care Professionals'; ?></h6>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '我們是香港最大的居家護理科技平台，現擁有超過20,000護理人員均具備多年經驗和專業訓練資格。全因我們有嚴謹的篩選過程，確保團隊成員都是行內最優秀的護理人員，讓你更安心地聘請私家看護人員。'; else echo 'We have over 20,000 health professionals, ranging from personal
                                    care workers, registered nurses to physiotherapists. Our caregivers are highly
                                    trained with decades of experience, and undergo a thorough vetting process.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '為你計劃現在與未來'; else echo 'Plan for Your Needs, Now and Into the Future'; ?></h6>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '長者和長期病人選擇居家復康或護理醫療服務更為普遍，無論您至親的狀況如何，我們至力為每位客人設計專屬照顧計劃。
                                '; else echo 'Treating patients with cancer or dementia require specialised
                                    nursing care. We design a home care plan for each client to help you understand
                                    the personal and financial realities of caring for elderlies.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '為你計劃現在與未來'; else echo 'Simpler Way to Hire Caregiver Support'; ?></h6>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '長者和長期病人選擇居家復康或護理醫療服務更為普遍，無論您至親的狀況如何，我們至力為每位客人設計專屬照顧計劃。'; else echo 'By booking a free consultation, our team can help you diagnose the needs of your loved one and arrange the right type of caregiver. Even if you are looking for short-term relief, we have a variety of home care pricing plans to choose from.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '服務獲過千客戶好評 '; else echo 'Rated \'Best\' by You, Trusted by Thousands'; ?></h6>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '我們至今已提供超過100,000小時的私家看護服務。我們的服務廣受好評，於Google上的評分高達4.9/5星。客戶的信任和高度評價，證明了我們的服務質素，令你更安心。'; else echo 'Rated 4.9 out of 5 on Google, we have delivered over 100,000+
                                    hours of private nursing care to happy customers, so you can trust us to help
                                    you find the right care with confidence.'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <!--<img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">-->
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold"><?php if ($_SESSION['lan'] == 'CN') echo '服務細節皆由你話事'; else echo 'Choose the Who, What, When for Your Care'; ?></h6>
                                <p class="text-gray"><?php if ($_SESSION['lan'] == 'CN') echo '隨著家人的需要改變，你可以自由調整護理服務的要求。無論需要長期、短期上門照顧或兼職私家看護服務，我們都能夠隨時配合。'; else echo 'Whether you are looking for long or short-term care, you can
                                    adjust your level of service, amount of support and type of caregiver required,
                                    at any time.'; ?></p>
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
                        <h3 class="text-black font-1 lh-1 fw-semibold"><?php if($_SESSION['lan'] == 'CN') echo '為何上門照顧是一個更好的選擇？'; else echo 'Why Home Care
                            Is a Better Option?';?></h3>
                        <p class="text-gray">
                            <?php
                            if($_SESSION['lan'] == 'CN')
                                echo '不少長者患有多項長期疾病，又或是曾接受手術，無法照顧自己的日常生活。如果家中有長期病人、長者病患、或手術後需要特別專人照顧，我們建議你聘請私家看護、保健員或起居照顧員，提供上門護理服務。無論需要長期或短期照顧，Evercare能隨時為你配對合適的護理人員。';
                            else
                                echo 'Because there is no place like home. Over 90% of Hong Kong’s elders prefer home care because
                            they want to:';
                            ?>

                        </p>
                        <div class="row">
                            <div class="mb-2">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right accent-color"></i>
                                    <span class="text-gray"><?php if($_SESSION['lan'] == 'CN') echo '留在家人身邊'; else echo 'Stay close to their families';?></span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right accent-color"></i>
                                    <span class="text-gray"><?php if($_SESSION['lan'] == 'CN') echo '保持獨立自主'; else echo 'Maintain autonomy over their own lives';?></span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right accent-color"></i>
                                    <span class="text-gray"><?php if($_SESSION['lan'] == 'CN') echo '生活不受限制'; else echo 'Live by their own rules';?></span>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-solid fa-circle-arrow-right accent-color"></i>
                                    <span class="text-gray"><?php if($_SESSION['lan'] == 'CN') echo '避免長住院舍'; else echo 'Avoid being locked away in a facility';?></span>
                                </div>
                            </div>
                        </div>
                        <div class="my-4 border-bottom w-100"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What They Say ? -->
    <section class="section">
        <div class="r-container">
            <div class="overflow-hidden rounded-4">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col bg-accent-color text-white ">
                        <div class="d-flex flex-column gap-3 p-5 h-100 justify-content-center">
                            <h6 class="font-2 ">What They Say ?</h6>
                            <h3 class="font-1 lh-1 fw-bold fs-1">Love To Serve You, With Compassionate Care</h3>
                            <p class="fs-6">
                                Sed congue mollis orci et tempus. Etiam semper elit id turpis ornare posuere a sit
                                amet elit. Nulla facilisi. Nullam augue lectus, lobortis et risus id, ornare
                                porttitor arcu.
                            </p>
                            <div>
                                <a href="#" type="button" class="btn bg-accent-color-1 p-3">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col bg-light text-white">
                        <div class="overflow-hidden h-100 d-flex align-items-center">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column gap-3 p-4 text-black">
                                            <ul class="d-flex flex-row gap-2 p-0 m-0 text-warning"
                                                style="list-style: none;">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p>Nulla mollis tristique blandit. Nam at accumsan felis, vitae pharetra
                                                nunc. Morbi imperdiet dui eu facilisis vestibulum. Sed dignissim non
                                                nibh auctor finibus. Integer mollis varius maximus.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row gap-3">
                                                    <img src="image/image-400x400-1.jpg" alt=""
                                                         class="img-fluid rounded-circle" width="70" height="70">
                                                    <div class="d-flex flex-column h-100 justify-content-center">
                                                        <span class="text-black">Elsa Verina</span>
                                                        <span class="text-gray">Designation</span>
                                                    </div>
                                                </div>
                                                <div class="accent-color" style="font-size: 3rem;">
                                                    <i class="fa-solid fa-quote-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column gap-3 p-4 text-black">
                                            <ul class="d-flex flex-row gap-2 p-0 m-0 text-warning"
                                                style="list-style: none;">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p>Nulla mollis tristique blandit. Nam at accumsan felis, vitae pharetra
                                                nunc. Morbi imperdiet dui eu facilisis vestibulum. Sed dignissim non
                                                nibh auctor finibus. Integer mollis varius maximus.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row gap-3">
                                                    <img src="image/image-400x400-2.jpg" alt=""
                                                         class="img-fluid rounded-circle" width="70" height="70">
                                                    <div class="d-flex flex-column h-100 justify-content-center">
                                                        <span class="text-black">Dyas Kardinal</span>
                                                        <span class="text-gray">Designation</span>
                                                    </div>
                                                </div>
                                                <div class="accent-color" style="font-size: 3rem;">
                                                    <i class="fa-solid fa-quote-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column gap-3 p-4 text-black">
                                            <ul class="d-flex flex-row gap-2 p-0 m-0 text-warning"
                                                style="list-style: none;">
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                            </ul>
                                            <p>Nulla mollis tristique blandit. Nam at accumsan felis, vitae pharetra
                                                nunc. Morbi imperdiet dui eu facilisis vestibulum. Sed dignissim non
                                                nibh auctor finibus. Integer mollis varius maximus.
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row gap-3">
                                                    <img src="image/image-400x400-3.jpg" alt=""
                                                         class="img-fluid rounded-circle" width="70" height="70">
                                                    <div class="d-flex flex-column h-100 justify-content-center">
                                                        <span class="text-black">Putri Maha</span>
                                                        <span class="text-gray">Designation</span>
                                                    </div>
                                                </div>
                                                <div class="accent-color" style="font-size: 3rem;">
                                                    <i class="fa-solid fa-quote-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Article -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-lg-row flex-column text-lg-start text-center gap-lg-4 gap-2">
                    <div class="col col-lg-5">
                        <h3 class="text-black font-1 lh-1 fw-semibold"><?php if($_SESSION['lan'] == 'CN') echo '關於居家護理'; else echo 'More on Home Care';?></h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3">
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <img src="image/image-600x400-5.jpg" class="card-img-top" alt="...">
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">Cherishing Life, Bringing Independence A Little
                                    Closer To Home</h6>
                                <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Integer tincidunt maximus malesuada. Quisque ut ipsum…</p>
                                <a type="button" href="#" class="btn bg-accent-color py-3 px-4 text-white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <img src="image/image-600x400-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">Connected Living Strives To Curb Loneliness Amongst
                                    Seniors</h6>
                                <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Integer tincidunt maximus malesuada. Quisque ut ipsum…</p>
                                <a type="button" href="#" class="btn bg-accent-color py-3 px-4 text-white">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card border border-light-subtle">
                            <img src="image/image-600x400-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body px-3 py-4">
                                <h6 class="font-1 lh-1 fw-bold">Metabolism Changes With Age, Just Not When You Might
                                    Think</h6>
                                <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Integer tincidunt maximus malesuada. Quisque ut ipsum…</p>
                                <a type="button" href="#" class="btn bg-accent-color py-3 px-4 text-white">Learn
                                    More</a>
                            </div>
                        </div>
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