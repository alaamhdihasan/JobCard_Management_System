<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-5">
            <?php

            use Mpdf\Tag\Option;

            if (session()->getFlashdata('status')) {
                echo '<div class="alert alert-success" role="alert">' . session()->getFlashdata('status') . "</div>";
            }
            ?>
            <div class="card">
                <div class="card-header text-white" style="background-color: #242424;">

                    <div class="row">
                        <h4>Open JobCard</h4>
                    </div>


                </div>
                <div class="card-body">
                    
                    <div class="input-group m-2">
                       
                        <label for="" class="col-sm-1 col-form-label m-2"> From : </label>
                        <div class="col-sm-2 m-2">
                            <input text="Jo_From" id="Jo_From" value="<?php echo $getmaxjobcard[0]->MaxValue ?>" class="col-sm-11 col-form-label form-control Jo_From" disabled>
                            </input>
                        </div>
                        <label for="" class="col-sm-1 col-form-label m-2"> Numbers : </label>
                        <div class="col-sm-2 m-2">
                            <input text="Jo_Numbers" id="Jo_Numbers" class="col-sm-11 col-form-label form-control Jo_Numbers">
                            </input>
                        </div>
                    </div>
                   
                    <hr>
                    <button class="btn btn-primary btn-sm float-start executebtn">
                        Execute</button>
                </div>

            </div>

        </div>






    </div>




</div>



<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(document).ready(function() {
        $('#Jo_From').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jo_To').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
       
    });

    $(document).on('click', '.executebtn', function() {
        data = {
            'Jo_From': $('#Jo_From').val(),
            'Jo_Numbers': $('#Jo_Numbers').val(),
            
        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('jobcardopen-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
            }

        });
    });
</script>




<?= $this->endSection() ?>