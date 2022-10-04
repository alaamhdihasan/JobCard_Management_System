<!DOCTYPE html>
<html lang="ar">

<head>

    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('admin/assets/css/stylereports_003.css'); ?> " />

    <title>Jobcard</title>
</head>

<body dir="rtl">

    <header>
        <div class="columnheader1">
            جمهورية العراق <br> ديوان الوقف الشيعي <br> العتبة العباسية <br>قسم الاليات
        </div>
        <div class="columnheader">
            <img src="admin/assets/img/attaba.png" width="80" height="80">
        </div>
        <div class="columnheader2">
            مراب الشهيد ماهر
            <br>
            <?= $ReportTitle ?>
            <br>
            <?php echo date("d-m-Y"); ?>
        </div>
    </header>

    <hr> 
    <p>تم انجاز عمل الصيانة لهذه العجلة في ورش مراب الشهيد ماهر رحمه الل.. التابع لقسم الاليات العتبة العباسية المقدسة.</p>
        
    <div class="body1">رقم بطاقة العمل : <span class="valuefont" ><?= $getjobcard[0]->Jcm_JcNumber ?></span> </div>
    <div class="body2">رقم العجلة : </span><span  class="valuefont"><?= $getjobcard[0]->Jcm_CarNo ?></span> </div>
    <br>
    <div class="body1">نوع العجلة : </span><span class="valuefont"><?= $getjobcard[0]->Jcm_CarType ?></span> </div> 
    <div class="body2">لون العجلة : </span><span class="valuefont"><?= $getjobcard[0]->Jcm_CarColor ?></span> </div>
    <br>
    <div class="body1">اسم العجلة : </span><span class="valuefont"><?= $getjobcard[0]->Jcm_ModelName ?></span> </div>
    <div class="body2">الشركة المصنعة : </span><span class="valuefont"><?= $getjobcard[0]->Jcm_Company ?></span> </div> 
    <br>
    <div class="body1">تاريخ الدخول : </span><span class="valuefont"><?= $getjobcard[0]->Jcm_DateIn ?></span>  </div>
    <div class="body2">تاريخ الخروج : </span><span class="valuefont"><?= $getjobcard[0]->Jcm_DateOut ?></span>  </div>
    <br>
    <div class="body1">العائدية : </span><span class="valuefont"><?= $getjobcard[0]->Jcm_Customer ?></span>  </div>
    <br>

    <div class="columnsfooter1">
        ملاحظ العمل
        <hr>
        <br>
        الاسم :
        <br>
        رقم الباج :
        <br>
        التوقيع :
    </div>

    <div class="columnsfooter2">
        سائق العجلة
        <hr>
        <br>
        الاسم :
        <br>
        رقم الباج :
        <br>
        التوقيع :
    </div>

    <div class="columnsfooter3">
        <hr>
        العتبة العباسية المقدسة // قسم الاليات // شعبة التطوير-هاتف سيسكو: 1793   مراب الشهيد ماهر-هاتف سيسكو: 1858
    </div>
</body>

</html>