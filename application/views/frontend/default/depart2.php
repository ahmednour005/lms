
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.cont {
  max-width: 640px;
  margin: 0 auto;
}

.acc {
  margin: 20px 0;
  overflow: hidden;
  padding: 0;
}

.acc li {
    display: block;
  list-style-type: none;
  padding: 0;
}

.acc_ctrl {
  background: #FFFFFF;
  border: none;
  border-bottom: solid 1px #F2F2F2;
  cursor: pointer;
  display: block;
  outline: none;
  padding: 2em;
  position: relative;
  text-align: center;
  width: 100%;
}

.acc_ctrl:before {
  background: #44596B;
  content: '';
  height: 2px;
  margin-right: 37px;
  position: absolute;
  right: 0;
  top: 50%;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  width: 14px;
}

.acc_ctrl:after {
  background: #44596B;
  content: '';
  height: 2px;
  margin-right: 37px;
  position: absolute;
  right: 0;
  top: 50%;
  width: 14px;
}

.acc_ctrl.active:before {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}

.acc_ctrl.active h2, .acc_ctrl:focus h2 {
  position: relative;
}

.acc_panel {
  background: #F2F2F2;
  display: none;
  overflow: hidden;
}

    </style>
</head>
<body>

<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                <?php echo 'قطاع التحليل الاحصائي'  ?>
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    <?php echo 'قطاع التحليل الاحصائي' ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<div class="container">
<h1  style="text-align: center; color:#14aeba; margin-top:20px">قطاع التحليل الاحصائي</h1>
<div class="row">
        <div class="col-12">
        <ul class="acc">
    <li>
      <button class="acc_ctrl"><h2>  إنشاء وتطوير الإحصاء </h2></button>
      <div class="acc_panel">
        <p>GM Holden Ltd, commonly known as Holden, is an Australian automaker that operates in Australasia and is headquartered in Port Melbourne, Victoria. The company was founded in 1856 as a saddlery manufacturer in South Australia.</p>
      </div>
    </li>

    <li>
      <button class="acc_ctrl"><h2>  المهارات الإحصائية في إعداد التقارير الإدارية  </h2></button>
      <div class="acc_panel">
        <p>The Ford Motor Company (commonly referred to as simply Ford) is an American multinational automaker headquartered in Dearborn, Michigan, a suburb of Detroit. It was founded by Henry Ford and incorporated on June 16, 1903.</p>
      </div>
    </li>
    <li>
      <button class="acc_ctrl"><h2>الإحصاء ودوره في التخطيط والمتابعة واتخاذ القرارات</h2></button>
      <div class="acc_panel">
        <p>Toyota Motor Corporation is a Japanese automotive manufacturer which was founded by Kiichiro Toyoda in 1937 as a spinoff from his father's company Toyota Industries, which is currently headquartered in Toyota, Aichi Prefecture, Japan.</p>
      </div>
    </li>
    <li>
      <button class="acc_ctrl"><h2>مراقبة الجودة إحصائيا باستخدام الحاسب الآلي  </h2></button>
      <div class="acc_panel">
        <p>Toyota Motor Corporation is a Japanese automotive manufacturer which was founded by Kiichiro Toyoda in 1937 as a spinoff from his father's company Toyota Industries, which is currently headquartered in Toyota, Aichi Prefecture, Japan.</p>
      </div>
    </li>
    <li>
      <button class="acc_ctrl"><h2> تحليل البيانات الإحصائية باستخدام برنامج  </h2></button>
      <div class="acc_panel">
        <p>Toyota Motor Corporation is a Japanese automotive manufacturer which was founded by Kiichiro Toyoda in 1937 as a spinoff from his father's company Toyota Industries, which is currently headquartered in Toyota, Aichi Prefecture, Japan.</p>
      </div>
    </li>
    <li>
      <button class="acc_ctrl"><h2>مراقبة الجودة إحصائيا باستخدام الحاسب الآلي  </h2></button>
      <div class="acc_panel">
        <p>Toyota Motor Corporation is a Japanese automotive manufacturer which was founded by Kiichiro Toyoda in 1937 as a spinoff from his father's company Toyota Industries, which is currently headquartered in Toyota, Aichi Prefecture, Japan.</p>
      </div>
    </li>
    <li>
      <button class="acc_ctrl"><h2>إنشاء وتطوير نظم الإحصاء</h2></button>
      <div class="acc_panel">
        <p>Toyota Motor Corporation is a Japanese automotive manufacturer which was founded by Kiichiro Toyoda in 1937 as a spinoff from his father's company Toyota Industries, which is currently headquartered in Toyota, Aichi Prefecture, Japan.</p>
      </div>
    </li>
    <li>
      <button class="acc_ctrl"><h2>المهارات الإحصائية في إعداد التقارير الإدارية  </h2></button>
      <div class="acc_panel">
        <p>Toyota Motor Corporation is a Japanese automotive manufacturer which was founded by Kiichiro Toyoda in 1937 as a spinoff from his father's company Toyota Industries, which is currently headquartered in Toyota, Aichi Prefecture, Japan.</p>
      </div>
    </li>
    <li>
      <button class="acc_ctrl"><h2> استخدام برامج الإكسل في التحليل الإحصائي للبيانات</h2></button>
      <div class="acc_panel">
        <p>Toyota Motor Corporation is a Japanese automotive manufacturer which was founded by Kiichiro Toyoda in 1937 as a spinoff from his father's company Toyota Industries, which is currently headquartered in Toyota, Aichi Prefecture, Japan.</p>
      </div>
    </li>
  </ul>
        </div>
    </div>

</div>

<script>
    $(function() {
  $('.acc_ctrl').on('click', function(e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).next()
      .stop()
      .slideUp(300);
    } else {
      $(this).addClass('active');
      $(this).next()
      .stop()
      .slideDown(300);
    }
  });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>
</html>