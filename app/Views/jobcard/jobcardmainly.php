<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <!-- start JobCard Mainly Table-->
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header text-white" style="background-color: #343A40;">

                    <button class="btn btn-primary btn-sm m-1 float-end jobcardmainlydailyAdd">Add New JobCard
                    </button>

                    <h4 style="color: white;"><?= $title ?> </h4>


                </div>
                <div class="card-body">
                    <div class="ms-12 row pt-1 pb-3">
                        <label for="" class="col-sm-auto col-form-label">Filter :
                        </label>
                        <div class="col-sm-3">
                            <select name="Jc_Filter" id="Jc_Filter" class="col-sm-11 col-form-label form-select Jc_Filter">
                                <option value="Inactive_Today">Inactive Today</option>
                                <option value="Active_Today">Active Today</option>
                                <option value="Inactive_Yesterday">Inactive Yesterday</option>
                                <option value="Active_Yesterday">Active Yesterday</option>
                                <option value="Inactive_ThisMonth">Inactive This Month</option>
                                <option value="Active_ThisMonth">Active This Month</option>
                                <option value="Inactive_LastMonth">Inactive Last Month</option>
                                <option value="Active_LastMonth">Active Last Month</option>
                                <option value="All_JobCard">All JobCard</option>
                            </select>
                        </div>

                    </div>
                    <!-- <script>
                    console.log($('#Jc_Filter option:selected').text());
                </script> -->

                    <table id="jobcardmainlydaily_data" class="table table-bordered table-striped jobcardmainlydaily_data" cellspacing="0" width="100%">
                        <thead class="dataheader_jobcardmainlydaily table-dark">
                            <tr>
                                <td>Jobcard No</td>
                                <td>Cusomer</td>
                                <td>Car No</td>
                                <td>Car Type</td>
                                <td>Date In</td>
                                <td>T_Price</td>
                                <td>T_Ch</td>
                                <td>Total</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_jobcardmainlydaily">

                        </tbody>
                    </table>
                    <div class="col-md-12" id="buttonHolder"></div>
                </div>
            </div>
        </div>
        <!-- end JobCard Mainly Table-->

        <!-- start JobCard mainly Form.... -->
        <div class="col-md-12 mt-5">
            <div class="card jobcardmainlydailyaction" id="jobcardmainlydailyaction">
                <div class="card-header text-white" style="background-color: #343A40;">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end jobcardmainlydailyClose">close
                    </button>
                    <h4 style="color: white;" id="card_jobcardmainlydailytitle" class="card_jobcardmainlydailytitle"> </h4>
                </div>
                <div class="card-body ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="Jcm_ID" id="Jcm_ID" class="form-control Jcm_ID" hidden>
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> jobcard NO. :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_JcNumber" id="Jcm_JcNumber" class="form-control Jcm_JcNumber" autocomplete="off" disabled style="border:gainsboro 1px solid;">
                                        <span id="error_Jcm_JcNumber" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Car No :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm_CarNoBrowser" class="form-control Jcm_CarNo" id="Jcm_CarNo" placeholder="Type to search...">
                                        <datalist id="Jcm_CarNoBrowser">
                                        </datalist>
                                        <span id="error_Jcm_CarNo" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Car Type :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm_CarTypeBrowser" class="form-control Jcm_CarType" id="Jcm_CarType" placeholder="Type to search...">
                                        <datalist id="Jcm_CarTypeBrowser">
                                        </datalist>
                                        <span id="error_Jcm_CarType" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Company :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm_CompanyBrowser" class="form-control Jcm_Company" id="Jcm_Company" placeholder="Type to search...">
                                        <datalist id="Jcm_CompanyBrowser">
                                        </datalist>
                                        <span id="error_Jcm_Company" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Color :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm_ColorBrowser" class="form-control Jcm_CarColor" id="Jcm_CarColor" placeholder="Type to search...">
                                        <datalist id="Jcm_ColorBrowser">
                                        </datalist>
                                        <span id="error_Jcm_CarColor" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Car Engine :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_CarEngine" id="Jcm_CarEngine" class="form-control Jcm_CarEngine" autocomplete="off" style="border:gainsboro 1px solid;">
                                        <span id="error_Jcm_CarEngine" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">VinNo :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_VinNo" id="Jcm_VinNo" class="form-control Jcm_VinNo" autocomplete="off" style="border:gainsboro 1px solid;">
                                        <span id="error_Jcm_VinNo" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Model Name :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm_ModelNameBrowser" class="form-control Jcm_ModelName" id="Jcm_ModelName" placeholder="Type to search...">
                                        <datalist id="Jcm_ModelNameBrowser">
                                        </datalist>
                                        <span id="error_Jcm_ModelName" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Car Model :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm_CarModelBrowser" class="form-control Jcm_CarModel" id="Jcm_CarModel" placeholder="Type to search...">
                                        <datalist id="Jcm_CarModelBrowser">
                                        </datalist>
                                        <span id="error_Jcm_CarModel" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Driver Name :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm_DriverNameBrowser" text="Jcm_DriverName" class="form-control Jcm_DriverName" id="Jcm_DriverName">
                                        <datalist id="Jcm_DriverNameBrowser">
                                        </datalist>
                                        <span id="error_Jcm_DriverName" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Customer :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm_CustomerBrowser" class="form-control Jcm_Customer" id="Jcm_Customer" placeholder="Type to search...">
                                        <datalist id="Jcm_CustomerBrowser">
                                        </datalist>
                                        <span id="error_Jcm_Customer" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label">Car KM :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_CarKM" id="Jcm_CarKM" class="form-control Jcm_CarKM" autocomplete="off" style="border:gainsboro 1px solid;">
                                        <span id="error_Jcm_CarKM" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label">Car WH :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_CarWH" id="Jcm_CarWH" class="form-control Jcm_CarWH" autocomplete="off" style="border:gainsboro 1px solid;">
                                        <!-- <span id="error_Jcm_CarWH" class="text-danger"></span> -->
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Date In :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="date" name="Jcm_DateIn" id="Jcm_DateIn" class="form-control Jcm_DateIn" autocomplete="off" style="border:gainsboro 1px solid;">
                                        <span id="error_Jcm_DateIn" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Time In :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="time" name="Jcm_TimeIn" id="Jcm_TimeIn" class="form-control Jcm_TimeIn" autocomplete="off" style="border:gainsboro 1px solid;">
                                        <span id="error_Jcm_TimeIn" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Date Out :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="date" name="Jcm_DateOut" id="Jcm_DateOut" class="form-control Jcm_DateOut" autocomplete="off" style="border:gainsboro 1px solid;">
                                        <span id="error_Jcm_DateOut" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Time Out :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="time" name="Jcm_TimeOut" id="Jcm_TimeOut" class="form-control Jcm_TimeOut" autocomplete="off" style="border:gainsboro 1px solid;">
                                        <span id="error_Jcm_TimeOut" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Wh Total :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_WhTotal" id="Jcm_WhTotal" class="form-control bg-gray Jcm_WhTotal" autocomplete="off" disabled>
                                        <span id="error_Jcm_WhTotal" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Item Price :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_ItemPriceTotal" id="Jcm_ItemPriceTotal" class="form-control bg-gray Jcm_ItemPriceTotal" autocomplete="off" disabled>
                                        <span id="error_Jcm_ItemPriceTotal" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Ch Total :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_ChTotal" id="Jcm_ChTotal" class="form-control bg-gray Jcm_ChTotal" autocomplete="off" disabled>
                                        <span id="error_Jcm_ChTotal" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> JobCard To. :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm_JcTotal" id="Jcm_JcTotal" class="form-control bg-gray Jcm_JcTotal" autocomplete="off" disabled>
                                        <span id="error_Jcm_JcTotal" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> State :
                                    </label>
                                    <div class="col-sm-2">
                                        <select name="Jcm_State" id="Jcm_State" class="col-sm-11 col-form-label form-select Jcm_State">
                                        </select>
                                        <span id="error_Jcm_State" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Workshop Place :
                                    </label>
                                    <div class="col-sm-2">
                                        <select name="Jcm_WorkPlace" id="Jcm_WorkPlace" class="col-sm-11 col-form-label form-select Jcm_WorkPlace">
                                        </select>
                                        <span id="error_Jcm_WorkPlace" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Car Out :
                                    </label>
                                    <div class="col-sm-2" style="padding-top: 0.8%;">
                                        <input type="checkbox" name="Jcm_CarOut" id="Jcm_CarOut" class="Jcm_CarOut">
                                    </div>
                                </div>
                                <hr>
                                <div class="ms-12 row pt-6">
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary form-control jobcardmainlydailySave">Save Data</button>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn text-white form-control jobcardmainlydailyItem" id="jobcardmainlydailyItem" style="background-color: #343A40;" disabled> Items</button>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn bg-gradient-yellow text-black form-control jobcardmainlydailyorder" disabled> Order</button>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn bg-gradient-success text-black form-control jobcardmainlydailyCmpPrint" disabled>Cmp Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end JobCard mainly Form.... -->

        <!-- start JobCard Secondary Table.... -->
        <div class="col-md-12 mt-2">
            <div class="card jobcardsecondarydailycard" id="jobcardsecondarydailycard">
                <div class="card-header " style="background-color: #343A40;">

                    <button class="btn btn-primary btn-sm m-1 float-end jobcardsecondarydailyAdd">Add New Item
                    </button>
                    <h4 style="color: white;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="jobcardsecondarydaily_data" class="table table-bordered table-striped jobcardsecondarydaily_data" cellspacing="0" width="100%">
                        <thead class="dataheader_jobcardsecondarydaily table-dark">
                            <tr>
                                <td>WorkShop</td>
                                <td>Date</td>
                                <td>Item Name</td>
                                <td>Part Number</td>
                                <td>Unit</td>
                                <td>Quantity</td>
                                <td>Unit price</td>
                                <td>Total Money</td>
                                <td>Work Wages</td>
                                <td>Total</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_jobcardsecondarydaily">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end JobCard Secondary tabel.... -->

        <!-- show items of jobcard in ItemsShowModel.... -->
        <div class="modal fade bd-example-modal-xl" id="ItemsShowModel" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="card-header" style="background-color: #343A40;">
                        <h4 style="color: white;">Items</h4>
                    </div>
                    <div class="card-body" style="background-color: whitesmoke;">
                        <table id="jobcardsecondarydaily_dataShow" class="table table-bordered table-striped jobcardsecondarydaily_dataShow" cellspacing="0" width="100%">
                            <thead class="dataheader_orderone table-dark">
                                <tr>
                                    <td>WorkShop</td>
                                    <td>Date</td>
                                    <td>Item Name</td>
                                    <td>Part Number</td>
                                    <td>Unit</td>
                                    <td>Quantity</td>
                                    <td>Unit price</td>
                                    <td>Total Money</td>
                                    <td>Work Wages</td>
                                    <td>Total</td>

                                </tr>
                            </thead>
                            <tbody class="databody_orderone">

                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn_CloseItemsModal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End ItemsShowModel -->

        <!-- start JobCard Secondary Form.... -->
        <div class="col-md-12 mt-5">
            <div class="card jobcardsecondarydailyaction" id="jobcardsecondarydailyaction">
                <div class="card-header" style="background-color: #343A40;">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end jobcardsecondarydailyClose">close
                    </button>
                    <h4 style="color: white;" id="card_jobcardsecondarydailytitle" class="card_jobcardsecondarydailytitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="Jcm2_ID" id="Jcm2_ID" class="form-control Jcm2_ID" hidden>
                                        <input type="text" name="Jcm2_FK" id="Jcm2_FK" class="form-control Jcm2_FK" hidden>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Work Type :
                                    </label>
                                    <div class="col-sm-5">
                                        <select name="Jc_WorkType" id="Jc_WorkType" class="col-sm-11 col-form-label form-select Jc_WorkType">
                                            <option value="Item">Item</option>
                                            <option value="Work">Work</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label lbl_WorkShop"> WorkShop :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_WorkShopBrowser" class="form-control Jcm2_WorkShop" id="Jcm2_WorkShop" placeholder="Type to search...">
                                        <datalist id="Jcm2_WorkShopBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_WorkShop" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label lbl_Date"> Date :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="date" name="Jcm2_Date" id="Jcm2_Date" class="form-control Jcm2_Date" autocomplete="off">
                                        <span id="error_Jcm2_Date" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label lbl_ItemName"> Item Name :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_ItemNameBrowser" class="form-control Jcm2_ItemName" id="Jcm2_ItemName" placeholder="Type to search...">
                                        <datalist id="Jcm2_ItemNameBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_ItemName" class="text-danger"></span>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary btn-sm m-1 mb-3 float-end jobcardsecondaryOilInfo" id='jobcardsecondaryOilInfo' style="display: none;">Info</button>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label lbl_PartNumber"> Part Number :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_PartNumberBrowser" class="form-control Jcm2_PartNumber" id="Jcm2_PartNumber" placeholder="Type to search...">
                                        <datalist id="Jcm2_PartNumberBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_PartNumber" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label lbl_Unit"> Unit :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_UnitBrowser" class="form-control Jcm2_Unit" id="Jcm2_Unit" placeholder="Type to search...">
                                        <datalist id="Jcm2_UnitBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_Unit" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label lbl_Quantity">QY :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_Quantity" id="Jcm2_Quantity" class="form-control Jcm2_Quantity" autocomplete="off">
                                        <span id="error_Jcm2_Quantity" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label lbl_UnitPrice">Unit Price :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_UnitPrice" id="Jcm2_UnitPrice" class="form-control Jcm2_UnitPrice" autocomplete="off">
                                        <span id="error_Jcm2_UnitPrice" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label lbl_MoneyTotal">Item_Total :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_MoneyTotal" id="Jcm2_MoneyTotal" class="form-control bg-gray Jcm2_MoneyTotal" autocomplete="off" disabled>
                                        <span id="error_Jcm2_MoneyTotal" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label lbl_WH">WH :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_WH" id="Jcm2_WH" class="form-control Jcm2_WH" autocomplete="off">
                                        <span id="error_Jcm2_WH" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label lbl_CH">CH :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_CH" id="Jcm2_CH" class="form-control Jcm2_CH" autocomplete="off" style="border:gainsboro soild 1px">
                                        <span id="error_Jcm2_CH" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label lbl_Total">Total :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_Jc2Total" id="Jcm2_Jc2Total" class="form-control bg-gray Jcm2_Jc2Total" autocomplete="off" disabled>
                                        <span id="error_Jcm2_Jc2Total" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label lbl_Side">Side :
                                    </label>
                                    <div class="col-sm-2">
                                        <select name="Jcm2_Side" id="Jcm2_Side" class="col-sm-11 col-form-label form-select Jcm2_Side">
                                        </select>
                                        <span id="error_Jcm2_Side" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label lbl_Number">Number :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_Number" id="Jcm2_Number" class="form-control Jcm2_Number" autocomplete="off" style="border:gainsboro soild 1px">
                                        <span id="error_Jcm2_Number" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label lbl_Brand"> Brand :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_BrandBrowser" class="form-control Jcm2_Brand" id="Jcm2_Brand" placeholder="Type to search...">
                                        <datalist id="Jcm2_BrandBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_Brand" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label lbl_Company"> Company :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_CompanyBrowser" class="form-control Jcm2_Company" id="Jcm2_Company" placeholder="Type to search...">
                                        <datalist id="Jcm2_CompanyBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_Company" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label lbl_Condition">Condition :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Jcm2_Condition" id="Jcm2_Condition" name="Jcm2_Condition" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label lbl_Description">Description :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Jcm2_Description" id="Jcm2_Description" name="Jcm2_Description" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label">Workers :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Jcm2_Worker" id="Jcm2_Worker" name="Jcm2_Worker" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary form-control jobcardsecondaryAddWorker" style="background-color: #343A40;" data-toggle="modal" data-target="#Frm_Workers">Workers</button>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label">Notes :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Jcm2_Notes" id="Jcm2_Notes" name="Jcm2_Notes" rows="3"></textarea>
                                    </div>
                                </div>

                                <hr>

                                <div class="ms-12 row pt-6">
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary form-control jobcardsecondarydailySave">Save Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end JobCard Secondary Form.... -->
    </div>
