<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('admin/assets/css/stylereports_001.css'); ?> " />

    <title>Customers Summary</title>
</head>

<body>
    <header>
        <div class="columnheader1" style="font-size:0.8rem ;">
            REPUBLIC OF IRAQ <br> SHIA ENDOWMENT DIVAN <br> ALABBAS HOLY SHRIN
        </div>
        <div class="columnheader" style="font-size:0.8rem ;">
            DEPARTMENT OF MENCAHNISMS <br> REPORT OF <br> <?= $ReportTitle ?>
            <br> <?= $MonthName[0]->MonthName ?> - <?= $Year ?>
        </div>
    </header>
    <hr>
    <table class="table cs_table borderd">
        <thead>
            <tr>
                <td>Customers</td>
                <td>Oil_Liquid</td>
                <td>Wheels</td>
                <td>Maintenance</td>
                <td>Mechanical</td>
                <td>Dyeing</td>
                <td>Electric</td>
                <td>Refrigeration</td>
                <td>Plumbing_Welding</td>
                <td>Packaging</td>

            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($getCustomersWorkShopsSummary); $i++) : ?>
                <tr>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Jcm_Customer ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Oil_and_Liquid ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Wheels ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Maintenance ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Mechanical ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Dyeing ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Electric ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Refrigeration ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Plumbing_welding ?></td>
                    <td><?= $getCustomersWorkShopsSummary[$i]->Packaging ?></td>

                </tr>


            <?php endfor; ?>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="10" style="text-align: center;">
                    Report of WorkShops According to Customers...
                </td>

            </tr>
        </tfoot>
    </table>





</body>

</html>