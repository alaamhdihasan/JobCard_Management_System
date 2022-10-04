<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php

        use Mpdf\Tag\Section;

        $request = service('request');
        ?>
        <li class="nav-item" id="Login_Dashboard">
            <a href="<?= base_url('admins') ?>" class="nav-link <?= !$request->uri->getSegment(1) ? 'active' : null; ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item" id="Login_Users">
            <a href="<?= base_url('users') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'users' ? 'active' : null; ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>Users</p>
            </a>
        </li>
        <div class="nav-item">

            <a href="" class="nav-link  dropdown-toggle " id="Login_ConstantEntries" data-bs-toggle="dropdown" aria-expanded="false" <?= $request->uri->getSegment(1) == '' ? 'active' : null; ?>>
                <i class="nav-icon fas fa-atlas"></i>
                <p>Constant Entries</p>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Login_ConstantEntries">
                <li class="nav-item" id="Login_State">
                    <a href="<?= base_url('state') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'state' ? 'active' : null; ?>">
                     &nbsp;&nbsp;<i class="nav-icon fas fa-satellite"></i>
                        <p>State</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Brand">
                    <a href="<?= base_url('brand') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'brand' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-code-branch"></i>
                        <p>Brand</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Color">
                    <a href="<?= base_url('color') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'color' ? 'active' : null; ?>">
                    &nbsp;&nbsp; <i class="nav-icon fas fa-oil-can"></i>
                        <p>Color</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Permission">
                    <a href="<?= base_url('permission') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'permission' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-book"></i>
                        <p>Permission</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_CarType">
                    <a href="<?= base_url('cartype') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'carType' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-book"></i>
                        <p>CarType</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Company">
                    <a href="<?= base_url('company') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'company' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-book"></i>
                        <p>Company</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Kind">
                    <a href="<?= base_url('kind') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'kind' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-book"></i>
                        <p>Kind</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Model">
                    <a href="<?= base_url('model') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'model' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-book"></i>
                        <p>Model</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Side">
                    <a href="<?= base_url('side') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'side' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-book"></i>
                        <p>Side</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Unit">
                    <a href="<?= base_url('unit') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'unit' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-book"></i>
                         <p>Unit</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Specialization">
                    <a href="<?= base_url('specialization') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'specialization' ? 'active' : null; ?>">
                    &nbsp;&nbsp; <i class="nav-icon fas fa-book"></i>
                        <p>Specialization</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_City">
                    <a href="<?= base_url('city') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'City' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-city"></i>
                        <p>City</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_WorkShops">
                    <a href="<?= base_url('workshop') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'workShops' ? 'active' : null; ?>">
                    &nbsp;&nbsp;<i class="nav-icon fas fa-box-open"></i>
                        <p>WorkShops</p>
                    </a>
                </li>

            </ul>
        </div>
        <div class="nav-item">

            <a href="" class="nav-link  dropdown-toggle " id="Login_InfoMenu" data-bs-toggle="dropdown" aria-expanded="false" <?= $request->uri->getSegment(1) == '' ? 'active' : null; ?>>
                <i class="nav-icon fas fa-info"></i>
                <p>Info Menue</p>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Login_InfoMenu">
                <li class="nav-item" id="Login_WorkshopPlace">
                    <a href="<?= base_url('workshopplace') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'workshopplace' ? 'active' : null; ?>">
                    &nbsp;&nbsp;&nbsp; <i class="nav-icon fas fa-toolbox"></i>
                        <p>Workshop Place</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Workers">
                    <a href="<?= base_url('workers') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'workers' ? 'active' : null; ?>">
                    &nbsp;&nbsp;&nbsp; <i class="nav-icon fas fa-briefcase"></i>
                        <p>Workers</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Currency">
                    <a href="<?= base_url('currency') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'currency' ? 'active' : null; ?>">
                    &nbsp;&nbsp;&nbsp; <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>Currency</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_SalingGroup">
                    <a href="<?= base_url('groupsaling') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'groupSaling' ? 'active' : null; ?>">
                    &nbsp;&nbsp;&nbsp; <i class="nav-icon fas fa-layer-group"></i>
                        <p>Saling Group</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Accounts">
                    <a href="<?= base_url('accounts') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'accounts' ? 'active' : null; ?>">
                    &nbsp;&nbsp;&nbsp; <i class="nav-icon fas bi-bookmark-heart"></i>
                        <p> Accounts</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_Customers">
                    <a href="<?= base_url('customer') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'customer' ? 'active' : null; ?>">
                    &nbsp;&nbsp;&nbsp;&nbsp; <i class="nav-icon fas bi-person-check"></i>
                        <p> Customers</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_JobCardOpen">
                    <a href="<?= base_url('jobcardopen') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'jobcardopen' ? 'active' : null; ?>">
                    &nbsp;&nbsp;&nbsp;&nbsp; <i class="nav-icon fas fa-briefcase"></i>
                        <p> JobCard Open</p>
                    </a>
                </li>
            </ul>
        </div>





        <li class="nav-item" id="Login_JobCard">
            <a href="<?= base_url('jobcardmainlydaily') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'jobcarddaily' ? 'active' : null; ?>">
                <i class="nav-icon fas bi-file-slides"></i>
                <p> JobCard </p>
            </a>
        </li>

        <li class="nav-item" id="Login_Orders">
            <a href="<?= base_url('orderone') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'orderone' ? 'active' : null; ?>">
                <i class="nav-icon fas bi-credit-card"></i>
                <p> Orders </p>
            </a>
        </li>

        <li class="nav-item" id="Login_Reports">
            <a href="<?= base_url('reports') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'reports' ? 'active' : null; ?>">
                <i class="nav-icon fas fa-chart-area"></i>
                <p> Reports </p>
            </a>
        </li>

        <div class="nav-item">

            <a href="" class="nav-link  dropdown-toggle " id="Login_InfoMenu" data-bs-toggle="dropdown" aria-expanded="false" <?= $request->uri->getSegment(1) == '' ? 'active' : null; ?>>
                <i class="nav-icon fas fa-info"></i>
                <p>Artificial Intelligence</p>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="Login_InfoMenu">
                <li class="nav-item" id="Login_TestCustomer">
                    <a href="<?= base_url('ai') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'ai' ? 'active' : null; ?>">
                       &nbsp; <i class="nav-icon fas fa-computer-classic"></i>
                        <p>Test_Customer</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_TestCarType">
                    <a href="<?= base_url('ai-cartype') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'ai-cartype' ? 'active' : null; ?>">
                       &nbsp; <i class="nav-icon fas fa-computer-classic"></i>
                        <p>Test_CarType</p>
                    </a>
                </li>
                <li class="nav-item" id="Login_TestCarType">
                    <a href="<?= base_url('ai-itemprice') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'ai-itemprice' ? 'active' : null; ?>">
                       &nbsp; <i class="nav-icon fas fa-computer-classic"></i>
                        <p>Test_ItemPrice</p>
                    </a>
                </li>
                
            </ul>
        </div>

    </ul>