</div>

<!-- start Order.... -->
<div class="modal fade bd-example-modal-xl" id="OrderModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row border g-0 rounded shadow-sm ">
                    <div class="col p-4">
                        <!-- start Order Table.... -->
                        <div class="col-md-12 mt-2">
                            <div class="card ">
                                <div class="card-header text-white" style="background-color: #343A40;">

                                    <button class="btn btn-primary btn-sm m-1 float-end orderoneAdd">Add New Order
                                    </button>

                                    <h4 style="color: white;"><?= $title2 ?> </h4>

                                </div>
                                <div class="card-body">
                                    <table id="orderone_data" class="table table-bordered table-striped orderone_data" cellspacing="0" width="100%">
                                        <thead class="dataheader_orderone table-dark">
                                            <tr>
                                                <td>Order_No</td>
                                                <td>JC_No</td>
                                                <td>Car No</td>
                                                <td>Car Type</td>
                                                <td>Customer</td>
                                                <td>Total</td>
                                                <td>Event</td>
                                            </tr>
                                        </thead>
                                        <tbody class="databody_orderone">

                                        </tbody>
                                    </table>
                                    <div class="col-md-12" id="buttonHolder"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end Order Table.... -->

                        <!-- start Order Form.... -->
                        <div class="col-md-12 mt-5">
                            <div class="card orderoneaction" id="orderoneaction">
                                <div class="card-header text-white" style="background-color: #343A40;">
                                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end orderoneClose">close
                                    </button>
                                    <h4 style="color: white;" id="card_orderonetitle" class="card_orderonetitle"> </h4>

                                </div>
                                <div class="card-body ">
                                    <div class="row ">

                                        <div class="col-md-12 ">
                                            <div class="form-group ">
                                                <div class="ms-12 row pt-3">
                                                    <div class="col-sm-auto">
                                                        <input type="text" name="Or_ID" id="Or_ID" class="form-control Or_ID" hidden>

                                                    </div>
                                                </div>

                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-1 col-form-label"> jobcard Number :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="Or_JcNumber" id="Or_JcNumber" class="form-control Or_JcNumber" autocomplete="off" disabled style="border:gainsboro soild 1px">
                                                        <span id="error_Or_JcNumber" class="text-danger"></span>
                                                    </div>

                                                    <label for="" class="col-sm-1 col-form-label"> Car No :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or_CarNoBrowser" class="form-control Or_CarNo" id="Or_CarNo" placeholder="Type to search...">
                                                        <datalist id="Or_CarNoBrowser">

                                                        </datalist>
                                                        <span id="error_Or_CarNo" class="text-danger"></span>
                                                    </div>

                                                    <label for="" class="col-sm-1 col-form-label"> Car Type :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or_CarTypeBrowser" class="form-control Or_CarType" id="Or_CarType" placeholder="Type to search...">
                                                        <datalist id="Or_CarTypeBrowser">

                                                        </datalist>
                                                        <span id="error_Or_CarType" class="text-danger"></span>
                                                    </div>
                                                </div>

                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-1 col-form-label"> Customer :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or_CustomerBrowser" class="form-control Or_Customer" id="Or_Customer" placeholder="Type to search...">
                                                        <datalist id="Or_CustomerBrowser">

                                                        </datalist>
                                                        <span id="error_Or_Customer" class="text-danger"></span>
                                                    </div>
                                                    <label for="" class="col-sm-1 col-form-label"> Date Out :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="date" name="Or_DateOut" id="Or_DateOut" class="form-control Or_DateOut" autocomplete="off">
                                                        <span id="error_Or_DateOut" class="text-danger"></span>
                                                    </div>
                                                    <label for="" class="col-sm-1 col-form-label">Packing Date :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="date" name="Or_PackingDate" id="Or_PackingDate" class="form-control Or_PackingDate" autocomplete="off" disabled>
                                                        <span id="error_Or_PackingDate" class="text-danger"></span>
                                                    </div>

                                                </div>
                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-1 col-form-label"> State Order :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <select name="Or_State" id="Or_State" class="col-sm-11 col-form-label form-select Or_State">
                                                        </select>
                                                        <span id="error_Or_State" class="text-danger"></span>
                                                    </div>
                                                    <label for="" class="col-sm-1 col-form-label"> Working Place :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or_WorkPlaceBrowser" class="form-control Or_WorkPlace" id="Or_WorkPlace" placeholder="Type to search...">
                                                        <datalist id="Or_WorkPlaceBrowser">

                                                        </datalist>
                                                        <span id="error_Or_WorkPlace" class="text-danger"></span>
                                                    </div>
                                                    <label for="" class="col-sm-1 col-form-label"> Order Total :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="Or_Total" id="Or_Total" class="form-control Or_Total" autocomplete="off" disabled>
                                                        <span id="error_Or_Total" class="text-danger"></span>
                                                    </div>

                                                </div>

                                                <div class="ms-12 row pt-3">
                                                    <div class="col-sm-auto">
                                                        <p class="mb-0" style="font-weight: bold;">Engineer_S :</p>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="checkbox" name="Or_Engineer_S" id="Or_Engineer_S" class="form-check-input" autocomplete="off">
                                                        <span id="error_Or_Engineer_S" class="text-danger"></span>
                                                    </div>
                                                    <div class="col-sm-auto">
                                                        <p class="mb-0" style="font-weight: bold;">StockKeeper_S :</p>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="checkbox" name="Or_StockKeeper_S" id="Or_StockKeeper_S" class="form-check-input" autocomplete="off" disabled>
                                                        <span id="error_Or_StockKeeper_S" class="text-danger"></span>
                                                    </div>
                                                    <div class="col-sm-auto">
                                                        <p class="mb-0" style="font-weight: bold;">Supervisor_S :</p>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="checkbox" name="Or_Supervisor_S" id="Or_Supervisor_S" class="form-check-input" autocomplete="off">
                                                        <span id="error_Or_Supervisor_S" class="text-danger"></span>
                                                    </div>
                                                    <div class="col-sm-auto">
                                                        <p class="mb-0" style="font-weight: bold;">Order_Finish :</p>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input type="checkbox" name="Or_Finish" id="Or_Finish" class="form-check-input" autocomplete="off">
                                                        <span id="error_Or_Finish" class="text-danger"></span>
                                                    </div>

                                                    <div class="col-sm-auto">
                                                        <p class="mb-0" style="font-weight: bold;">Order_AddToJc :</p>
                                                    </div>
                                                    <div class="col-sm-auto">
                                                        <input type="checkbox" name="Or_AddToJc" id="Or_AddToJc" class="form-check-input" autocomplete="off" disabled>
                                                        <span id="error_Or_AddToJc" class="text-danger"></span>
                                                    </div>
                                                </div>



                                                <hr>
                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-auto col-form-label">Notes :</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control rounded-1 Or_Notes" id="Or_Notes" name="Or_Notes" rows="3"></textarea>

                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="ms-12 row pt-6">
                                                    <div class="col-sm-1">
                                                        <button class="btn btn-primary form-control orderoneSave">Save Data</button>

                                                    </div>
                                                    <div class="col-sm-1">
                                                        <button class="btn text-white form-control orderoneItem" style="background-color: #343A40;" disabled> Items</button>

                                                    </div>
                                                    <div class="col-sm-2">
                                                        <button class="btn bg-gradient-yellow text-black form-control orderoneorder" disabled> Add to Jobcard</button>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Order Form.... -->

                        <!-- start Order Items table.... -->
                        <div class="col-md-12 mt-2">
                            <div class="card ordertwocard" id="ordertwocard">
                                <div class="card-header " style="background-color: #343A40;">

                                    <button class="btn btn-primary btn-sm m-1 float-end ordertwoAdd">Add New Item
                                    </button>
                                    <h4 style="color: white;">Order Items </h4>

                                </div>
                                <div class="card-body">

                                    <table id="ordertwo_data" class="table table-bordered table-striped ordertwo_data" cellspacing="0" width="100%">
                                        <thead class="dataheader_ordertwo table-dark">
                                            <tr>
                                                <td>Item Name</td>
                                                <td>Part Number</td>
                                                <td>State</td>
                                                <td>Unit</td>
                                                <td>Quantity</td>
                                                <td>Event</td>
                                            </tr>
                                        </thead>
                                        <tbody class="databody_ordertwo">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end Order Items table.... -->

                        <!-- start Order Items Form.... -->
                        <div class="col-md-12 mt-5">
                            <div class="card ordertwoaction" id="ordertwoaction">
                                <div class="card-header" style="background-color: #343A40;">
                                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end ordertwoClose">close
                                    </button>
                                    <h4 style="color: white;" id="card_ordertwotitle" class="card_ordertwotitle"> </h4>

                                </div>
                                <div class="card-body ">
                                    <div class="row ">

                                        <div class="col-md-12 ">
                                            <div class="form-group ">
                                                <div class="ms-12 row pt-3">
                                                    <div class="col-sm-auto">
                                                        <input type="text" name="Or2_ID" id="Or2_ID" class="form-control Or2_ID" hidden>
                                                        <input type="text" name="Or2_FK" id="Or2_FK" class="form-control Or2_FK" hidden>
                                                    </div>
                                                </div>
                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-1 col-form-label"> Item Name :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or2_ItemNameBrowser" class="form-control Or2_ItemName" id="Or2_ItemName" placeholder="Type to search...">
                                                        <datalist id="Or2_ItemNameBrowser">
                                                        </datalist>
                                                        <span id="error_Or2_ItemName" class="text-danger"></span>
                                                    </div>
                                                    <label for="" class="col-sm-1 col-form-label"> Part Number :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or2_PartNumberBrowser" class="form-control Or2_PartNumber" id="Or2_PartNumber" placeholder="Type to search..." disabled>
                                                        <datalist id="Or2_PartNumberBrowser">
                                                        </datalist>
                                                        <span id="error_Or2_PartNumber" class="text-danger"></span>
                                                    </div>
                                                    <label for="" class="col-sm-1 col-form-label"> Company :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or2_CompanyBrowser" class="form-control Or2_Company" id="Or2_Company" placeholder="Type to search..." disabled>
                                                        <datalist id="Or2_CompanyBrowser">

                                                        </datalist>
                                                        <span id="error_Or2_Company" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-1 col-form-label"> Brand :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or2_BrandBrowser" class="form-control Or2_Brand" id="Or2_Brand" placeholder="Type to search..." disabled>
                                                        <datalist id="Or2_BrandBrowser">
                                                        </datalist>
                                                        <span id="error_Or2_Brand" class="text-danger"></span>
                                                    </div>
                                                    <label for="" class="col-sm-1 col-form-label">State :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <select name="Or2_State" id="Or2_State" class="col-sm-11 col-form-label form-select Or2_State" disabled>
                                                        </select>
                                                        <span id="error_Or2_State" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-1 col-form-label"> Unit :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input list="Or2_UnitBrowser" class="form-control Or2_Unit" id="Or2_Unit" placeholder="Type to search...">
                                                        <datalist id="Or2_UnitBrowser">
                                                        </datalist>
                                                        <span id="error_Or2_Unit" class="text-danger"></span>
                                                    </div>

                                                    <label for="" class="col-sm-1 col-form-label">Quantity :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="Or2_Quantity" id="Or2_Quantity" class="form-control Or2_Quantity" autocomplete="off">
                                                        <span id="error_Or2_Quantity" class="text-danger"></span>
                                                    </div>
                                                    <label for="" class="col-sm-1 col-form-label">Unit Price :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="Or2_UnitPrice" id="Or2_UnitPrice" class="form-control Or2_UnitPrice" autocomplete="off" disabled>
                                                        <span id="error_Or2_UnitPrice" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-1 col-form-label">Total Money :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <input type="text" name="Or2_MoneyTotal" id="Or2_MoneyTotal" class="form-control Or2_MoneyTotal" autocomplete="off" disabled>
                                                        <span id="error_Or2_MoneyTotal" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="ms-12 row pt-3">
                                                    <label for="" class="col-sm-auto col-form-label">Notes :</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control rounded-1 Or2_Notes" id="Or2_Notes" name="Or2_Notes" rows="3"></textarea>

                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="ms-12 row pt-6">
                                                    <div class="col-sm-1">
                                                        <button class="btn btn-primary form-control ordertwoSave">Save Data</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Order Items Form.... -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closemodal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Order.... -->

<!-- form use to add Workers to items name= WorkersModel-->
<div class="modal fade bd-example-modal-ml" id="WorkersModel" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-ml modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="card-header text-white" style="background-color: #343A40;">
                <button class="btn btn-danger btn-sm jobcardsecondaryWorkersModel_Close" style="float: right;"><i class="bi bi-x-circle-fill"></i></button>
                <h4>Add Workers</h4>
            </div>

            <div class="modal-body" style="background-color: whitesmoke;">
                <div  id="chx_Workers">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn_Add_Workers">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End form of add Workers -->

<!-- form use to show last update oil engine in car  name= OilEngineModel-->
<div class="modal fade bd-example-modal-ml" id="OilEngineModel" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-ml" role="document">
        <div class="modal-content">
            <div class="card-header text-white" style="background-color: #343A40;">
                <button class="btn btn-danger btn-sm jobcardsecondaryOilEngineModel_Close" style="float: right;"><i class="bi bi-x-circle-fill"></i></button>
                <h4>Engine Oil Info.</h4>
            </div>
            <div style="padding: 4%; text-align: center;">
                <div class="ms-12 row pt-3">
                    <label class="col-sm-6 col-form-label"> Exchange Engine Oil </label>
                    <label class="col-sm-6 col-form-label"> Add Engine Oil </label>
                </div>
                <hr>                         
                <div class="ms-12 row pt-3">
                    <label class="col-sm-6 col-form-label lbl_Exchange_JobcardNo"> Jobcard No : </label>
                    <label class="col-sm-6 col-form-label lbl_Add_JobcardNo"> Jobcard No : </label>
                </div>

                <div class="ms-12 row pt-3">
                    <label class="col-sm-6 col-form-label lbl_Exchange_Date"> Date : </label>
                    <label class="col-sm-6 col-form-label lbl_Add_Date"> Date : </label>
                </div>

                <div class="ms-12 row pt-3">
                    <label class="col-sm-6 col-form-label lbl_Exchange_CarKM"> Car KM : </label>
                    <label class="col-sm-6 col-form-label lbl_Add_CarKM"> Car KM : </label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End form of add Workers -->


<?= $this->endSection() ?>

<?= $this->section('scripts') ?>


