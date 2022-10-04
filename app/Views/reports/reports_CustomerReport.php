<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('admin/assets/css/stylereports_001.css'); ?> " />

    <title>Customers Summary</title>
</head>

<body>

    <header>
        <div class="columnheader1">
            REPUBLIC OF IRAQ <br> SHIA ENDOWMENT DIVAN <br> ALABBAS HOLY SHRIN <br>DEPARTMENT OF MENCAHNISMS
        </div>
        <div class="columnheader">
            REPORT OF <br> <?= $ReportTitle ?>
            <br> <?= $MonthName[0]->MonthName ?> - <?= $Year ?> 
            <br> <?php $getCustomerReport[0]->Jcm_Customer ?> 
        </div>
    </header>
    <hr>

    <table class="table cs_table borderd">
        <thead>
            <tr>
                <td>Car Number</td>
                <td>Car Type</td>
                <td>Items Total</td>
                <td>Wages Total</td>
                <td>Totals</td>

            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($getCustomerReport); $i++) : ?>
                <tr>
                    <td><?= $getCustomerReport[$i]->Jcm_CarNo ?></td>
                    <td><?= $getCustomerReport[$i]->Jcm_CarType ?></td>
                    <td><?= $getCustomerReport[$i]->Jcm_ItemTotal ?></td>
                    <td><?= $getCustomerReport[$i]->Jcm_ChTotal ?></td>
                    <td><?= $getCustomerReport[$i]->Jcm_JcTotal ?></td>

                </tr>


            <?php endfor; ?>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="2" style="text-align: center;">Total</td>
                <td><?= $Total[0]->ITotal ?></td>
                <td><?= $Total[0]->WTotal ?></td>
                <td><?= $Total[0]->JcTotal ?></td>
            </tr>
        </tfoot>
    </table>





</body>

</html>