</nav>


<?= $this->Section('scripts') ?>
<script>
    $(document).ready(function() {


        $.ajax({
            type: "GET",
            url: "<?php echo base_url('users-getPermissions') ?>",
            success: function(response) {
                // console.log(response);
                $.each(response, function(indexInArray, valueOfElement) {
                    if (!valueOfElement.P_Dashboard) {
                        $("#Login_Dashboard a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Users) {
                        $("#Login_Users a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_JobCard) {
                        $("#Login_JobCard a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Orders) {
                        $("#Login_Orders a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Reports) {
                        $("#Login_Reports a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_State) {
                        $("#Login_State a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Brand) {
                        $("#Login_Brand a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Color) {
                        $("#Login_Color a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Permission) {
                        $("#Login_Permission a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_CarType) {
                        $("#Login_CarType a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Company) {
                        $("#Login_Company a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Kind) {
                        $("#Login_Kind a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Model) {
                        $("#Login_Model a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Side) {
                        $("#Login_Side a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Unit) {
                        $("#Login_Unit a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Specialization) {
                        $("#Login_Specialization a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_City) {
                        $("#Login_City a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_WorkShops) {
                        $("#Login_WorkShops a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_WorkShopPlace) {
                        $("#Login_WorkShopPlace a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Workers) {
                        $("#Login_Workers a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Currency) {
                        $("#Login_Currency a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_SalingGroup) {
                        $("#Login_SalingGroup a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Accounts) {
                        $("#Login_Accounts a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    if (!valueOfElement.P_Customers) {
                        $("#Login_Customers a").click(function(e) {
                            e.preventDefault();

                        });               
                    }
                    // if (!valueOfElement.P_TestCustomer) {
                    //     $("#Login_TestCustomer a").click(function(e) {
                    //         e.preventDefault();

                    //     });               
                    // }
                });

            }
        });


    });
</script>

<?= $this->endSection() ?>