<script>
    // Jobcard Mainly....
    jobcardmainlydaily_fetch();
    jobcardmainlydaily_filldata();

    $("#jobcardmainlydailyaction").hide();
    $(document).on('click', '.jobcardmainlydailyAdd', function() {
        var displaycard = document.getElementById("jobcardmainlydailyaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_jobcardmainlydailytitle").innerText = "Add New jobcard";
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('jobcardmainlydaily-maxjobcard') ?>",
                success: function(response) {
                    $.each(response.getmaxjobcard, function(indexInArray, valueOfElement) {
                        $('#Jcm_JcNumber').val(valueOfElement.MaxValue);
                    });

                    $('#Jcm_WorkPlace').val(response.workshopplace);
                    $('#Jcm_State').val('Inactive');

                    var now = new Date();
                    var day = ("0" + now.getDate()).slice(-2);
                    var month = ("0" + (now.getMonth() + 1)).slice(-2);
                    var today = now.getFullYear() + "-" + (month) + "-" + (day);
                    $('#Jcm_DateIn').val(today);

                }
            });
            displaycard.style.display = "block";
            document.getElementById('card_jobcardmainlydailytitle').scrollIntoView();
        } else {

            displaycard.style.display = "none";
            document.getElementById("card_jobcardmainlydailytitle").innerText = "";
            jobcardmainlydaily_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_jobcardmainlydailytitle").innerText = "Add New jobcard";
            document.getElementById('card_jobcardmainlydailytitle').scrollIntoView();

        }
    });

    $(document).on('click', '.jobcardmainlydailyClose', function() {
        var displaycard = document.getElementById("jobcardmainlydailyaction");
        jobcardmainlydaily_cleardata();
        document.getElementById("card_jobcardmainlydailytitle").innerText = "";
        $('.jobcardmainlydailyItem').prop('disabled', true);
        $('.jobcardmainlydailyorder').prop('disabled', true);
        displaycard.style.display = "none";

        var displaycard2 = document.getElementById("jobcardsecondarydailyaction");
        jobcardsecondarydaily_cleardata();
        document.getElementById("card_jobcardsecondarydailytitle").innerText = "";
        displaycard2.style.display = "none";

        var displaycard3 = document.getElementById("jobcardsecondarydailycard");
        var tabldata = $('#jobcardsecondarydaily_data').DataTable();
        tabldata.destroy();
        displaycard3.style.display = "none";
    });

    $(document).on('click', '.jobcardmainlydailySave', function() {

        var Jcm_ID = document.getElementById("Jcm_ID").value;

        if (Jcm_ID == '') {

            jobcardmainlydaily_checkdata();

            if (error_Jcm_JcNumber != '' || error_Jcm_CarNo != '' || error_Jcm_CarType != '' || error_Jcm_CarColor != '' ||
                error_Jcm_Customer != '' || error_Jcm_ModelName != '' || error_Jcm_DriverName != '' ||
                error_Jcm_CarKM != '' || error_Jcm_DateIn != '' || error_Jcm_TimeIn != '' | error_Jcm_DateOut != '' ||
                error_Jcm_TimeOut != '' || error_Jcm_State != '' || error_Jcm_WorkPlace != '' || error_Jcm_Company != '') {

                return false;
            } else {

                jobcardmainlydaily_getcustomerinfo();
            }
        } else {
            jobcardmainlydaily_checkdata();
            if (error_Jcm_JcNumber != '' || error_Jcm_CarNo != '' || error_Jcm_CarType != '' || error_Jcm_CarColor != '' ||
                error_Jcm_Customer != '' || error_Jcm_ModelName != '' || error_Jcm_DriverName != '' ||
                error_Jcm_CarKM != '' || error_Jcm_DateIn != '' || error_Jcm_TimeIn != '' | error_Jcm_DateOut != '' ||
                error_Jcm_TimeOut != '' || error_Jcm_State != '' || error_Jcm_WorkPlace != '' || error_Jcm_Company != '') {

                return false;
            } else {

                jobcardmainlydaily_getcustomerinfo();
            }
        }
    });

    $(document).on('click', '.jobcardmainlydailyDelete', function() {
        var tabledata = $('#jobcardmainlydaily_data').DataTable();
        var jobcardmainlydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardmainlydailyvalue = jobcardmainlydaily[Object.keys(jobcardmainlydaily)[0]];

        $.ajax({
            type: "GET",
            url: "<?php echo base_url('users-getPermissions') ?>",
            success: function(response) {

                $.each(response, function(indexInArray, valueOfElement) {
                    if (valueOfElement.P_Delete) {
                        $.ajax({
                            type: "POST",
                            url: "<?= base_url('jobcardmainlydaily-delete') ?>",
                            data: {
                                'getid': jobcardmainlydailyvalue,
                            },

                            success: function(response) {
                                alertify.set('notifier', 'position', 'top-right');
                                alertify.success(response.status);
                                $('#jobcardmainlydaily_data').DataTable().ajax.reload();
                            }
                        });
                    } else {
                        $('.jobcardmainlydailyDelete').prop('disabled', true);
                    }


                });

            }
        });





    });

    $(document).on('click', '.jobcardmainlydailyEdit', function() {
        var tabledata = $('#jobcardmainlydaily_data').DataTable();
        var jobcardmainlydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardmainlydailyvalue = jobcardmainlydaily[Object.keys(jobcardmainlydaily)[0]];

        showDataJcMainly(jobcardmainlydailyvalue,'edit');
        
        var displaycard = document.getElementById("jobcardsecondarydailycard");
        if (displaycard.style.display == "block") {
            var tabldata = $('#jobcardsecondarydaily_data').DataTable();
            tabldata.destroy();
            displaycard.style.display = "none";
        }

        var displaycard2 = document.getElementById("jobcardsecondarydailyaction");
        if (displaycard2.style.display == "block") {
            var tabldata = $('#jobcardsecondarydaily_data').DataTable();
            tabldata.destroy();
            displaycard2.style.display = "none";
        }
    });

    function showDataJcMainly(jcm_id, type) {
        $.ajax({
            type: "GET",
            url: "<?= base_url('jobcardmainlydaily-edit') ?>",
            data: {
                'getid': jcm_id,
            },

            success: function(response) {
                
                $.each(response, function(key, value) {
                    $('#Jcm_ID').val(value['Jcm_ID']);
                    $('#Jcm_JcNumber').val(value['Jcm_JcNumber']);
                    $('#Jcm_CarNo').val(value['Jcm_CarNo']);
                    $('#Jcm_CarType').val(value['Jcm_CarType']);
                    $('#Jcm_Company').val(value['Jcm_Company']);
                    $('#Jcm_CarColor').val(value['Jcm_CarColor']);
                    $('#Jcm_CarEngine').val(value['Jcm_CarEngine']);
                    $('#Jcm_VinNo').val(value['Jcm_VinNo']);
                    $('#Jcm_ModelName').val(value['Jcm_ModelName']);
                    $('#Jcm_CarModel').val(value['Jcm_CarModel']);
                    $('#Jcm_Customer').val(value['Jcm_Customer']);
                    $('#Jcm_DriverName').val(value['Jcm_DriverName']);
                    $('#Jcm_CarKM').val(value['Jcm_CarKM']);
                    $('#Jcm_CarWH').val(value['Jcm_CarWH']);
                    $('#Jcm_DateIn').val(value['Jcm_DateIn']);
                    $('#Jcm_TimeIn').val(value['Jcm_TimeIn']);
                    $('#Jcm_DateOut').val(value['Jcm_DateOut']);
                    $('#Jcm_TimeOut').val(value['Jcm_TimeOut']);
                    $('#Jcm_WhTotal').val(value['Jcm_WhTotal']);
                    $('#Jcm_ItemPriceTotal').val(value['Jcm_ItemPriceTotal']);
                    $('#Jcm_ChTotal').val(value['Jcm_ChTotal']);
                    $('#Jcm_JcTotal').val(value['Jcm_JcTotal']);
                    $('#Jcm_State').val(value['Jcm_State']);
                    $('#Jcm_WorkPlace').val(value['Jcm_WorkPlace']);
                    $('#Jcm_CarOut').prop('checked', value['Jcm_CarOut']);


                    var displaycard = document.getElementById("jobcardmainlydailyaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_jobcardmainlydailytitle").innerText = "jobcard Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_jobcardmainlydailytitle').scrollIntoView();
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_jobcardmainlydailytitle').innerText = "";
                        document.getElementById('card_jobcardmainlydailytitle').innerText = "jobcard Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_jobcardmainlydailytitle').scrollIntoView();

                    }
                    $('#Jcm2_FK').val(value['Jcm_ID']);
                    
                    if ($('#Jcm_CarKM').val() > 200000) {
                        $('#Jcm_CarKM').css({
                            'background-color': '#ff5252',
                            'color': 'white',
                        });
                    } else {
                        $('#Jcm_CarKM').css({
                            'background-color': 'white',
                            'color': 'black'
                        });
                    }
                    $('.jobcardmainlydailyItem').prop('disabled', false);
                    $('.jobcardmainlydailyorder').prop('disabled', false);
                    $('.jobcardmainlydailyCmpPrint').prop('disabled', true);

                    if ($('#Jcm_State').val() == 'Active') {
                        //$('.jobcardmainlydailyItem').prop('disabled', true);
                        //$('.jobcardmainlydailyorder').prop('disabled', true);
                        //$('.jobcardmainlydailysave').prop('disabled', true);
                        //$('.jobcardsecondarydailyAdd').prop('disabled', true);
                        //$('.jobcardsecondarydailySave').prop('disabled', true);
                        $('.jobcardmainlydailyCmpPrint').prop('disabled', false);
                    }
                });
                
                if(type=='new'){
                    jobcardmainlydailyItem();
                }
            }
        });
        
    }

    $(document).on('click', '.jobcardmainlydailyPrint', function() {
        var tabledata = $('#jobcardmainlydaily_data').DataTable();
        var jobcardmainlydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardmainlydailyvalue = jobcardmainlydaily[Object.keys(jobcardmainlydaily)[1]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('jobcardmailydaily-print') ?>",
            data: {
                'getid': jobcardmainlydailyvalue,
            },

            success: function(response) {
                var a = document.createElement('a');
                a.href = "<?php echo base_url('jobcardprint') ?>";
                window.open(a.href, '_blank');
            }
        });
    });

    $(document).on('click', '.jobcardmainlydailyCmpPrint', function() {
        $.ajax({
            type: "GET",
            url: "<?= base_url('jobcardmailydaily-print') ?>",
            data: {
                'getid': $('#Jcm_JcNumber').val(),
            },

            success: function(response) {
                var a = document.createElement('a');
                a.href = "<?php echo base_url('jobcardprintCmp') ?>";
                window.open(a.href, '_blank');
            }
        });
    });

    $(document).ready(function() {
        $('#Jcm_JcTotal').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm_WhTotal').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm_ChTotal').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm_ItemPriceTotal').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm_CarKM').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });



    });

    $(document).ready(function() {
        $('#Jcm_Customer').keyup(function() {
            var customername = $('#Jcm_Customer').val();
            var data = {
                'getname': customername,
            };
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('jobcardmainlydaily-getcustomer') ?>",
                data: data,
                success: function(response) {
                    $.each(response.getcustomerinfo, function(indexInArray, valueOfElement) {

                        if ((valueOfElement.Cu_State) == 'Inactive') {
                            $('#Jcm_Customer').css({
                                'background-color': '#ff5252'
                            });
                        } else {
                            $('#Jcm_Customer').css({
                                'background-color': 'white'
                            });

                        }

                    });
                }
            });

        });
    });

    $(document).ready(function() {
        $('#Jcm_CarNo').on("keyup change", function(e) {
            var carno = $('#Jcm_CarNo').val();
            if (carno == '') {
                $('#Jcm_VinNo').val('');
                $('#Jcm_CarColor').val('');
                $('#Jcm_CarEngine').val('');
                $('#Jcm_CarModel').val('');
                $('#Jcm_Customer').val('');
                $('#Jcm_CarType').val('');
                $('#Jcm_Company').val('');
            } else {

                var data = {
                    'getcarno': carno,
                };
                $.ajax({
                    type: "GET",
                    url: "<?php echo base_url('jobcardmainlydaily-getcarinformations') ?>",
                    data: data,
                    success: function(response) {

                        $.each(response.getcarinformations, function(indexInArray, valueOfElement) {

                            $('#Jcm_VinNo').val(valueOfElement.Ci2_Vin_Vds);
                            $('#Jcm_CarColor').val(valueOfElement.Ci2_ColorCode);
                            $('#Jcm_CarEngine').val(valueOfElement.Ci2_Engine);
                            $('#Jcm_CarModel').val(valueOfElement.Ci2_ProductionDate);
                            $('#Jcm_Customer').val(valueOfElement.Ci2_Belongto);
                            $('#Jcm_CarType').val(valueOfElement.Ci2_CarType);
                            $('#Jcm_Company').val(valueOfElement.Ci2_Company);
                            $('#Jcm_ModelName').val(valueOfElement.Ci2_ModelName);

                        });

                    }
                });
            }

        });
    });

    $(document).on('change', '.Jc_Filter', function() {
        var tablerefresh = $('#jobcardmainlydaily_data').DataTable();
        tablerefresh.destroy();
        jobcardmainlydaily_fetch();
    });

    function jobcardmainlydaily_cleardata() {
        $('#Jcm_ID').val('');
        $('#Jcm_JcNumber').val('');
        $('#Jcm_CarNo').val('');
        $('#Jcm_CarType').val('');
        $('#Jcm_Company').val('');
        $('#Jcm_CarColor').val('');
        $('#Jcm_CarEngine').val('');
        $('#Jcm_VinNo').val('');
        $('#Jcm_ModelName').val('');
        $('#Jcm_CarModel').val('');
        $('#Jcm_Customer').val('');
        $('#Jcm_DriverName').val('');
        $('#Jcm_CarKM').val('');
        $('#Jcm_CarWH').val('');
        $('#Jcm_DateIn').val('');
        $('#Jcm_TimeIn').val('');
        $('#Jcm_DateOut').val('');
        $('#Jcm_TimeOut').val('');
        $('#Jcm_WhTotal').val('');
        $('#Jcm_ItemPriceTotal').val('');
        $('#Jcm_ChTotal').val('');
        $('#Jcm_JcTotal').val('');
        $('#Jcm_State').val('');
        $('#Jcm_WorkPlace').val('');
        $('#Jcm_CarOut').prop('checked', 0);
    }

    function jobcardmainlydaily_checkdata() {
        if ($.trim($('.Jcm_JcNumber').val()).length == 0) {
            error_Jcm_JcNumber = "plz, input the JobCard Number";
            $('#error_Jcm_JcNumber').text(error_Jcm_JcNumber);
        } else {
            error_Jcm_JcNumber = "";
            $('#error_Jcm_JcNumber').text(error_Jcm_JcNumber);
        }
        if ($.trim($('.Jcm_CarNo').val()).length == 0) {
            error_Jcm_CarNo = "plz, input the CarNo";
            $('#error_Jcm_CarNo').text(error_Jcm_CarNo);
        } else {
            error_Jcm_CarNo = "";
            $('#error_Jcm_CarNo').text(error_Jcm_CarNo);
        }
        if ($.trim($('.Jcm_CarType').val()).length == 0) {
            error_Jcm_CarType = "plz, input the Car Type";
            $('#error_Jcm_CarType').text(error_Jcm_CarType);
        } else {
            error_Jcm_CarType = "";
            $('#error_Jcm_CarType').text(error_Jcm_CarType);
        }
        if ($.trim($('.Jcm_ModelName').val()).length == 0) {
            error_Jcm_ModelName = "plz, input the Model";
            $('#error_Jcm_ModelName').text(error_Jcm_ModelName);
        } else {
            error_Jcm_ModelName = "";
            $('#error_Jcm_ModelName').text(error_Jcm_ModelName);
        }
        if ($.trim($('.Jcm_Company').val()).length == 0) {
            error_Jcm_Company = "plz, input the Company";
            $('#error_Jcm_Company').text(error_Jcm_Company);
        } else {
            error_Jcm_Company = "";
            $('#error_Jcm_Company').text(error_Jcm_Company);
        }
        if ($.trim($('.Jcm_CarColor').val()).length == 0) {
            error_Jcm_CarColor = "plz, input the Car Color";
            $('#error_Jcm_CarColor').text(error_Jcm_CarColor);
        } else {
            error_Jcm_CarColor = "";
            $('#error_Jcm_CarColor').text(error_Jcm_CarColor);
        }
        // if ($.trim($('.Jcm_CarEngine').val()).length == 0) {
        //     error_Jcm_CarEngine = "plz, input the Car Engine";
        //     $('#error_Jcm_CarEngine').text(error_Jcm_CarEngine);
        // } else {
        //     error_Jcm_CarEngine = "";
        //     $('#error_Jcm_CarEngine').text(error_Jcm_CarEngine);
        // }
        // if ($.trim($('.Jcm_VinNo').val()).length == 0) {
        //     error_Jcm_VinNo = "plz, input the VinNo";
        //     $('#error_Jcm_VinNo').text(error_Jcm_VinNo);
        // } else {
        //     error_Jcm_VinNo = "";
        //     $('#error_Jcm_VinNo').text(error_Jcm_VinNo);
        // }
        // if ($.trim($('.Jcm_CarModel').val()).length == 0) {
        //     error_Jcm_CarModel = "plz, input the Car Model";
        //     $('#error_Jcm_CarModel').text(error_Jcm_CarModel);
        // } else {
        //     error_Jcm_CarModel = "";
        //     $('#error_Jcm_CarModel').text(error_Jcm_CarModel);
        // }
        if ($.trim($('.Jcm_Customer').val()).length == 0) {
            error_Jcm_Customer = "plz, input the customer";
            $('#error_Jcm_Customer').text(error_Jcm_Customer);
        } else {
            error_Jcm_Customer = "";
            $('#error_Jcm_Customer').text(error_Jcm_Customer);
        }
        if ($.trim($('.Jcm_DriverName').val()).length == 0) {
            error_Jcm_DriverName = "plz, input the DriverName";
            $('#error_Jcm_DriverName').text(error_Jcm_DriverName);
        } else {
            error_Jcm_DriverName = "";
            $('#error_Jcm_DriverName').text(error_Jcm_DriverName);
        }
        if ($.trim($('.Jcm_CarKM').val()).length == 0) {
            error_Jcm_CarKM = "plz, input the CarKM";
            $('#error_Jcm_CarKM').text(error_Jcm_CarKM);
        } else {
            error_Jcm_CarKM = "";
            $('#error_Jcm_CarKM').text(error_Jcm_CarKM);
        }
        if ($.trim($('.Jcm_DateIn').val()).length == 0) {
            error_Jcm_DateIn = "plz, input the Date In";
            $('#error_Jcm_DateIn').text(error_Jcm_DateIn);
        } else {
            error_Jcm_DateIn = "";
            $('#error_Jcm_DateIn').text(error_Jcm_DateIn);
        }
        if ($.trim($('.Jcm_TimeIn').val()).length == 0) {
            error_Jcm_TimeIn = "plz, input the Time In";
            $('#error_Jcm_TimeIn').text(error_Jcm_TimeIn);
        } else {
            error_Jcm_TimeIn = "";
            $('#error_Jcm_TimeIn').text(error_Jcm_TimeIn);
        }
        if ($.trim($('.Jcm_DateOut').val()).length == 0 && $.trim($('.Jcm_State').val()) == 'Active') {
            error_Jcm_DateOut = "plz, input the Date out";
            $('#error_Jcm_DateOut').text(error_Jcm_DateOut);
        } else {
            error_Jcm_DateOut = "";
            $('#error_Jcm_DateOut').text(error_Jcm_TimeIn);
        }
        if ($.trim($('.Jcm_TimeOut').val()).length == 0 && $.trim($('.Jcm_State').val()) == 'Active') {
            error_Jcm_TimeOut = "plz, input the Time Out";
            $('#error_Jcm_TimeOut').text(error_Jcm_TimeOut);
        } else {
            error_Jcm_TimeOut = "";
            $('#error_Jcm_TimeOut').text(error_Jcm_TimeOut);
        }

        if ($.trim($('.Jcm_State').val()).length == 0) {
            error_Jcm_State = "plz, input the State";
            $('#error_Jcm_State').text(error_Jcm_State);
        } else {
            error_Jcm_State = "";
            $('#error_Jcm_State').text(error_Jcm_State);
        }
        if ($.trim($('.Jcm_WorkPlace').val()).length == 0) {
            error_Jcm_WorkPlace = "plz, input the WorkPlace";
            $('#error_Jcm_WorkPlace').text(error_Jcm_WorkPlace);
        } else {
            error_Jcm_WorkPlace = "";
            $('#error_Jcm_WorkPlace').text(error_Jcm_WorkPlace);
        }

    }

    function jobcardmainlydaily_insertdata() {
        var data = {
            'Jcm_JcNumber': $('.Jcm_JcNumber').val(),
            'Jcm_CarNo': $('.Jcm_CarNo').val(),
            'Jcm_CarType': $('.Jcm_CarType').val(),
            'Jcm_Company': $('.Jcm_Company').val(),
            'Jcm_CarColor': $('.Jcm_CarColor').val(),
            'Jcm_CarEngine': $('.Jcm_CarEngine').val(),
            'Jcm_VinNo': $('.Jcm_VinNo').val(),
            'Jcm_ModelName': $('.Jcm_ModelName').val(),
            'Jcm_CarModel': $('.Jcm_CarModel').val(),
            'Jcm_Customer': $('.Jcm_Customer').val(),
            'Jcm_DriverName': $('.Jcm_DriverName').val(),
            'Jcm_CarKM': $('.Jcm_CarKM').val(),
            'Jcm_CarWH': $('.Jcm_CarWH').val(),
            'Jcm_DateIn': $('.Jcm_DateIn').val(),
            'Jcm_TimeIn': $('.Jcm_TimeIn').val(),
            'Jcm_DateOut': $('.Jcm_DateOut').val(),
            'Jcm_TimeOut': $('.Jcm_TimeOut').val(),
            'Jcm_WhTotal': $('.Jcm_WhTotal').val(),
            'Jcm_ItemPriceTotal': $('.Jcm_ItemPriceTotal').val(),
            'Jcm_ChTotal': $('.Jcm_ChTotal').val(),
            'Jcm_JcTotal': $('.Jcm_JcTotal').val(),
            'Jcm_State': $('.Jcm_State').val(),
            'Jcm_WorkPlace': $('.Jcm_WorkPlace').val(),
            'Jcm_CarOut': $('.Jcm_CarOut').is(":checked") ? 1 : 0
        };

        $.ajax({
            type: "GET",
            url: "<?php echo base_url('jobcardmainlydaily-maxjobcard') ?>",
            success: function(response) {
                var jcm_id;
                $.each(response.getmaxjobcard, function(indexInArray, valueOfElement) {
                    $('#Jcm_JcNumber').val(valueOfElement.MaxValue);
                    jcm_id=valueOfElement.MaxID;
                });
                
                data['Jcm_JcNumber'] = $('.Jcm_JcNumber').val();

                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url('jobcardmainlydaily-store') ?>",
                    data: data,
                    success: function(response) {
                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(response.status);
                        var tabldata = $('#jobcardmainlydaily_data').DataTable();
                        tabldata.ajax.reload();
                        showDataJcMainly(jcm_id,'new');
                    }
                });
            }
        });
    }

    function jobcardmainlydaily_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('jobcardmainlydaily-filldata') ?>",
                success: function(response) {

                    $('#Jcm_State').empty();
                    $('#Jcm_State').append('<option selected>' + "Select State" + '</option>');
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                        $('#Jcm_State').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');
                    });

                    $('#Jcm_WorkPlace').empty();
                    $('#Jcm_WorkPlace').append('<option selected>' + "Select WorkPlace" + '</option>');
                    $.each(response.getworkplace, function(indexInArray, valueOfElement) {
                        $('#Jcm_WorkPlace').append('<option value="' + valueOfElement.Wsp_Name + '">' + valueOfElement.Wsp_Name + '</option>');
                    });

                    $('#Jcm_CarNoBrowser').empty();
                    $.each(response.getcarno, function(indexInArray, valueOfElement) {
                        $('#Jcm_CarNoBrowser').append('<option value="' + valueOfElement.Ci2_CarNo + '">');
                    });

                    $('#Jcm_CarTypeBrowser').empty();
                    $.each(response.getcartype, function(indexInArray, valueOfElement) {
                        $('#Jcm_CarTypeBrowser').append('<option value="' + valueOfElement.Ct_Name + '">');
                    });

                    $('#Jcm_ColorBrowser').empty();
                    $.each(response.getcolor, function(indexInArray, valueOfElement) {
                        $('#Jcm_ColorBrowser').append('<option value="' + valueOfElement.Co_Name + '">');
                    });

                    $('#Jcm_CompanyBrowser').empty();
                    $.each(response.getcompany, function(indexInArray, valueOfElement) {
                        $('#Jcm_CompanyBrowser').append('<option value="' + valueOfElement.Co_Name + '">');
                    });

                    $('#Jcm_CarModelBrowser').empty();
                    $.each(response.getmodel, function(indexInArray, valueOfElement) {
                        $('#Jcm_CarModelBrowser').append('<option value="' + valueOfElement.Mo_Name + '">');
                    });

                    $('#Jcm_CustomerBrowser').empty();
                    $.each(response.getcustomers, function(indexInArray, valueOfElement) {
                        $('#Jcm_CustomerBrowser').append('<option value="' + valueOfElement.Cu_Name + '">');

                    });

                    $('#Jcm_ModelNameBrowser').empty();
                    $.each(response.getmodelname, function(indexInArray, valueOfElement) {
                        $('#Jcm_ModelNameBrowser').append('<option value="' + valueOfElement.Ci2_ModelName + '">');
                    });

                    $('#Jcm_DriverNameBrowser').empty();
                    $.each(response.getDriverName, function(indexInArray, valueOfElement) {
                        $('#Jcm_DriverNameBrowser').append('<option value="' + valueOfElement.Jcm_DriverName + '">');
                    });

                }
            });

        });
    }

    function jobcardmainlydaily_fetch() {
        $(document).ready(function() {
            var jobcardstate = $('#Jc_Filter').val();
            var data = {
                'jobcardstate': jobcardstate,
            };
            var tabledata = $('#jobcardmainlydaily_data').DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    type: "GET",
                    data: data,
                    url: "<?php echo base_url('jobcardmainlydaily-fetch') ?>",


                },
                "columns": [{
                        "data": "Jcm_JcNumber"
                    },
                    {
                        "data": "Jcm_Customer"
                    },
                    {
                        "data": "Jcm_CarNo"
                    },
                    {
                        "data": "Jcm_CarType"
                    },
                    {
                        "data": "Jcm_DateIn"
                    },
                    {
                        "data": "Jcm_ItemPriceTotal",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm_ChTotal",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm_JcTotal",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 jobcardmainlydailyEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 jobcardmainlydailyDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-warning btn-sm m-1 jobcardmainlydailyPrint"><i class="bi bi-printer"></i> Print </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 jobcardmainlydailyDisplay "><i class="bi bi-info"></i></button>' : data;
                        }
                    }
                ],
                "columnDefs": [{
                    "targets": [0, 8],
                    "orderable": false,
                }],
                "lengthMenu": [
                    [5, 10, 15, 25, 50, 100],
                    [5, 10, 15, 25, 50, 100]
                ],
                "initComplete": function() {
                    tabledata.buttons().container().appendTo('#jobcardmainlydaily_data_wrapper .col-md-6:eq(0)');
                    $("#jobcardmainlydaily_data").show();
                },
                'dom': "<'row'<'col-sm-12 col-md-6'Bl><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

                "buttons": [{
                        'extend': 'print',
                        // title: function() {
                        //     var printTitle = '<img src="admin/assets/img/avatar.png" style="width: 64px; height: 64px;;"><h4 style="text-align: center; color:red;">JobCard Report</h4><br>'+
                        //     '<h4 style="text-align: center; color:red;">Alaa Mhdi</h4><br>';
                        //     return printTitle
                        // },
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'copy',
                        'exportOptions': {
                            'columns': [0, ':visible']
                        }
                    },
                    {
                        'extend': 'excel',
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'pdf',
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'colvis',
                        'postfixButtons': ['colvisRestore']
                    }
                ],

            });
            tabledata.buttons().container()
                .appendTo($('.table-tools-col:eq(0)', tabledata.table().container()));
        });
    }

    function jobcardmainlydaily_update() {
        var data = {
            'Jcm_ID': $('.Jcm_ID').val(),
            'Jcm_JcNumber': $('.Jcm_JcNumber').val(),
            'Jcm_CarNo': $('.Jcm_CarNo').val(),
            'Jcm_CarType': $('.Jcm_CarType').val(),
            'Jcm_Company': $('.Jcm_Company').val(),
            'Jcm_CarColor': $('.Jcm_CarColor').val(),
            'Jcm_CarEngine': $('.Jcm_CarEngine').val(),
            'Jcm_VinNo': $('.Jcm_VinNo').val(),
            'Jcm_ModelName': $('.Jcm_ModelName').val(),
            'Jcm_CarModel': $('.Jcm_CarModel').val(),
            'Jcm_Customer': $('.Jcm_Customer').val(),
            'Jcm_DriverName': $('.Jcm_DriverName').val(),
            'Jcm_CarKM': $('.Jcm_CarKM').val(),
            'Jcm_CarWH': $('.Jcm_CarWH').val(),
            'Jcm_DateIn': $('.Jcm_DateIn').val(),
            'Jcm_TimeIn': $('.Jcm_TimeIn').val(),
            'Jcm_DateOut': $('.Jcm_DateOut').val(),
            'Jcm_TimeOut': $('.Jcm_TimeOut').val(),
            'Jcm_WhTotal': $('.Jcm_WhTotal').val(),
            'Jcm_ItemPriceTotal': $('.Jcm_ItemPriceTotal').val(),
            'Jcm_ChTotal': $('.Jcm_ChTotal').val(),
            'Jcm_JcTotal': $('.Jcm_JcTotal').val(),
            'Jcm_State': $('.Jcm_State').val(),
            'Jcm_WorkPlace': $('.Jcm_WorkPlace').val(),
            'Jcm_CarOut': $('.Jcm_CarOut').is(":checked") ? 1 : 0
        };

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('jobcardmainlydaily-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#jobcardmainlydaily_data').DataTable();
                tabldata.ajax.reload();
            }
        });
    }

    function jobcardmainlydaily_getcustomerinfo() {
        var customername = $('#Jcm_Customer').val();
        var data = {
            'getname': customername,
        };

        $.ajax({
            type: "GET",
            url: "<?php echo base_url('jobcardmainlydaily-getcustomer') ?>",
            data: data,
            success: function(response) {

                $.each(response.getcustomerinfo, function(indexInArray, valueOfElement) {
                    if ((valueOfElement.Cu_State) == 'Active') {
                        if ($('#Jcm_ID').val() == '') {
                            jobcardmainlydaily_insertdata();
                            
                        } else {
                            jobcardmainlydaily_update();
                            jobcardmainlydaily_cleardata();
                        }

                    } else {

                        $('#error_Jcm_Customer').text('This Customer is Inactive');
                    }
                });
            }
        });
    }

    function number_format(number, decimals, decPoint, thousandsSep) {
        decimals = decimals || 0;
        number = parseFloat(number);

        if (!decPoint || !thousandsSep) {
            decPoint = '.';
            thousandsSep = ',';
        }

        var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
        var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
        var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
        var formattedNumber = "";

        while (numbersString.length > 3) {
            formattedNumber += thousandsSep + numbersString.slice(-3)
            numbersString = numbersString.slice(0, -3);
        }

        return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
    }

    //disabled buttons on datatable

    // JobCard Secondary
    $(document).on('click', '.jobcardmainlydailyItem', function() {
        jobcardmainlydailyItem()
    });

    function jobcardmainlydailyItem(){
        var displaycard = document.getElementById("jobcardsecondarydailycard");
        if (displaycard.style.display == "none") {
            jobcardsecondarydaily_fetch();
            jobcardsecondarydaily_filldata();
            displaycard.style.display = "block";
            document.getElementById('jobcardsecondarydailycard').scrollIntoView();
        } else {
            var tabldata = $('#jobcardsecondarydaily_data').DataTable();
            tabldata.destroy();
            displaycard.style.display = "none";
        }
        var displaycard2 = document.getElementById("jobcardsecondarydailyaction");
        if (displaycard2.style.display == "block") {
            tabldata.destroy();
            displaycard2.style.display = "none";
        }
    }

    $("#jobcardsecondarydailyaction").hide();
    $("#jobcardsecondarydailycard").hide();
    $(document).on('click', '.jobcardsecondarydailyAdd', function() {
        var displaycard = document.getElementById("jobcardsecondarydailyaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_jobcardsecondarydailytitle").innerText = "Add New Item";
            displaycard.style.display = "block";
            document.getElementById('card_jobcardsecondarydailytitle').scrollIntoView();
        } else {

            displaycard.style.display = "none";
            document.getElementById("card_jobcardsecondarydailytitle").innerText = "";
            jobcardsecondarydaily_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_jobcardsecondarydailytitle").innerText = "Add New Item";
            document.getElementById('card_jobcardsecondarydailytitle').scrollIntoView();
        }
        $('#Jc_WorkType').prop('disabled', false);
        $('.Jc_WorkType').val("Item").change();
    });

    $(document).on('click', '.jobcardsecondarydailyClose', function() {
        var displaycard = document.getElementById("jobcardsecondarydailyaction");
        jobcardsecondarydaily_cleardata();
        document.getElementById("card_jobcardsecondarydailytitle").innerText = "";
        displaycard.style.display = "none";


    });

    $(document).on('click', '.jobcardsecondarydailySave', function() {

        var Jcm2_ID = document.getElementById("Jcm2_ID").value;
        if (Jcm2_ID == '') {

            // jobcardsecondarydaily_checkdata();

            // if (error_Jcm2_WorkShop != '' || error_Jcm2_Date != '' || error_Jcm2_ItemName != '' || error_Jcm2_PartNumber != '' ||
            //     error_Jcm2_Unit != '' || error_Jcm2_Quantity != '' || error_Jcm2_UnitPrice != '' || error_Jcm2_MoneyTotal != '' ||
            //     error_Jcm2_WH != '' || error_Jcm2_CH != '' || error_Jcm2_Jc2Total != '' | error_Jcm2_Side != '' ||
            //     error_Jcm2_Number != '' || error_Jcm2_Brand != '' || error_Jcm2_Worker != '') {
            //     return false;
            // } else {

            jobcardsecondarydaily_insertdata();
            jobcardsecondarydaily_cleardata();
            // }
        } else {
            jobcardsecondarydaily_update();
            jobcardsecondarydaily_cleardata();
        }

    });

    $(document).on('click', '.jobcardsecondarydailyDelete', function() {
        var tabledata = $('#jobcardsecondarydaily_data').DataTable();
        var jobcardsecondarydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardsecondarydailyvalue = jobcardsecondarydaily[Object.keys(jobcardsecondarydaily)[0]];
        var getidjob = jobcardsecondarydaily[Object.keys(jobcardsecondarydaily)[1]];
        $.ajax({
            type: "GET",
            url: "<?php echo base_url('users-getPermissions') ?>",
            success: function(response) {
                $.each(response, function(indexInArray, valueOfElement) {
                    if (valueOfElement.P_Delete) {
                        $.ajax({
                            type: "POST",
                            url: "<?= base_url('jcs-delete') ?>",
                            data: {
                                'getid': jobcardsecondarydailyvalue,
                                'getidjob': getidjob,
                            },

                            success: function(response) {
                                alertify.set('notifier', 'position', 'top-right');
                                alertify.success(response.status);
                                $('#jobcardsecondarydaily_data').DataTable().ajax.reload();
                                jobcardsecondarydaily_total();
                                var tabldata3 = $('#jobcardmainlydaily_data').DataTable();
                                tabldata3.ajax.reload();
                            }
                        });
                    } else {
                        $('.jobcardsecondarydailyDelete').prop('disabled', true);
                    }
                });
            }
        });
    });

    $(document).on('click', '.jobcardsecondarydailyEdit', function() {
        var tabledata = $('#jobcardsecondarydaily_data').DataTable();
        var jobcardsecondarydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardsecondarydailyvalue = jobcardsecondarydaily[Object.keys(jobcardsecondarydaily)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('jcs-edit') ?>",
            data: {
                'getid': jobcardsecondarydailyvalue,
            },
            success: function(response) {
                $.each(response, function(key, value) {
                    $('#Jcm2_ID').val(value['Jcm2_ID']);
                    $('#Jcm2_FK').val(value['Jcm2_FK']);
                    $('#Jcm2_WorkShop').val(value['Jcm2_WorkShop']);
                    $('#Jcm2_Date').val(value['Jcm2_Date']);
                    $('#Jcm2_ItemName').val(value['Jcm2_ItemName']);
                    $('#Jcm2_PartNumber').val(value['Jcm2_PartNumber']);
                    $('#Jcm2_Unit').val(value['Jcm2_Unit']);
                    $('#Jcm2_UnitPrice').val(value['Jcm2_UnitPrice']);
                    $('#Jcm2_Quantity').val(value['Jcm2_Quantity']);
                    $('#Jcm2_MoneyTotal').val(value['Jcm2_MoneyTotal']);
                    $('#Jcm2_WH').val(value['Jcm2_WH']);
                    $('#Jcm2_CH').val(value['Jcm2_CH']);
                    $('#Jcm2_Jc2Total').val(value['Jcm2_Jc2Total']);
                    $('#Jcm2_Side').val(value['Jcm2_Side']);
                    $('#Jcm2_Number').val(value['Jcm2_Number']);
                    $('#Jcm2_Brand').val(value['Jcm2_Brand']);
                    $('#Jcm2_Company').val(value['Jcm2_Company']);
                    $('#Jcm2_Condition').val(value['Jcm2_Condition']);
                    $('#Jcm2_Description').val(value['Jcm2_Description']);
                    $('#Jcm2_Worker').val(value['Jcm2_Worker']);
                    $('#Jcm2_Notes').val(value['Jcm2_Notes']);

                    var displaycard = document.getElementById("jobcardsecondarydailyaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_jobcardsecondarydailytitle").innerText = "Item Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_jobcardsecondarydailytitle').scrollIntoView();
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_jobcardsecondarydailytitle').innerText = "";
                        document.getElementById('card_jobcardsecondarydailytitle').innerText = "Item Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_jobcardsecondarydailytitle').scrollIntoView();
                    }
                    check_WorkType();
                });
            }
        });
    });

    $(document).on('click', '.jobcardsecondarydailyPritn', function() {
        var tabledata = $('#jobcardsecondarydaily_data').DataTable();
        var jobcardsecondarydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardsecondarydailyvalue = jobcardsecondarydaily[Object.keys(jobcardsecondarydaily)[0]];

        $.ajax({
            type: "GET",
            url: "<?= base_url('jobcardmailydaily-print') ?>",
            data: {
                'getid': jobcardsecondarydailyvalue,
            },

            success: function(response) {
                var a = document.createElement('a');
                a.href = "<?php echo base_url('jobcardprint') ?>";
                window.open(a.href, '_blank');
            }
        });
    });

    // prevent write any char or special char in textbox
    $(document).ready(function() {
        $('#Jcm2_Quantity').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_WH').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_CH').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_UnitPrice').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_MoneyTotal').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_Jc2Total').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_Number').on('keypress', function(event) {
            var regex = new RegExp("^[0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });




    });

    // Adding Operations...
    $(document).ready(function() {
        $('#Jcm2_UnitPrice,#Jcm2_Quantity,#Jcm2_CH').keyup(function() {
            var total = 0;
            var x = Number($('#Jcm2_UnitPrice').val());
            var y = Number($('#Jcm2_Quantity').val());
            var z = Number($('#Jcm2_CH').val());
            var total = x * y;
            $('#Jcm2_MoneyTotal').val(total);
            var tt = Number($('#Jcm2_MoneyTotal').val());
            $('#Jcm2_Jc2Total').val(z + tt);
        });
    });

    function jobcardsecondarydaily_cleardata() {
        $('#Jcm2_ID').val('');
        $('#Jcm2_WorkShop').val('');
        $('#Jcm2_Date').val('');
        $('#Jcm2_ItemName').val('');
        $('#Jcm2_PartNumber').val('');
        $('#Jcm2_Unit').val('');
        $('#Jcm2_Quantity').val('');
        $('#Jcm2_UnitPrice').val('');
        $('#Jcm2_MoneyTotal').val('');
        $('#Jcm2_WH').val('');
        $('#Jcm2_CH').val('');
        $('#Jcm2_Jc2Total').val('');
        $('#Jcm2_Side').val('');
        $('#Jcm2_Number').val('');
        $('#Jcm2_Brand').val('');
        $('#Jcm2_Company').val('');
        $('#Jcm2_Condition').val('');
        $('#Jcm2_Description').val('');
        $('#Jcm2_Worker').val('');
        $('#Jcm2_Notes').val('');

    }

    function jobcardsecondarydaily_checkdata() {
        if ($.trim($('.Jcm2_WorkShop').val()).length == 0) {
            error_Jcm2_WorkShop = "plz, input the WorkShop";
            $('#error_Jcm2_WorkShop').text(error_Jcm2_WorkShop);
        } else {
            error_Jcm2_WorkShop = "";
            $('#error_Jcm2_WorkShop').text(error_Jcm2_WorkShop);
        }
        if ($.trim($('.Jcm2_Date').val()).length == 0) {
            error_Jcm2_Date = "plz, input the Date";
            $('#error_Jcm2_Date').text(error_Jcm2_Date);
        } else {
            error_Jcm2_Date = "";
            $('#error_Jcm2_Date').text(error_Jcm2_Date);
        }
        if ($.trim($('.Jcm2_ItemName').val()).length == 0) {
            error_Jcm2_ItemName = "plz, input the Item Name";
            $('#error_Jcm2_ItemName').text(error_Jcm2_ItemName);
        } else {
            error_Jcm2_ItemName = "";
            $('#error_Jcm2_ItemName').text(error_Jcm2_ItemName);
        }
        if ($.trim($('.Jcm2_PartNumber').val()).length == 0) {
            error_Jcm2_PartNumber = "plz, input the PartNumber";
            $('#error_Jcm2_PartNumber').text(error_Jcm2_PartNumber);
        } else {
            error_Jcm2_PartNumber = "";
            $('#error_Jcm2_PartNumber').text(error_Jcm2_PartNumber);
        }
        if ($.trim($('.Jcm2_Unit').val()).length == 0) {
            error_Jcm2_Unit = "plz, input the Unit";
            $('#error_Jcm2_Unit').text(error_Jcm2_Unit);
        } else {
            error_Jcm2_Unit = "";
            $('#error_Jcm2_Unit').text(error_Jcm2_Unit);
        }
        if ($.trim($('.Jcm2_Quantity').val()).length == 0) {
            error_Jcm2_Quantity = "plz, input the Quantity";
            $('#error_Jcm2_Quantity').text(error_Jcm2_Quantity);
        } else {
            error_Jcm2_Quantity = "";
            $('#error_Jcm2_Quantity').text(error_Jcm2_Quantity);
        }
        if ($.trim($('.Jcm2_UnitPrice').val()).length == 0) {
            error_Jcm2_UnitPrice = "plz, input the Unit Price";
            $('#error_Jcm2_UnitPrice').text(error_Jcm2_UnitPrice);
        } else {
            error_Jcm2_UnitPrice = "";
            $('#error_Jcm2_UnitPrice').text(error_Jcm2_UnitPrice);
        }
        if ($.trim($('.Jcm2_MoneyTotal').val()).length == 0) {
            error_Jcm2_MoneyTotal = "plz, input the MoneyTotal";
            $('#error_Jcm2_MoneyTotal').text(error_Jcm2_MoneyTotal);
        } else {
            error_Jcm2_MoneyTotal = "";
            $('#error_Jcm2_MoneyTotal').text(error_Jcm2_MoneyTotal);
        }
        if ($.trim($('.Jcm2_WH').val()).length == 0) {
            error_Jcm2_WH = "plz, input the Work Hour";
            $('#error_Jcm2_WH').text(error_Jcm2_WH);
        } else {
            error_Jcm2_WH = "";
            $('#error_Jcm2_WH').text(error_Jcm2_WH);
        }
        if ($.trim($('.Jcm2_CH').val()).length == 0) {
            error_Jcm2_CH = "plz, input the CH";
            $('#error_Jcm2_CH').text(error_Jcm2_CH);
        } else {
            error_Jcm2_CH = "";
            $('#error_Jcm2_CH').text(error_Jcm2_CH);
        }
        if ($.trim($('.Jcm2_Jc2Total').val()).length == 0) {
            error_Jcm2_Jc2Total = "plz, input the Work Total";
            $('#error_Jcm2_Jc2Total').text(error_Jcm2_Jc2Total);
        } else {
            error_Jcm2_Jc2Total = "";
            $('#error_Jcm2_Jc2Total').text(error_Jcm2_Jc2Total);
        }
        if ($.trim($('.Jcm2_Side').val()).length == 0 || $.trim($('.Jcm2_Side').val()) == "Select Side") {
            error_Jcm2_Side = "plz, input the Side";
            $('#error_Jcm2_Side').text(error_Jcm2_Side);
        } else {
            error_Jcm2_Side = "";
            $('#error_Jcm2_Side').text(error_Jcm2_Side);
        }
        if ($.trim($('.Jcm2_Number').val()).length == 0) {
            error_Jcm2_Number = "plz, input the Number";
            $('#error_Jcm2_Number').text(error_Jcm2_Number);
        } else {
            error_Jcm2_Number = "";
            $('#error_Jcm2_Number').text(error_Jcm2_Number);
        }
        if ($.trim($('.Jcm2_Brand').val()).length == 0) {
            error_Jcm2_Brand = "plz, input the Brand";
            $('#error_Jcm2_Brand').text(error_Jcm2_Brand);
        } else {
            error_Jcm2_Brand = "";
            $('#error_Jcm2_Brand').text(error_Jcm2_Brand);
        }
        if ($.trim($('.Jcm2_Worker').val()).length == 0) {
            error_Jcm2_Worker = "plz, input the Worker";
            $('#error_Jcm2_Worker').text(error_Jcm2_Worker);
        } else {
            error_Jcm2_Worker = "";
            $('#error_Jcm2_Worker').text(error_Jcm2_Worker);
        }


    }

    function jobcardsecondarydaily_insertdata() {
        var data = {
            'Jcm2_FK': $('#Jcm2_FK').val(),
            'Jcm2_WorkShop': $('#Jcm2_WorkShop').val(),
            'Jcm2_Date': $('#Jcm2_Date').val(),
            'Jcm2_ItemName': $('#Jcm2_ItemName').val(),
            'Jcm2_PartNumber': $('#Jcm2_PartNumber').val(),
            'Jcm2_Unit': $('#Jcm2_Unit').val(),
            'Jcm2_Quantity': $('#Jcm2_Quantity').val(),
            'Jcm2_UnitPrice': $('#Jcm2_UnitPrice').val(),
            'Jcm2_MoneyTotal': $('#Jcm2_MoneyTotal').val(),
            'Jcm2_WH': $('#Jcm2_WH').val(),
            'Jcm2_CH': $('#Jcm2_CH').val(),
            'Jcm2_Jc2Total': $('#Jcm2_Jc2Total').val(),
            'Jcm2_Side': $('#Jcm2_Side').val(),
            'Jcm2_Number': $('#Jcm2_Number').val(),
            'Jcm2_Brand': $('#Jcm2_Brand').val(),
            'Jcm2_Company': $('#Jcm2_Company').val(),
            'Jcm2_Condition': $('#Jcm2_Condition').val(),
            'Jcm2_Description': $('#Jcm2_Description').val(),
            'Jcm2_Worker': $('#Jcm2_Worker').val(),
            'Jcm2_Notes': $('#Jcm2_Notes').val(),
        };

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('jcs-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#jobcardsecondarydaily_data').DataTable();
                tabldata.ajax.reload();
                jobcardsecondarydaily_total();
                var tabldata = $('#jobcardmainlydaily_data').DataTable();
                tabldata.ajax.reload();
            }
        });
    }

    let Item_Dic = new Map();

    function jobcardsecondarydaily_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('jcs-filldata') ?>",
                success: function(response) {
                    $('#Jcm2_Site').empty();
                    $('#Jcm2_Side').append('<option selected>' + "Select Side" + '</option>');
                    $.each(response.getside, function(indexInArray, valueOfElement) {
                        $('#Jcm2_Side').append('<option value="' + valueOfElement.Si_Name + '">' + valueOfElement.Si_Name + '</option>');
                    });

                    $('#Jcm2_WorkShopBrowser').empty();
                    $.each(response.getworkshop, function(indexInArray, valueOfElement) {
                        $('#Jcm2_WorkShopBrowser').append('<option value="' + valueOfElement.Ws_Name + '">');
                    });

                    $('#Jcm2_UnitBrowser').empty();
                    $.each(response.getunit, function(indexInArray, valueOfElement) {
                        $('#Jcm2_UnitBrowser').append('<option value="' + valueOfElement.Ui_Name + '">');
                    });

                    $('#Jcm2_BrandBrowser').empty();
                    $.each(response.getbrand, function(indexInArray, valueOfElement) {
                        $('#Jcm2_BrandBrowser').append('<option value="' + valueOfElement.B_Name + '">');
                    });

                    $('#Jcm2_ItemNameBrowser').empty();
                    $.each(response.getitemname, function(indexInArray, valueOfElement) {
                        $('#Jcm2_ItemNameBrowser').append('<option value="' + valueOfElement.IT_Name + '">');
                        Item_Dic.set(valueOfElement.IT_ArabicName, valueOfElement.IT_Name);
                    });
                    $.each(response.getitemname, function(indexInArray, valueOfElement) {
                        $('#Jcm2_ItemNameBrowser').append('<option value="' + valueOfElement.IT_ArabicName + '">');
                    });

                    $('#Jcm2_PartNumberBrowser').empty();
                    $.each(response.getitempartnumber, function(indexInArray, valueOfElement) {
                        $('#Jcm2_PartNumberBrowser').append('<option value="' + valueOfElement.IT2_PartNumber + '">');
                    });

                    $('#Jcm2_CompanyBrowser').empty();
                    $.each(response.getcompany, function(indexInArray, valueOfElement) {
                        $('#Jcm2_CompanyBrowser').append('<option value="' + valueOfElement.Co_Name + '">');
                    });
                }
            });
        });
    }

    //convert item name from arabic to english
    $(document).ready(function() {
        $('#Jcm2_ItemName').on("keypress", function(e) {
            if (e.keyCode == 13) {
                itemeng = Item_Dic.get($('#Jcm2_ItemName').val())
                if (Item_Dic.get($('#Jcm2_ItemName').val()))
                    $('#Jcm2_ItemName').val(itemeng);
                var data = {
                    'ItemName': $('#Jcm2_ItemName').val(),
                };
                $.ajax({
                    method: "get",
                    url: "<?php echo base_url('jcs-PartNumber') ?>",
                    data: data,
                    success: function(response) {
                        $('#Jcm2_PartNumberBrowser').empty();
                        $.each(response, function(indexInArray, valueOfElement) {
                            $('#Jcm2_PartNumberBrowser').append('<option value="' + valueOfElement.IT2_PartNumber + '">');
                        });
                    }
                });
            }
        });
    });

    function jobcardsecondarydaily_fetch() {
        $(document).ready(function() {
            var tabledata2 = $('#jobcardsecondarydaily_data').DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    type: "GET",
                    data: {
                        'getid': $('#Jcm2_FK').val(),
                    },
                    url: "<?php echo base_url('jcs-fetch') ?>",
                },
                "columns": [{
                        "data": "Jcm2_WorkShop"
                    },
                    {
                        "data": "Jcm2_Date"
                    },
                    {
                        "data": "Jcm2_ItemName"
                    },
                    {
                        "data": "Jcm2_PartNumber"
                    },
                    {
                        "data": "Jcm2_Unit"
                    },
                    {
                        "data": "Jcm2_Quantity",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_UnitPrice",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_MoneyTotal",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_CH",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_Jc2Total",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 jobcardsecondarydailyEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 jobcardsecondarydailyDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 jobcardsecondarydailyDisplay"><i class="bi bi-info"></i></button>' : data;
                        }
                    }
                ],
                "columnDefs": [{
                        "targets": [0, 10],
                        "orderable": false,
                    },
                    {
                        "targets": [9],
                        "createdCell": function(td, cellData, rowData, row, col) {
                            if (cellData > 100000) {
                                $(td).css({
                                    'background-color': "#ff5252"
                                });
                            }
                        }
                    },
                ],
                "lengthMenu": [
                    [50, 100],
                    [50, 100]
                ],
            });
        });
    }

    $(document).on('click', '.jobcardmainlydailyDisplay', function() {
        var tabledata = $('#jobcardmainlydaily_data').DataTable();
        var jobcardmainlydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardmainlydailyvalue = jobcardmainlydaily[Object.keys(jobcardmainlydaily)[0]];
        var data = {
            'getid': jobcardmainlydailyvalue,
        };
        $(document).ready(function() {
            var tabldata = $('#jobcardsecondarydaily_dataShow').DataTable();
            tabldata.destroy();
            var tabledata = $('#jobcardsecondarydaily_dataShow').DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    type: "GET",
                    data: data,
                    url: "<?php echo base_url('jcs-fetch') ?>",
                },
                "columns": [{
                        "data": "Jcm2_WorkShop"
                    },
                    {
                        "data": "Jcm2_Date"
                    },
                    {
                        "data": "Jcm2_ItemName"
                    },
                    {
                        "data": "Jcm2_PartNumber"
                    },
                    {
                        "data": "Jcm2_Unit"
                    },
                    {
                        "data": "Jcm2_Quantity",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_UnitPrice",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_MoneyTotal",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_CH",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_Jc2Total",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    }
                ],
                "columnDefs": [{
                    "targets": [0, 9],
                    "orderable": false,
                }],
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 100],
                    [5, 10, 15, 20, 25, 100]
                ],
            });
            tabledata.buttons().container()
                .appendTo($('.table-tools-col:eq(0)', tabledata.table().container()));
        });

        $('#ItemsShowModel').modal('show');
    });

    $(document).on('click', '.btn_CloseItemsModal', function() {
        $('#ItemsShowModel').modal('hide');
    });

    function jobcardsecondarydaily_update() {
        var data = {
            'Jcm2_ID': $('#Jcm2_ID').val(),
            'Jcm2_FK': $('#Jcm2_FK').val(),
            'Jcm2_WorkShop': $('#Jcm2_WorkShop').val(),
            'Jcm2_Date': $('#Jcm2_Date').val(),
            'Jcm2_ItemName': $('#Jcm2_ItemName').val(),
            'Jcm2_PartNumber': $('#Jcm2_PartNumber').val(),
            'Jcm2_Unit': $('#Jcm2_Unit').val(),
            'Jcm2_Quantity': $('#Jcm2_Quantity').val(),
            'Jcm2_UnitPrice': $('#Jcm2_UnitPrice').val(),
            'Jcm2_MoneyTotal': $('#Jcm2_MoneyTotal').val(),
            'Jcm2_WH': $('#Jcm2_WH').val(),
            'Jcm2_CH': $('#Jcm2_CH').val(),
            'Jcm2_Jc2Total': $('#Jcm2_Jc2Total').val(),
            'Jcm2_Side': $('#Jcm2_Side').val(),
            'Jcm2_Number': $('#Jcm2_Number').val(),
            'Jcm2_Brand': $('#Jcm2_Brand').val(),
            'Jcm2_Company': $('#Jcm2_Company').val(),
            'Jcm2_Condition': $('#Jcm2_Condition').val(),
            'Jcm2_Description': $('#Jcm2_Description').val(),
            'Jcm2_Worker': $('#Jcm2_Worker').val(),
            'Jcm2_Notes': $('#Jcm2_Notes').val(),
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('jcs-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata2 = $('#jobcardsecondarydaily_data').DataTable();
                tabldata2.ajax.reload();
                jobcardsecondarydaily_total();
                var tabldata3 = $('#jobcardmainlydaily_data').DataTable();
                tabldata3.ajax.reload();
            }
        });
    }

    function jobcardsecondarydaily_total() {
        $.ajax({
            type: "Get",
            data: {
                'getid': $('#Jcm2_FK').val(),
            },
            url: "<?php echo base_url('jcs-total') ?>",
            success: function(response) {
                $('#Jcm_WhTotal').val(response.gettotal[0]['T_WH']);
                $('#Jcm_ItemPriceTotal').val(response.gettotal[0]['T_M']);
                $('#Jcm_ChTotal').val(response.gettotal[0]['T_CH']);
                $('#Jcm_JcTotal').val(response.gettotal[0]['T_JC']);
            }
        });
    }
