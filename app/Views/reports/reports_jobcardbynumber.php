<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('admin/assets/css/stylereports_002.css'); ?> " />

    <title>Jobcard</title>
    <style>
        .titlefont{
            font-size: 0.8rem;
        }
        .valuefont{
            font-size: 0.8rem;
            color: red;
        }
    </style>
</head>

<body>

    <header>
        <div class="columnheader1">
            REPUBLIC OF IRAQ <br> SHIA ENDOWMENT DIVAN <br> ALABBAS HOLY SHRIN <br>DEPARTMENT OF MENCAHNISMS
        </div>
        <div class="columnheader">
            REPORT OF <br> <?= $ReportTitle ?>
        </div>
    </header>
    <hr>
   
            <span class="titlefont">JobCard Number :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_JcNumber ?></span> |
            <span class="titlefont">Car Number :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_CarNo ?></span> |
            <span class="titlefont">Car Type :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_CarType ?></span> |
            <span class="titlefont">Car Name :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_ModelName ?></span> |
            <span class="titlefont">Car Color :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_CarColor ?></span> |
            <span class="titlefont">Company :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_Company ?></span> | <br>
            <span class="titlefont">VinNo :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_VinNo ?></span> |
            <span class="titlefont">Car Engine :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_CarEngine ?></span> | 
            <span class="titlefont">Car Model :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_CarModel ?></span> | 
            <span class="titlefont">Car Meter :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_CarKM ?></span> | 
            <hr>
            <span class="titlefont">Customer :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_Customer ?></span> | 
            <span class="titlefont">Driver Name :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_DriverName ?></span> | 
            <span class="titlefont">Date In :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_DateIn ?></span> | 
            <span class="titlefont">Date Out :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_DateOut ?></span> | 
            <span class="titlefont">Ch :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_ChTotal ?></span> | 
            <span class="titlefont">Item Price :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_ItemPriceTotal ?></span> | 
            <span class="titlefont">Total :</span><span class="valuefont"><?= $getjobcard[0]->Jcm_JcTotal ?></span> | 
            <hr>
            
 
    <table class="table cs_table borderd">
        <thead>
            <tr>
                <td>WorkShop</td>
                <td>Item Name</td>
                <td>Part Number</td>
                <td>QY</td>
                <td>Unit_Price</td>
                <td>CH</td>
                <td>Total</td>
                <td>Workers</td>
                <td>Notes</td>

            </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < count($getjobcard); $i++) : ?>
                <tr>
                    <td><?= $getjobcard[$i]->Jcm2_WorkShop ?></td>
                    <td><?= $getjobcard[$i]->Jcm2_ItemName ?></td>
                    <td><?= $getjobcard[$i]->Jcm2_PartNumber ?></td>
                    <td><?= $getjobcard[$i]->Jcm2_Quantity ?></td>
                    <td><?= $getjobcard[$i]->Jcm2_UnitPrice ?></td>
                    <td><?= $getjobcard[$i]->Jcm2_CH ?></td>
                    <td><?= $getjobcard[$i]->Jcm2_Jc2Total ?></td>
                    <td><?= $getjobcard[$i]->Jcm2_Worker ?></td>
                    <td><?= $getjobcard[$i]->Jcm2_Notes ?></td>

                </tr>


            <?php endfor; ?>

        </tbody>
        <tfoot>
          
    </table>





</body>

</html>