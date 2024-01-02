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
    <!-- How It Work ? -->
    <section class="section bg-light">
        <div class="r-container">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="bg-accent-color rounded-4">
                        <div class="h-100 d-flex flex-column p-5 text-white">
                            <h3>請留下您的聯絡方法</h3>
                            <form action="#"
                                  class="d-flex flex-column h-100 justify-content-center w-100 needs-validation mb-3 form"
                                  novalidate>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">姓名</label>
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder=""
                                                   required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">聯絡電話 <span class="text-dark">*</span></label>
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder=""
                                                   required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">電郵</label>
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder=""
                                                   required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">您希望我們如何回覆您?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    電話 Phone Call
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    WhatsApp
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    Email
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">我們將於下一個工作天聯絡您。最適合您的時間是?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    上午 (09:00 - 13:00)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    下午 (13:00 - 18:30)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    Other:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">你對那一種護理服務有興趣？</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    海外護理員
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    本地護理員
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    長者社區照顧服務券
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    腹膜透析
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    個案管理
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    加入護理團隊
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">其他問題</label>
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder=""
                                                   required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">閣下從那種途徑得知本公司? <span class="text-dark">*</span></label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    朋友介紹
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    Facebook
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    報紙 / 雜誌 / 宣傳單張
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    上網搜尋
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    其他媒體
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       style="width: 15px;">
                                                <label class="form-check-label">
                                                    Other:
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="mb-1">上網搜尋 字眼</label>
                                            <input type="text" class="form-control py-2 px-4" name="name"
                                                   placeholder=""
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn submit_form px-5 py-3" style="border: 1px solid white;">
                                        Submit
                                    </button>
                                </div>
                            </form>

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