</script>

<script>
    $(document).on('click', '.jobcardmainlydailyorder', function() {
        orderone_fetch();
        orderone_filldata();
        $('#OrderModel').modal('show');
    });

    $(document).on('click', '.closemodal', function() {
        var displaycard = document.getElementById("orderoneaction");
        orderone_cleardata();
        document.getElementById("card_orderonetitle").innerText = "";
        $('.orderoneItem').prop('disabled', true);
        $('.orderoneorder').prop('disabled', true);
        displaycard.style.display = "none";

        var displaycard2 = document.getElementById("ordertwoaction");
        ordertwo_cleardata();
        document.getElementById("card_ordertwotitle").innerText = "";
        displaycard2.style.display = "none";

        var displaycard3 = document.getElementById("ordertwocard");
        var tabldata = $('#ordertwo_data').DataTable();
        tabldata.destroy();
        displaycard3.style.display = "none";
        $('#OrderModel').modal('toggle');
        var tabldata = $('#orderone_data').DataTable();
        tabldata.destroy();
    });

    $("#orderoneaction").hide();
    $(document).on('click', '.orderoneAdd', function() {
        var displaycard = document.getElementById("orderoneaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_orderonetitle").innerText = "Add New Order";
            $('#Or_JcNumber').val($('#Jcm_JcNumber').val());
            displaycard.style.display = "block";
            document.getElementById('card_orderonetitle').scrollIntoView();
        } else {
            displaycard.style.display = "none";
            document.getElementById("card_orderonetitle").innerText = "";
            orderone_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_orderonetitle").innerText = "Add New Order";
            document.getElementById('card_orderonetitle').scrollIntoView();
        }
    });

    $(document).on('click', '.orderoneClose', function() {
        var displaycard = document.getElementById("orderoneaction");
        orderone_cleardata();
        document.getElementById("card_orderonetitle").innerText = "";
        $('.orderoneItem').prop('disabled', true);
        $('.orderoneorder').prop('disabled', true);
        displaycard.style.display = "none";

        var displaycard2 = document.getElementById("ordertwoaction");
        ordertwo_cleardata();
        document.getElementById("card_ordertwotitle").innerText = "";
        displaycard2.style.display = "none";

        var displaycard3 = document.getElementById("ordertwocard");
        var tabldata = $('#ordertwo_data').DataTable();
        tabldata.destroy();
        displaycard3.style.display = "none";
    });

    $(document).on('click', '.orderoneSave', function() {
        var Or_ID = document.getElementById("Or_ID").value;
        if (Or_ID == '') {
            orderone_checkdata();
            if (error_Or_JcNumber != '' || error_Or_CarNo != '' || error_Or_CarType != '' || error_Or_Customer != '' ||
                error_Or_DateOut != '') {
                return false;
            } else {
                orderone_getcustomerinfo();
            }
        } else {
            orderone_checkdata();
            if (error_Or_JcNumber != '' || error_Or_CarNo != '' || error_Or_CarType != '' || error_Or_Customer != '' ||
                error_Or_DateOut != '') {
                return false;
            } else {
                orderone_getcustomerinfo();
            }
        }
    });

    $(document).on('click', '.orderoneDelete', function() {
        var tabledata = $('#orderone_data').DataTable();
        var orderone = tabledata.row($(this).closest('tr')).data();
        var orderonevalue = orderone[Object.keys(orderone)[0]];
        $.ajax({
            type: "POST",
            url: "<?= base_url('orderone-delete') ?>",
            data: {
                'getid': orderonevalue,
            },
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                $('#orderone_data').DataTable().ajax.reload();
            }
        });
    });

    $(document).on('click', '.orderoneEdit', function() {
        var tabledata = $('#orderone_data').DataTable();
        var orderone = tabledata.row($(this).closest('tr')).data();
        var orderonevalue = orderone[Object.keys(orderone)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('orderone-edit') ?>",
            data: {
                'getid': orderonevalue,
            },
            success: function(response) {
                $.each(response, function(key, value) {
                    $('#Or_ID').val(value['Or_ID']);
                    $('#Or_JcNumber').val(value['Or_JcNumber']);
                    $('#Or_CarNo').val(value['Or_CarNo']);
                    $('#Or_CarType').val(value['Or_CarType']);
                    $('#Or_Customer').val(value['Or_Customer']);
                    $('#Or_DateOut').val(value['Or_DateOut']);
                    $('#Or_PackingDate').val(value['Or_PackingDate']);
                    $('#Or_State').val(value['Or_State']);
                    $('#Or_WorkPlace').val(value['Or_WorkPlace']);
                    $('#Or_Total').val(value['Or_Total']);
                    $('#Or_Notes').val(value.Or_Notes);
                    $('#Or_Engineer_S').prop('checked', value.Or_Engineer_S);
                    $('#Or_StockKeeper_S').prop('checked', value.Or_StockKeeper_S);
                    $('#Or_Supervisor_S').prop('checked', value.Or_Supervisor_S);
                    $('#Or_Finish').prop('checked', value.Or_Finish);

                    var displaycard = document.getElementById("orderoneaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_orderonetitle").innerText = "Order Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_orderonetitle').scrollIntoView();
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_orderonetitle').innerText = "";
                        document.getElementById('card_orderonetitle').innerText = "Order Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_orderonetitle').scrollIntoView();

                    }
                    $('#Or2_FK').val(value['Or_ID']);

                    $('.orderoneItem').prop('disabled', false);

                    if ($('#Or_Engineer_S').is(":checked") && $('#Or_Supervisor_S').is(":checked") && $('#Or_StockKeeper_S').is(":checked") && !$('#Or_AddToJc').is(":checked")) {
                        $('#Or_Finish').prop('disabled', false);
                    } else {
                        $('#Or_Finish').prop('disabled', true);
                    }
                });
            }
        });

        var displaycard = document.getElementById("ordertwocard");
        if (displaycard.style.display == "block") {
            var tabldata = $('#ordertwo_data').DataTable();
            tabldata.destroy();
            displaycard.style.display = "none";
        }

        var displaycard2 = document.getElementById("ordertwoaction");
        if (displaycard2.style.display == "block") {
            var tabldata = $('#ordertwo_data').DataTable();
            tabldata.destroy();
            displaycard2.style.display = "none";
        }
    });

    $(document).ready(function() {
        $('#Or_Finish').change(function() {
            if ($(this).is(":checked")) {
                $('.orderoneorder').prop('disabled', false);
            } else {
                $('.orderoneorder').prop('disabled', true);
            }
        });
    });

    $(document).ready(function() {
        if ($('#Or_AddToJc').is(":checked")) {
            // $('.orderoneorder').prop('disabled', true); 
            $('#Or_Finish').prop('disabled', true);
        }
    });

    $(document).on('click', '.orderoneorder', function() {
        $('#Or_AddToJc').prop('checked', true);
        var data = {
            'jobcardnumber': $('#Or_JcNumber').val(),
            'orderid': $('#Or_ID').val(),
            'getJcID': $('#Jcm_ID').val(),
            'Or_AddToJc': (function() {
                if ($("#Or_AddToJc").is(":checked")) {
                    return 1;
                } else return 0;
            })(),
        };


        $.ajax({
            type: "POST",
            url: "<?php echo base_url('jobcardmainlydaily-addorder') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);

                var tabldata = $('#jobcardmainlydaily_data').DataTable();
                tabldata.ajax.reload();

                var displaycard = document.getElementById("jobcardsecondarydailycard");
                if (displaycard.style.display == "none") {
                    jobcardsecondarydaily_totalorder();
                } else {
                    var tabldata2 = $('#jobcardsecondarydaily_data').DataTable();
                    tabldata2.ajax.reload();
                    jobcardsecondarydaily_totalorder();
                }

            }
        });

        $('.orderoneorder').prop('disabled', true);
        $('#Or_Finish').prop('disabled', true);

    });

    $(document).ready(function() {
        $('#Or_Customer').keyup(function() {
            var customername = $('#Or_Customer').val();
            var data = {
                'getname': customername,
            };
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('orderone-getcustomer') ?>",
                data: data,
                success: function(response) {
                    $.each(response.getcustomerinfo, function(indexInArray, valueOfElement) {
                        if ((valueOfElement.Cu_State) == 'Inactive') {
                            $('#Or_Customer').css({
                                'background-color': '#ff5252'
                            });
                        } else {
                            $('#Or_Customer').css({
                                'background-color': 'white'
                            });
                        }
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('#Or_JcNumber').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
    });

    $(document).on('change', '.Or_Filter', function() {
        var tablerefresh = $('#orderone_data').DataTable();
        tablerefresh.destroy();
        orderone_fetch();
    });

    function orderone_cleardata() {
        $('#Or_ID').val('');
        $('#Or_JcNumber').val('');
        $('#Or_CarNo').val('');
        $('#Or_CarType').val('');
        $('#Or_Customer').val('');
        $('#Or_State').val('');
        $('#Or_WorkPlace').val('');
        $('#Or_DateOut').val('');
        $('#Or_Notes').val('');
        $('#Or_PackingDate').val('');
        $('#Or_Engineer_S').prop('checked', false);
        $('#Or_StockKeeper_S').prop('checked', false);
        $('#Or_Supervisor_S').prop('checked', false);
        $('#Or_Finish').prop('checked', false);
    }

    function orderone_checkdata() {
        if ($.trim($('.Or_JcNumber').val()).length == 0) {
            error_Or_JcNumber = "plz, input the JobCard Number";
            $('#error_Or_JcNumber').text(error_Or_JcNumber);
        } else {
            error_Or_JcNumber = "";
            $('#error_Or_JcNumber').text(error_Or_JcNumber);
        }
        if ($.trim($('.Or_CarNo').val()).length == 0) {
            error_Or_CarNo = "plz, input the CarNo";
            $('#error_Or_CarNo').text(error_Or_CarNo);
        } else {
            error_Or_CarNo = "";
            $('#error_Or_CarNo').text(error_Or_CarNo);
        }
        if ($.trim($('.Or_CarType').val()).length == 0) {
            error_Or_CarType = "plz, input the Car Type";
            $('#error_Or_CarType').text(error_Or_CarType);
        } else {
            error_Or_CarType = "";
            $('#error_Or_CarType').text(error_Or_CarType);
        }
        if ($.trim($('.Or_Customer').val()).length == 0 || $.trim($('.Or_Customer').val()) == 'Select Customer') {
            error_Or_Customer = "plz, input the Customer";
            $('#error_Or_Customer').text(error_Or_Customer);
        } else {
            error_Or_Customer = "";
            $('#error_Or_Customer').text(error_Or_Customer);
        }
        if ($.trim($('.Or_DateOut').val()).length == 0) {
            error_Or_DateOut = "plz, input the DateOut";
            $('#error_Or_DateOut').text(error_Or_DateOut);
        } else {
            error_Or_DateOut = "";
            $('#error_Or_DateOut').text(error_Or_DateOut);
        }
        if ($.trim($('.Or_State').val()).length == 0 || $.trim($('.Or_State').val()) == 'Select State') {
            error_Or_State = "plz, input the State";
            $('#error_Or_State').text(error_Or_State);
        } else {
            error_Or_State = "";
            $('#error_Or_State').text(error_Or_State);
        }
        if ($.trim($('.Or_WorkPlace').val()).length == 0 || $.trim($('.Or_State').val()) == 'Select State') {
            error_Or_WorkPlace = "plz, input the WorkPlace";
            $('#error_Or_WorkPlace').text(error_Or_WorkPlace);
        } else {
            error_Or_WorkPlace = "";
            $('#error_Or_WorkPlace').text(error_Or_WorkPlace);
        }
    }

    function orderone_insertdata() {
        var data = {
            'Or_JcNumber': $('.Or_JcNumber').val(),
            'Or_CarNo': $('.Or_CarNo').val(),
            'Or_CarType': $('.Or_CarType').val(),
            'Or_Customer': $('.Or_Customer').val(),
            'Or_DateOut': $('.Or_DateOut').val(),
            'Or_State': $('.Or_State').val(),
            'Or_WorkPlace': $('.Or_WorkPlace').val(),
            'Or_Notes': $('.Or_Notes').val(),
            'Or_Engineer_S': (function() {
                if ($("#Or_Engineer_S").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_Supervisor_S': (function() {
                if ($("#Or_Supervisor_S").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_Finish': (function() {
                if ($("#Or_Finish").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_AddToJc': (function() {
                if ($("#Or_AddToJc").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
        };
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('orderone-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);

                var tabldata = $('#orderone_data').DataTable();
                tabldata.ajax.reload();
            }
        });
    }

    function orderone_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('orderone-filldata') ?>",
                success: function(response) {
                    $('#Or_State').empty();
                    $('#Or_State').append('<option selected>' + "Select State" + '</option>');
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                        $('#Or_State').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');
                    });

                    $('#Or_CarNoBrowser').empty();
                    $.each(response.getcarno, function(indexInArray, valueOfElement) {
                        $('#Or_CarNoBrowser').append('<option value="' + valueOfElement.Ci2_CarNo + '">');
                    });

                    $('#Or_CarTypeBrowser').empty();
                    $.each(response.getcartype, function(indexInArray, valueOfElement) {
                        $('#Or_CarTypeBrowser').append('<option value="' + valueOfElement.Ct_Name + '">');
                    });

                    $('#Or_CustomerBrowser').empty();
                    $.each(response.getcustomers, function(indexInArray, valueOfElement) {
                        $('#Or_CustomerBrowser').append('<option value="' + valueOfElement.Cu_Name + '">');

                    });
                    $('#Or_WorkPlaceBrowser').empty();
                    $.each(response.getworkplace, function(indexInArray, valueOfElement) {
                        $('#Or_WorkPlaceBrowser').append('<option value="' + valueOfElement.Wsp_Name + '">');

                    });
                }
            });
        });
    }

    function orderone_fetch() {
        $(document).ready(function() {
            var orderstate = $('#Jcm_JcNumber').val();
            var data = {
                'orderstate': orderstate,
            };
            var tabledata = $('#orderone_data').DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    type: "GET",
                    data: data,
                    url: "<?php echo base_url('orderone-fetch2') ?>",
                },
                "columns": [{
                        "data": "Or_ID"
                    },
                    {
                        "data": "Or_JcNumber"
                    },
                    {
                        "data": "Or_CarNo"
                    },
                    {
                        "data": "Or_CarType"
                    },
                    {
                        "data": "Or_Customer"
                    },
                    {
                        "data": "Or_Total",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 orderoneEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 orderoneDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 orderoneDisplay"><i class="bi bi-info"></i></button>' : data;
                        }
                    }
                ],
                "columnDefs": [{
                    "targets": [0, 6],
                    "orderable": false,
                }],
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 100],
                    [5, 10, 15, 20, 25, 100]
                ],
                "initComplete": function() {
                    tabledata.buttons().container().appendTo('#orderone_data_wrapper .col-md-6:eq(0)');
                    $("#orderone_data").show();
                },
                'dom': "<'row'<'col-sm-12 col-md-6'Bl><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                "buttons": [{
                        'extend': 'print',
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'copy',
                        'exportOptions': {
                            'columns': [0, ':visible']
                        }
                    },
                    {
                        'extend': 'excel',
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'pdf',
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'colvis',
                        'postfixButtons': ['colvisRestore']
                    }
                ],

            });
            tabledata.buttons().container()
                .appendTo($('.table-tools-col:eq(0)', tabledata.table().container()));
        });
    }

    function orderone_update() {
        var data = {
            'Or_ID': $('.Or_ID').val(),
            'Or_JcNumber': $('.Or_JcNumber').val(),
            'Or_CarNo': $('.Or_CarNo').val(),
            'Or_CarType': $('.Or_CarType').val(),
            'Or_Customer': $('.Or_Customer').val(),
            'Or_DateOut': $('.Or_DateOut').val(),
            'Or_State': $('.Or_State').val(),
            'Or_WorkPlace': $('.Or_WorkPlace').val(),
            'Or_Total': $('.Or_Total').val(),
            'Or_Notes': $('.Or_Notes').val(),
            'Or_Engineer_S': (function() {
                if ($("#Or_Engineer_S").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_Supervisor_S': (function() {
                if ($("#Or_Supervisor_S").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_Finish': (function() {
                if ($("#Or_Finish").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_AddToJc': (function() {
                if ($("#Or_AddToJc").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
        };

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('orderone-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#orderone_data').DataTable();
                tabldata.ajax.reload();
            }
        });
    }

    function orderone_getcustomerinfo() {
        var customername = $('#Or_Customer').val();
        var data = {
            'getname': customername,
        };
        $.ajax({
            type: "GET",
            url: "<?php echo base_url('orderone-getcustomer') ?>",
            data: data,
            success: function(response) {
                $.each(response.getcustomerinfo, function(indexInArray, valueOfElement) {

                    if ((valueOfElement.Cu_State) == 'Active') {
                        if ($('#Or_ID').val() == '') {
                            orderone_insertdata();
                            orderone_cleardata();
                        } else {
                            orderone_update();

                        }
                    } else {

                        $('#error_Or_Customer').text('This Customer is Inactive');
                    }
                });
            }
        });
    }

    function jobcardsecondarydaily_totalorder() {
        $.ajax({
            type: "Get",
            data: {
                'getid': $('#Jcm2_FK').val(),
            },
            url: "<?php echo base_url('jcs-total') ?>",
            success: function(response) {
                $('#Jcm_WhTotal').val(response.gettotal[0]['T_WH']);
                $('#Jcm_ItemPriceTotal').val(response.gettotal[0]['T_M']);
                $('#Jcm_ChTotal').val(response.gettotal[0]['T_CH']);
                $('#Jcm_JcTotal').val(response.gettotal[0]['T_JC']);
            }
        });
    }

    function number_format(number, decimals, decPoint, thousandsSep) {
        decimals = decimals || 0;
        number = parseFloat(number);
        if (!decPoint || !thousandsSep) {
            decPoint = '.';
            thousandsSep = ',';
        }
        var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
        var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
        var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
        var formattedNumber = "";
        while (numbersString.length > 3) {
            formattedNumber += thousandsSep + numbersString.slice(-3)
            numbersString = numbersString.slice(0, -3);
        }
        return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
    }

    // // Order Secondary
    $(document).on('click', '.orderoneItem', function() {
        var displaycard = document.getElementById("ordertwocard");
        if (displaycard.style.display == "none") {
            ordertwo_fetch();
            ordertwo_filldata();
            displaycard.style.display = "block";
            document.getElementById('ordertwocard').scrollIntoView();
        } else {
            var tabldata = $('#ordertwo_data').DataTable();
            tabldata.destroy();
            displaycard.style.display = "none";
        }
        var displaycard2 = document.getElementById("ordertwoaction");
        if (displaycard2.style.display == "block") {
            var tabldata2 = $('#ordertwo_data').DataTable();
            tabldata2.destroy();
            displaycard2.style.display = "none";
        }
    });

    $("#ordertwoaction").hide();
    $("#ordertwocard").hide();
    $(document).on('click', '.ordertwoAdd', function() {
        var displaycard = document.getElementById("ordertwoaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_ordertwotitle").innerText = "Add New Item";
            displaycard.style.display = "block";
            document.getElementById('card_ordertwotitle').scrollIntoView();
        } else {
            displaycard.style.display = "none";
            document.getElementById("card_ordertwotitle").innerText = "";
            ordertwo_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_ordertwotitle").innerText = "Add New Item";
            document.getElementById('card_ordertwotitle').scrollIntoView();
        }
    });

    $(document).on('click', '.ordertwoClose', function() {
        var displaycard = document.getElementById("ordertwoaction");
        ordertwo_cleardata();
        document.getElementById("card_ordertwotitle").innerText = "";
        displaycard.style.display = "none";
    });

    $(document).on('click', '.ordertwoSave', function() {
        var Or2_ID = document.getElementById("Or2_ID").value;
        if (Or2_ID == '') {
            ordertwo_checkdata();
            if (error_Or2_ItemName != '' || error_Or2_Unit != '' || error_Or2_Quantity != '') {
                return false;
            } else {
                ordertwo_insertdata();
                ordertwo_cleardata();
            }
        } else {
            ordertwo_update();
        }
    });

    $(document).on('click', '.ordertwoDelete', function() {
        var tabledata = $('#ordertwo_data').DataTable();
        var ordertwo = tabledata.row($(this).closest('tr')).data();
        var ordertwovalue = ordertwo[Object.keys(ordertwo)[0]];
        var getidjob = ordertwo[Object.keys(ordertwo)[1]];
        $.ajax({
            type: "POST",
            url: "<?= base_url('ordertwo-delete') ?>",
            data: {
                'getid': ordertwovalue,
            },
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                $('#ordertwo_data').DataTable().ajax.reload();
            }
        });
    });

    $(document).on('click', '.ordertwoEdit', function() {
        var tabledata = $('#ordertwo_data').DataTable();
        var ordertwo = tabledata.row($(this).closest('tr')).data();
        var ordertwovalue = ordertwo[Object.keys(ordertwo)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('ordertwo-edit') ?>",
            data: {
                'getid': ordertwovalue,
            },
            success: function(response) {
                $.each(response, function(key, value) {
                    $('#Or2_ID').val(value['Or2_ID']);
                    $('#Or2_FK').val(value['Or2_FK']);
                    $('#Or2_ItemName').val(value['Or2_ItemName']);
                    $('#Or2_PartNumber').val(value['Or2_PartNumber']);
                    $('#Or2_Company').val(value['Or2_Company']);
                    $('#Or2_Brand').val(value['Or2_Brand']);
                    $('#Or2_ItemState').val(value['Or2_ItemState']);
                    $('#Or2_Unit').val(value['Or2_Unit']);
                    $('#Or2_Quantity').val(value['Or2_Quantity']);
                    $('#Or2_UnitPrice').val(value['Or2_UnitPrice']);
                    $('#Or2_MoneyTotal').val(value['Or2_MoneyTotal']);
                    $('#Or2_Notes').val(value['Or2_Notes']);

                    var displaycard = document.getElementById("ordertwoaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_ordertwotitle").innerText = "Item Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_ordertwotitle').scrollIntoView();
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_ordertwotitle').innerText = "";
                        document.getElementById('card_ordertwotitle').innerText = "Item Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_ordertwotitle').scrollIntoView();
                    }
                });
            }
        });
    });

    // // prevent write any char or special char in textbox
    $(document).ready(function() {
        $('#Or2_Quantity').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
    });

    function ordertwo_cleardata() {
        $('#Or2_ID').val('');
        $('#Or2_ItemName').val('');
        $('#Or2_PartNumber').val('');
        $('#Or2_Company').val('');
        $('#Or2_Brand').val('');
        $('#Or2_ItemState').val('');
        $('#Or2_Unit').val('');
        $('#Or2_Quantity').val('');
        $('#Or2_UnitPrice').val('');
        $('#Or2_MoneyTotal').val('');
        $('#Or2_Notes').val('');
    }

    function ordertwo_checkdata() {
        if ($.trim($('.Or2_ItemName').val()).length == 0) {
            error_Or2_ItemName = "plz, input the Item Name";
            $('#error_Or2_ItemName').text(error_Or2_ItemName);
        } else {
            error_Or2_ItemName = "";
            $('#error_Or2_ItemName').text(error_Or2_ItemName);
        }
        if ($.trim($('.Or2_Unit').val()).length == 0) {
            error_Or2_Unit = "plz, input the Unit";
            $('#error_Or2_Unit').text(error_Or2_Unit);
        } else {
            error_Or2_Unit = "";
            $('#error_Or2_Unit').text(error_Or2_Unit);
        }
        if ($.trim($('.Or2_Quantity').val()).length == 0) {
            error_Or2_Quantity = "plz, input the Quantity";
            $('#error_Or2_Quantity').text(error_Or2_Quantity);
        } else {
            error_Or2_Quantity = "";
            $('#error_Or2_Quantity').text(error_Or2_Quantity);
        }
    }

    function ordertwo_insertdata() {
        var data = {
            'Or2_FK': $('#Or2_FK').val(),
            'Or2_ItemName': $('#Or2_ItemName').val(),
            'Or2_Unit': $('#Or2_Unit').val(),
            'Or2_Quantity': $('#Or2_Quantity').val(),
            'Or2_Notes': $('#Or2_Notes').val(),
        };
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('ordertwo-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata2 = $('#ordertwo_data').DataTable();
                tabldata2.ajax.reload();
                // ordertwo_total();
                // var tabldata3 = $('#orderone_data').DataTable();
                // tabldata3.ajax.reload();
            }
        });
    }

    function ordertwo_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('ordertwo-filldata') ?>",
                success: function(response) {
                    $('#Or2_State').empty();
                    $('#Or2_State').append('<option selected>' + "Select Item State" + '</option>');
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                        $('#Or2_State').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');
                    });
                    $('#Or2_UnitBrowser').empty();
                    $.each(response.getunit, function(indexInArray, valueOfElement) {
                        $('#Or2_UnitBrowser').append('<option value="' + valueOfElement.Ui_Name + '">');
                    });
                    $('#Or2_ItemNameBrowser').empty();
                    $.each(response.getitemname, function(indexInArray, valueOfElement) {
                        $('#Or2_ItemNameBrowser').append('<option value="' + valueOfElement.IT_Name + '">');
                    });
                }
            });
        });
    }

    function ordertwo_fetch() {
        $(document).ready(function() {
            var tabledata2 = $('#ordertwo_data').DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    type: "GET",
                    data: {
                        'getid': $('#Or_ID').val(),
                    },
                    url: "<?php echo base_url('ordertwo-fetch') ?>",
                },
                "columns": [{
                        "data": "Or2_ItemName"
                    },
                    {
                        "data": "Or2_PartNumber"
                    },
                    {
                        "data": "Or2_ItemState"
                    },
                    {
                        "data": "Or2_Unit"
                    },
                    {
                        "data": "Or2_Quantity",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 ordertwoEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 ordertwoDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 ordertwoDisplay"><i class="bi bi-info"></i></button>' : data;
                        }
                    }
                ],
                "columnDefs": [{
                        "targets": [5],
                        "orderable": false,
                    },
                    {
                        "targets": [2],
                        "createdCell": function(td, cellData, rowData, row, col) {
                            if (cellData == 'Inactive') {
                                $(td).css({
                                    'background-color': "#ff5252"
                                });
                            }
                        }
                    },
                ],
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 100],
                    [5, 10, 15, 20, 25, 100]
                ],
            });
        });
    }

    function ordertwo_update() {
        var data = {
            'Or2_ID': $('#Or2_ID').val(),
            'Or2_FK': $('#Or2_FK').val(),
            'Or2_ItemName': $('#Or2_ItemName').val(),
            'Or2_Unit': $('#Or2_Unit').val(),
            'Or2_Quantity': $('#Or2_Quantity').val(),
            'Or2_Notes': $('#Or2_Notes').val(),
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ordertwo-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata2 = $('#ordertwo_data').DataTable();
                tabldata2.ajax.reload();
                ordertwo_total();
                var tabldata3 = $('#orderone_data').DataTable();
                tabldata3.ajax.reload();
            }
        });
    }
