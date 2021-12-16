<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Build</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Project Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <form method=post action="<?php echo base_url().'admin/'.'build/add' ?>" enctype="multipart/form-data">
        <input type=hidden name=action value="create">
        <!-- Main content -->
        <section class="content" style="margin-left:10px; margin-right:10px">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Build Info</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Build Name</label>
                                <input type="text" name="build_name" id="build_name" class="form-control " value="">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Build Price</label>
                                <input type="number" name="build_price" id="build_price" class="form-control " value="">
                            </div>                            
                            <div style="float:left; width: 50%;">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="1" name="build_isActive" >
                                  <label class="form-check-label">Active</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="1"  name="build_isLimited" >
                                  <label class="form-check-label">Limited</label>
                                </div>
                              </div>
                            </div>
                            <div style="float:left; width: 50%;">
                                <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="1" name="build_isWifi" >
                                      <label class="form-check-label">Has wifi?</label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="1"  name="build_isRGB" >
                                      <label class="form-check-label">Is RGB?</label>
                                    </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="build_isBluetooth" >
                                    <label class="form-check-label">Has Bluetooth?</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1"  name="build_isUSBC" >
                                    <label class="form-check-label">Has USB-C?</label>
                                  </div>
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="1" name="build_isVRReady" >
                                        <label class="form-check-label">Is VR Ready?</label>
                                    </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1"  name="build_isStreamReady" >
                                <label class="form-check-label">Is Stream Ready?</label>
                              </div>
                            </div>                              
                            
                                </div>
                            <div class="form-group">
                                <label for="inputStatus">Build Processor</label>
                                <select class="form-control custom-select" value='0' name="build_processor" id="build_processor">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_cpu); $i++) { ?>
                                        <option value="<?php echo $build_cpu[$i]['component_id'] ?>"><?php echo $build_cpu[$i]['component_brand'].' '.$build_cpu[$i]['component_name'].' '.$build_cpu[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Build Motherboard</label>
                                <select class="form-control custom-select " name="build_motherboard" id="build_motherboard">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_motherboard); $i++) { ?>
                                        <option value="<?php echo $build_motherboard[$i]['component_id'] ?>"><?php echo $build_motherboard[$i]['component_brand'].' '.$build_motherboard[$i]['component_name'].' '.$build_motherboard[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Build Memory</label>
                                <select class="form-control custom-select  " name="build_ram" id="build_ram">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_ram); $i++) { ?>
                                        <option value="<?php echo $build_ram[$i]['component_id'] ?>"><?php echo $build_ram[$i]['component_brand'].' '.$build_ram[$i]['component_name'].' '.$build_ram[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>  
                            <div class="form-group">
                                <label for="inputStatus">Build Case</label>
                                <select class="form-control custom-select  " name="build_case" id="build_case">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_case); $i++) { ?>
                                        <option value="<?php echo $build_case[$i]['component_id'] ?>"><?php echo $build_case[$i]['component_brand'].' '.$build_case[$i]['component_name'].' '.$build_case[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Build Power Supply</label>
                                <select class="form-control custom-select  " name="build_psu" id="build_psu">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_psu); $i++) { ?>
                                        <option value="<?php echo $build_psu[$i]['component_id'] ?>"><?php echo $build_psu[$i]['component_brand'].' '.$build_psu[$i]['component_name'].' '.$build_psu[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="inputStatus">Build Graphics</label>
                                <select class="form-control custom-select  " name="build_gpu" id="build_gpu">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_gpu); $i++) { ?>
                                        <option value="<?php echo $build_gpu[$i]['component_id'] ?>"><?php echo $build_gpu[$i]['component_brand'].' '.$build_gpu[$i]['component_name'].' '.$build_gpu[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="inputStatus">Build Solid State Drive</label>
                                <select class="form-control custom-select  " name="build_ssd" id="build_ssd">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_ssd); $i++) { ?>
                                        <option value="<?php echo $build_ssd[$i]['component_id'] ?>"><?php echo $build_ssd[$i]['component_brand'].' '.$build_ssd[$i]['component_name'].' '.$build_ssd[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Build Hard Drive</label>
                                <select class="form-control custom-select  " name="build_hdd" id="build_hdd">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_hdd); $i++) { ?>
                                        <option value="<?php echo $build_hdd[$i]['component_id'] ?>"><?php echo $build_hdd[$i]['component_brand'].' '.$build_hdd[$i]['component_name'].' '.$build_hdd[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>  
                            <div class="form-group">
                                <label for="inputStatus">Build Software</label>
                                <select class="form-control custom-select  " name="build_soft" id="build_soft">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_soft); $i++) { ?>
                                        <option value="<?php echo $build_soft[$i]['component_id'] ?>"><?php echo $build_soft[$i]['component_brand'].' '.$build_soft[$i]['component_name'].' '.$build_soft[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>                                                                              
                            <div class="form-group">
                                <label for="inputStatus">Build Accessories</label>
                                <select class="form-control custom-select  " name="build_acce" id="build_acce">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_acce); $i++) { ?>
                                        <option value="<?php echo $build_acce[$i]['component_id'] ?>"><?php echo $build_acce[$i]['component_brand'].' '.$build_acce[$i]['component_name'].' '.$build_acce[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="inputStatus">Build Warranty</label>
                                <select class="form-control custom-select  " name="build_warranty" id="build_warranty">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_warranty); $i++) { ?>
                                        <option value="<?php echo $build_warranty[$i]['component_id'] ?>"><?php echo $build_warranty[$i]['component_brand'].' '.$build_warranty[$i]['component_name'].' '.$build_warranty[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="inputStatus">Build Cooling</label>
                                <select class="form-control custom-select  " name="build_cooling" id="build_cooling">
                                    <option selected disabled>Select one</option>
                                    <?php for ($i=0; $i < count($build_cooling); $i++) { ?>
                                        <option value="<?php echo $build_cooling[$i]['component_id'] ?>"><?php echo $build_cooling[$i]['component_brand'].' '.$build_cooling[$i]['component_name'].' '.$build_cooling[$i]['component_value'] ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="inputName">Build Fortnite FSP(1080p:1440p)</label>
                                <input type="text" name="build_fortnitefps" id="build_fortnitefps" class="form-control " value="">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Build Counter Strike FSP(1080p:1440p)</label>
                                <input type="text" name="build_csfps" id="build_csfps" class="form-control " value="">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Build League of L FSP(1080p:1440p)</label>
                                <input type="tel" name="build_lolfps" id="build_lolfps" class="form-control " pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="">
                            </div>
                            <div class="form-group">
                                <div class="alert alert-danger" style="display:none">
                                    
                                </div>
                                <label for="inputStatus">Photos</label>
                                <div class="input-images"></div>
                            </div>                                
                           <div class="col-12">
                                <a href="<?php echo base_url().'admin/'.'build' ?>" class="btn btn-secondary">Cancel</a>
                                <input type="button" id="submitbtn" value="Create New Builds" class="btn btn-success float-right">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </form>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url()?>../assets/js/image-uploader.min.js"></script>

<script>
    
    $('.input-images').imageUploader();
    
    $(function(){
        $("#submitbtn").click(function(){
            console.log($("#input-images"));
            var flag = 0;
            if ($("#build_name").val() == '') {
                $("#build_name").attr('class','form-control is-invalid');
                flag = 1;
            }
            if($("#build_price").val() == '') {
                $("#build_price").attr('class', 'form-control is-invalid');
                flag = 1;
            }
            if($("#build_processor").val() == null) {
                $("#build_processor").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_motherboard").val() == null) {
                $("#build_motherboard").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_ram").val() == null) {
                $("#build_ram").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_case").val() == null) {
                $("#build_case").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_psu").val() == null) {
                $("#build_psu").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_gpu").val() == null) {
                $("#build_gpu").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_ssd").val() == null) {
                $("#build_ssd").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_hdd").val() == null) {
                $("#build_hdd").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_soft").val() == null) {
                $("#build_soft").attr('class', 'form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#build_acce").val() == null) {
                $("#build_acce").attr('class', 'form-control custom-select is-invalid');
                flag = 1;

            }
            if($("#build_warranty").val() == null) {
                $("#build_warranty").attr('class', 'form-control custom-select is-invalid');
                flag = 1;

            }
            if($("#build_cooling").val() == null) {
                $("#build_cooling").attr('class', 'form-control custom-select is-invalid');
                flag = 1;

            }
            if($("#build_fortnitefps").val() == '') {
                $("#build_fortnitefps").attr('class', 'form-control is-invalid');
                flag = 1;

            }
            if($("#build_csfps").val() == '') {
                $("#build_csfps").attr('class', 'form-control is-invalid');
                flag = 1;

            }
            if($("#build_lolfps").val() == '') {
                $("#build_lolfps").attr('class', 'form-control is-invalid');
                flag = 1;
            }
            if($(".uploaded").children().length == 0) {
                $(".alert-danger").html('This field is required.');
                $(".alert-danger").attr('style','display:""');
                flag = 1;
            } else if($(".uploaded").children().length < 3) {
                $(".alert-danger").html('This field over 2 images is required.');
                $(".alert-danger").attr('style','display:""');
                flag = 1;
            } else {
                $(".alert-danger").html('');
                $(".alert-danger").attr('style','display:none');
                flag = 0;
            }

            if (flag == 0) {
                $("form").submit();
            }else{flag = 0}
        })
        $(".material-icons").click(function(){
            $(".alert-danger").html('');
            $(".alert-danger").attr('style','display:none');
        })
        $('.custom-select').change(function(){
            if($(this).hasClass("is-invalid"))
                $(this).toggleClass("is-invalid");
        })
        $('.form-control').keyup(function(){
            if($(this).hasClass("is-invalid"))
                $(this).toggleClass("is-invalid");
        })
    })
</script>
