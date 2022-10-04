<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>


<div class="col p-4">
    <div class="col-md-12 mt-2">
        <div class="card ">
            <div class="card-header bg-dark">
                <h4 style="color: white;">Check Mistakes of Item Price</h4>
            </div>
            <div class="card-body">
                <div class="ms-12 row pt-1 pb-3">
                    <label for="" class="col-sm-auto col-form-label">Filter :
                    </label>
                    <div class="col-sm-3">
                        <select name="Ai_ItemPrice_Filter" id="Ai_ItemPrice_Filter" class="col-sm-11 col-form-label form-select Ai_ItemPrice_Filter">
                            <option value="This_Month">This Month</option>
                            <option value="Last_Month">Last Month</option>
                            <option value="Year">All</option>
                        </select>
                    </div>
                </div>
                
                <table id="ai_ItemPrice_data" class="table table-bordered table-striped ai_ItemPrice_data" cellspacing="0" width="100%">
                    <thead class="dataheader_ai_ItemPrice table-dark">

                    </thead>
                    <tbody class="databody_ai_ItemPrice">

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

<div class="modal fade bd-example-modal-xl" id="AiModel_ItemPrice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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
                                            <input type="text" name="Ai_ItemPrice_ID" id="Ai_ItemPrice_ID" class="form-control Ai_ItemPrice_ID" hidden>

                                        </div>
                                    </div>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> jobcard Number :
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" name="Ai_ItemPrice_JcNumber" id="Ai_ItemPrice_JcNumber" class="form-control Ai_ItemPrice_JcNumber" autocomplete="off" disabled style="border:gainsboro soild 1px">
                                            <span id="errAi_Ai_ItemPrice_JcNumber" class="text-danger"></span>
                                        </div>


                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Item Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="Ai_ItemPrice_ItemName" id="Ai_ItemPrice_ItemName" class="form-control Ai_ItemPrice_ItemName" autocomplete="off" disabled>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Part Number :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="Ai_ItemPrice_PartNumber" id="Ai_ItemPrice_PartNumber" class="form-control Ai_ItemPrice_PartNumber" autocomplete="off" disabled>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Unit Price :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="Ai_ItemPrice_UnitPrice" id="Ai_ItemPrice_UnitPrice" class="form-control Ai_ItemPrice_UnitPrice" autocomplete="off">
                                    </div>
                                </div>

                                <hr>

                                <div class="ms-12 row pt-6">
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary form-control ai_ItemPrice_EditSave">Save Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary ItemPrice_closemodal" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</div>



<?= $this->endSection() ?>

<?= $this->section('scripts') ?>


<?= $this->endSection() ?>