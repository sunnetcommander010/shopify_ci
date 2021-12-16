<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Build</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                  <li class="breadcrumb-item active">Edit Build</li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>
   <form method=post action="<?php echo base_url().'admin/'.'build/save'?>" enctype="multipart/form-data">
      <input type=hidden name=action id="action" value="">
      <input type=hidden name=oldimg id=oldimg value="">
      <input type=hidden name=build_id value="{build_id}">
      <input type=hidden name=product_id value="{product_id}">
      <input type=hidden name=variant_id value="{variant_id}">

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
                        <input type="text" name="build_name" class="form-control is-valid"
                           value="{build_name}">
                     </div>
                     <div class="form-group">
                        <label for="inputName">Build Price</label>
                        <input type="number" name="build_price" class="form-control is-valid"
                           value="{build_price}">
                     </div>
                     <div style="float:left; width: 50%;">
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isActive" <?php echo
                                 $build_isActive?'checked':''; ?>>
                              <label class="form-check-label">Active</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isLimited" <?php echo
                                 $build_isLimited?'checked':''; ?>>
                              <label class="form-check-label">Limited</label>
                           </div>
                        </div>
                     </div>
                     <div style="float:left; width: 50%;">
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isWifi" <?php echo
                                 $build_isWifi?'checked':''; ?>>
                              <label class="form-check-label">Has wifi?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isRGB" <?php echo
                                 $build_isRGB?'checked':''; ?>>
                              <label class="form-check-label">Is RGB?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isBluetooth" <?php echo
                                 $build_isBluetooth?'checked':''; ?>>
                              <label class="form-check-label">Has Bluetooth?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isUSBC" <?php echo
                                 $build_isUSBC?'checked':''; ?>>
                              <label class="form-check-label">Has USB-C?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isVRReady" <?php echo
                                 $build_isVRReady?'checked':''; ?>>
                              <label class="form-check-label">Is VR Ready?</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="1" name="build_isStreamReady" <?php echo
                                 $build_isStreamReady?'checked':''; ?>>
                              <label class="form-check-label">Is Stream Ready?</label>
                           </div>
                        </div>

                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Processor</label>
                        <select class="form-control custom-select is-valid" value='0' name="build_processor">
                           {build_cpu_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_cpu_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Motherboard</label>
                        <select class="form-control custom-select is-valid " name="build_motherboard">
                           {build_motherboard_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_motherboard_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Memory</label>
                        <select class="form-control custom-select is-valid  " name="build_ram">
                           {build_ram_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_ram_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Case</label>
                        <select class="form-control custom-select is-valid  " name="build_case">
                           {build_case_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_case_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Power Supply</label>
                        <select class="form-control custom-select is-valid  " name="build_psu">
                           {build_psu_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_psu_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Graphics</label>
                        <select class="form-control custom-select is-valid  " name="build_gpu">
                           {build_gpu_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_gpu_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Solid State Drive</label>
                        <select class="form-control custom-select is-valid  " name="build_ssd">
                           {build_ssd_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_ssd_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Hard Drive</label>
                        <select class="form-control custom-select is-valid  " name="build_hdd">
                           {build_hdd_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_hdd_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Software</label>
                        <select class="form-control custom-select is-valid  " name="build_soft">
                           {build_soft_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_soft_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Accessories</label>
                        <select class="form-control custom-select is-valid  " name="build_acce">
                           {build_acce_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_acce_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Warranty</label>
                        <select class="form-control custom-select is-valid  " name="build_warranty">
                           {build_warranty_component}
                           <option {selected} value="{component_id}">
                              {component_brand} {component_name} {component_value}
                           </option>
                           {/build_warranty_component}
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="inputStatus">Build Cooling</label>
                        <select class="form-control custom-select  is-valid" name="build_cooling" id="build_cooling">
                           {build_cooling_component}
                                 <option {selected} value="{component_id}">{component_brand} {component_name} {component_value}</option>
                           {/build_cooling_component}
                        </select>
                     </div> 
                     <div class="form-group">
                        <label for="inputName">Build Fortnite FSP(1080p:1440p)</label>
                        <input type="text" name="build_fortnitefps" id="build_fortnitefps" class="form-control is-valid" value="{build_fortnitefps}">
                     </div>
                     <div class="form-group">
                        <label for="inputName">Build Counter Strike FSP(1080p:1440p)</label>
                        <input type="text" name="build_csfps" class="form-control is-valid"
                           value="{build_csfps}">
                     </div>
                     <div class="form-group">
                        <label for="inputName">Build League of L FSP(1080p:1440p)</label>
                        <input type="text" name="build_lolfps" class="form-control is-valid"
                           value="{build_lolfps}">
                     </div>
                     <div class="form-group">
                         <div class="alert alert-danger" style="display:none">
                                    
                         </div>
                        <label for="inputStatus">Photos</label>
                        <div class="input-images"></div>
                     </div>
                     <div class="col-12">
                        <a href="<?php echo base_url().'admin/'.'build' ?>" class="btn btn-secondary">Cancel</a>
                        <input type="button" id="submitbtn" value="Edit Build" class="btn btn-success float-right">
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
<script type="text/javascript" src="<?php echo base_url() ?>../assets/js/image-uploader.min.js"></script>

<script>
    var oldid = '';
    $('.input-images').imageUploader();
       for (let i = 1; i <= {img_length}; i++) {
         $('div.uploaded').append(
               '<div class="uploaded-image" data-index="'+i+'">'+
                  '<img src="{img_url}' + i +'.png">'+
                  '<button class="delete-image oldimage"><i class="material-icons">clear</i></button>'+
               '</div>'
         );
       }

    $('.upload-text').remove();
    $('.oldimage').on('click',function(e){
       $(this).parent().remove();
       oldid += (parseInt($(this).parent().attr('data-index'))).toString() + '-';
       return false;
    })

    $('.upload-text').remove();
    $(function(){
        $("#submitbtn").click(function(){
            var flag = 0;
            $('#action').val({img_length});
            oldid = oldid.substr(0,oldid.length-1);
            $('#oldimg').val(oldid);
            if ($('.uploaded').children().length < {img_length}) {
               $(".alert-danger").html('Add more image');
               $(".alert-danger").attr('style','display:');
               flag == 1;
            }            
            if (flag == 0) {
                $("form").submit();
            }else{flag = 0}
        })
        $(".material-icons").click(function(){
            $(".alert-danger").html('');
            $(".alert-danger").attr('style','display:none');
        })
    })
</script>