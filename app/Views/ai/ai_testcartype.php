<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>


<div class="col p-4">
    <div class="col-md-12 mt-2">
        <div class="card ">
            <div class="card-header bg-dark">
                <h4 style="color: white;">Check Mistakes of CarType</h4>
            </div>
            <div class="card-body">
                <div class="ms-12 row pt-1 pb-3">
                    <label for="" class="col-sm-auto col-form-label">Filter :
                    </label>
                    <div class="col-sm-3">
                        <select name="Ai_CarType_Filter" id="Ai_CarType_Filter" class="col-sm-11 col-form-label form-select Ai_CarType_Filter">
                            <option value="This_Month">This Month</option>
                            <option value="Last_Month">Last Month</option>
                            <option value="Year">All</option>
                        </select>
                    </div>

                </div>
                <table id="Ai_CarType_data" class="table table-bordered table-striped Ai_CarType_data" cellspacing="0" width="100%">
                    <thead class="dataheader_ai_cartype table-dark">

                    </thead>
                    <tbody class="databody_ai_cartype">

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

<div class="modal fade bd-example-modal-xl" id="Ai_CarType_Model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <div class="row border g-0 rounded shadow-sm ">
                    <div class="col p-4">
                        <!-- JobCard Mainly -->
                        <div class="col-md-12 mt-2">
                            <div class="card ">
                                <div class="card-header text-white" style="background-color: #343A40;">

                                    <h1 style="font-size: 1.5rem;">Edit Data</h1>
                                </div>

                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group ">
                                    <div class="ms-12 row pt-3">
                                        <div class="col-sm-auto">
                                            <input type="text" name="Ai_CarType_ID" id="Ai_CarType_ID" class="form-control Ai_CarType_ID" hidden>

                                        </div>
                                    </div>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> jobcard Number :
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" name="Ai_CarType_JcNumber" id="Ai_CarType_JcNumber" class="form-control Ai_CarType_JcNumber" autocomplete="off" disabled style="border:gainsboro soild 1px">
                                            
                                        </div>


                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Car No :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="Ai_CarType_CarNo" id="Ai_CarType_CarNo" class="form-control Ai_CarType_CarNo" autocomplete="off" disabled>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> CarType :
                                    </label>
                                    <div class="col-sm-3">
                                        <input list="Ai_CarType_CarTypeBrowser" class="form-control Ai_CarType_CarType" id="Ai_CarType_CarType" placeholder="Type to search...">
                                        <datalist id="Ai_CarType_CarTypeBrowser">

                                        </datalist>
                                        
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Model Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input list="Ai_CarType_ModelNameBrowser" class="form-control Ai_CarType_ModelName" id="Ai_CarType_ModelName" placeholder="Type to search...">
                                        <datalist id="Ai_CarType_ModelNameBrowser">

                                        </datalist>
                                        
                                    </div>
                                </div>
                                <hr>

                                <div class="ms-12 row pt-6">
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary form-control ai_cartype_Save">Save Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary CarType_closemodal" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</div>



<?= $this->endSection() ?>

<?= $this->section('scripts') ?>


<?= $this->endSection() ?>