<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>


<div class="col p-4">
    <div class="col-md-12 mt-2">
        <div class="card ">
            <div class="card-header bg-dark">
                <h4 style="color: white;">Check Mistakes of Customers</h4>
            </div>
            <div class="card-body">
                <div class="ms-12 row pt-1 pb-3">
                    <label for="" class="col-sm-auto col-form-label">Filter :
                    </label>
                    <div class="col-sm-3">
                        <select name="Ai_Filter" id="Ai_Filter" class="col-sm-11 col-form-label form-select Ai_Filter">
                            <option value="This_Month">This Month</option>
                            <option value="Last_Month">Last Month</option>
                            <option value="Year">All</option>
                        </select>
                    </div>

                </div>
                <table id="ai_data" class="table table-bordered table-striped ai_data" cellspacing="0" width="100%">
                    <thead class="dataheader_ai table-dark">

                    </thead>
                    <tbody class="databody_ai">

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

<div class="modal fade bd-example-modal-xl" id="AiModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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
                                            <input type="text" name="Ai_ID" id="Ai_ID" class="form-control Ai_ID" hidden>

                                        </div>
                                    </div>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> jobcard Number :
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" name="Ai_JcNumber" id="Ai_JcNumber" class="form-control Ai_JcNumber" autocomplete="off" disabled style="border:gainsboro soild 1px">
                                            <span id="errAi_Ai_JcNumber" class="text-danger"></span>
                                        </div>


                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Car No :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="Ai_CarNo" id="Ai_CarNo" class="form-control Ai_CarNo" autocomplete="off" disabled>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Customer :
                                    </label>
                                    <div class="col-sm-3">
                                        <input list="Ai_CustomerBrowser" class="form-control Ai_Customer" id="Ai_Customer" placeholder="Type to search...">
                                        <datalist id="Ai_CustomerBrowser">

                                        </datalist>
                                        <span id="errAi_Ai_Customer" class="text-danger"></span>
                                    </div>
                                </div>
                                <hr>

                                <div class="ms-12 row pt-6">
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary form-control aiEditSave">Save Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closemodal" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</div>



<?= $this->endSection() ?>

<?= $this->section('scripts') ?>


<?= $this->endSection() ?>