</script>

<script>
    //workers Model

    //show workers modal
    $(document).on('click', '.jobcardsecondaryAddWorker', function() {
        GetWorkersName()
        $('#WorkersModel').modal('show');
    });

    //hide workers modal
    $(document).on('click', '.jobcardsecondaryWorkersModel_Close', function() {
        $('#WorkersModel').modal('hide');
    });

    //get workers info for workers modal
    function GetWorkersName() {
        $.ajax({
            type: "POST",
            url: "<?= base_url('workers-GetInfo') ?>",
            success: function(response) {
                var workers = $('#Jcm2_Worker').val();
                var workers_array = workers.split(',');
                for (i = 0; i < workers_array.length; i++) {
                    workers_array[i] = workers_array[i].trim();
                }
                document.getElementById('chx_Workers').innerHTML = '';
                $.each(response, function(index, value) {
                    if (workers_array.includes(value['Wo_Name']) == false) {
                            $('#chx_Workers').append('<div class="row" id="row' + value['Wo_ID'] + '"></div>');
                            
                            $('#row' + value['Wo_ID'] + '').append('<div class="col-sm-9"  id="Col1' + value['Wo_ID'] + '"></div>');
                            $('#Col1' + value['Wo_ID'] + '').append('<label for="chx' + value['Wo_ID'] + '">' + value['Wo_Name'] + '</label>');

                            $('#row' + value['Wo_ID'] + '').append('<div class="col-sm-3" id="Col2' + value['Wo_ID'] + '"></div><hr>');
                            $('#Col2' + value['Wo_ID'] + '').append('<input type="checkbox" id="chx' + value['Wo_ID'] + '" name="chx' + value['Wo_ID'] + '" value="' + value['Wo_Name'] + '">');
                    }
                });
            }
        });
    }

    $(document).on('click', '.btn_Add_Workers', function() {
        var workers=$('#Jcm2_Worker').val();
        $("#chx_Workers input:checked").each(function() {
            //$('#Jcm2_Worker').append(this.value + " , ");
            workers+=this.value + " , "
            //console.log(this.value);
        });
        $('#Jcm2_Worker').val(workers);
        $('#WorkersModel').modal('hide');
    });

    $(document).on('change', '.Jc_WorkType', function() {
        if (this.value == "Work") {
            //input
            $('.Jcm2_ItemName').css('visibility', 'hidden');
            $('.Jcm2_PartNumber').css('visibility', 'hidden');
            $('.Jcm2_Unit').css('visibility', 'hidden');
            $('.Jcm2_Quantity').css('visibility', 'hidden');
            $('.Jcm2_UnitPrice').css('visibility', 'hidden');
            $('.Jcm2_MoneyTotal').css('visibility', 'hidden');
            $('.Jcm2_Side').css('visibility', 'hidden');
            $('.Jcm2_Number').css('visibility', 'hidden');
            $('.Jcm2_Brand').css('visibility', 'hidden');
            $('.Jcm2_Company').css('visibility', 'hidden');
            $('.Jcm2_Condition').css('visibility', 'hidden');
            $('.Jcm2_Description').css('visibility', 'hidden');

            //label
            $('.lbl_ItemName').css('visibility', 'hidden');
            $('.lbl_PartNumber').css('visibility', 'hidden');
            $('.lbl_Unit').css('visibility', 'hidden');
            $('.lbl_Quantity').css('visibility', 'hidden');
            $('.lbl_UnitPrice').css('visibility', 'hidden');
            $('.lbl_MoneyTotal').css('visibility', 'hidden');
            $('.lbl_Side').css('visibility', 'hidden');
            $('.lbl_Number').css('visibility', 'hidden');
            $('.lbl_Brand').css('visibility', 'hidden');
            $('.lbl_Company').css('visibility', 'hidden');
            $('.lbl_Condition').css('visibility', 'hidden');
            $('.lbl_Description').css('visibility', 'hidden');
        } else {
            //input
            $('.Jcm2_ItemName').css('visibility', 'visible');
            $('.Jcm2_PartNumber').css('visibility', 'visible');
            $('.Jcm2_Unit').css('visibility', 'visible');
            $('.Jcm2_Quantity').css('visibility', 'visible');
            $('.Jcm2_UnitPrice').css('visibility', 'visible');
            $('.Jcm2_MoneyTotal').css('visibility', 'visible');
            $('.Jcm2_Side').css('visibility', 'visible');
            $('.Jcm2_Number').css('visibility', 'visible');
            $('.Jcm2_Brand').css('visibility', 'visible');
            $('.Jcm2_Company').css('visibility', 'visible');
            $('.Jcm2_Condition').css('visibility', 'visible');
            $('.Jcm2_Description').css('visibility', 'visible');

            //label
            $('.lbl_ItemName').css('visibility', 'visible');
            $('.lbl_PartNumber').css('visibility', 'visible');
            $('.lbl_Unit').css('visibility', 'visible');
            $('.lbl_Quantity').css('visibility', 'visible');
            $('.lbl_UnitPrice').css('visibility', 'visible');
            $('.lbl_MoneyTotal').css('visibility', 'visible');
            $('.lbl_Side').css('visibility', 'visible');
            $('.lbl_Number').css('visibility', 'visible');
            $('.lbl_Brand').css('visibility', 'visible');
            $('.lbl_Company').css('visibility', 'visible');
            $('.lbl_Condition').css('visibility', 'visible');
            $('.lbl_Description').css('visibility', 'visible');
        }
    });

    function check_WorkType() {
        if ($('.Jcm2_WorkShop').val() != null && $('.Jcm2_WorkShop').val() != '' && ($('.Jcm2_ItemName').val() == null || $('.Jcm2_ItemName').val() == ''))
            $('.Jc_WorkType').val("Work").change();

        if ($('.Jcm2_WorkShop').val() != null && $('.Jcm2_WorkShop').val() != '' && $('.Jcm2_ItemName').val() != null && $('.Jcm2_ItemName').val() != '')
            $('.Jc_WorkType').val("Item").change();

        //$('#Jc_WorkType').prop('disabled', true);
    }

    //show and hide oil engine info button 
    $(document).on('change', '.Jcm2_ItemName', function() {
        if(this.value=='Engine oil' || this.value=='ENGINE OIL')
            document.getElementById('jobcardsecondaryOilInfo').style.display='block';
        else
            document.getElementById('jobcardsecondaryOilInfo').style.display='none';
    });

    //show Oil Engine Model
    $(document).on('click', '.jobcardsecondaryOilInfo', function() {
        GetOilEngineInfo()
        $('#OilEngineModel').modal('show');
    });

    //hide Oil Engine modal
    $(document).on('click', '.jobcardsecondaryOilEngineModel_Close', function() {
        $('#OilEngineModel').modal('hide');
    });

    function GetOilEngineInfo(){
        $('.lbl_Exchange_JobcardNo').text('Not Found');
        $('.lbl_Exchange_Date').text('');
        $('.lbl_Exchange_CarKM').text('');

        $('.lbl_Add_JobcardNo').text('Not Found');
        $('.lbl_Add_Date').text('');
        $('.lbl_Add_CarKM').text('');

        $.ajax({
            type: "Get",
            url: "<?= base_url('jcs-LastOil') ?>",
            data:{
                CarNo: $('.Jcm_CarNo').val(),
                Type: 'ابدال'
            },
            success: function(response) {
                
                $.each(response, function(index, value) {
                    $('.lbl_Exchange_JobcardNo').text('Jobcard No: '+value['Jcm_JcNumber']);
                    $('.lbl_Exchange_Date').text('Date: '+value['Jcm2_Date']);
                    $('.lbl_Exchange_CarKM').text('Car KM: '+value['Jcm_CarKM']);
                });
            }
        });

        $.ajax({
            type: "Get",
            url: "<?= base_url('jcs-LastOil') ?>",
            data:{
                CarNo: $('.Jcm_CarNo').val(),
                Type: 'اضاف'
            },
            success: function(response) {
                $.each(response, function(index, value) {
                    $('.lbl_Add_JobcardNo').text('Jobcard No: '+value['Jcm_JcNumber']);
                    $('.lbl_Add_Date').text('Date: '+value['Jcm2_Date']);
                    $('.lbl_Add_CarKM').text('Car KM: '+value['Jcm_CarKM']);
                });
            }
        });
    }
</script>


<?= $this->endSection() ?>