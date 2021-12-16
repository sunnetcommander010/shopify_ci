<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Component</h1>
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
    <form method=post action="<?php echo base_url().'admin/'.'component/add' ?>">
        <input type=hidden name=action value="create">
        <!-- Main content -->
        <section class="content" style="margin-left:10px; margin-right:10px">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Component Info</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputStatus">Component Type</label>
                                <select class="form-control custom-select" value="0" id="component_type" name="component_type">
                                    <option value="0" selected disabled>Select one</option>
                                    <option value="1">PROCESSOR</option>
                                    <option value="2">MOTHERBOARD</option>
                                    <option value="3">MEMORY</option>
                                    <option value="4">CASE</option>
                                    <option value="5">POWER SUPPLY</option>
                                    <option value="6">GRAPHICS</option>
                                    <option value="7">SSD</option>
                                    <option value="8">HDD</option>
                                    <option value="9">SOFTWARE</option>
                                    <option value="10">ACCESSORIES</option>
                                    <option value="11">WARRANTY</option>
                                    <option value="12">COOLING</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Component Brand</label>
                                <input type="text" name="component_brand" id="component_brand" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Component Name</label>
                                <input type="text" name="component_name" id="component_name" class="form-control " value="">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Component Value</label>
                                <input type="text" name="component_value" id="component_value" class="form-control " value="">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Component Short Description</label>
                                <input type="text" name="component_short_desc" id="component_short_desc" class="form-control " value="">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Component Description</label>
                                <textarea name="component_desc" id="inputDescription"
                                    class="form-control " rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <a href="<?php echo base_url().'admin' ?>" class="btn btn-secondary">Cancel</a>
                                <input type="button" id="submitbtn" value="Create New Component" class="btn btn-success float-right">
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
<script>
    $(function(){
        $("#submitbtn").click(function(){
            var flag = 0;
            if ($("#component_type").val() == null) {
                $("#component_type").attr('class','form-control custom-select is-invalid');
                flag = 1;
            }
            if($("#component_name").val() == '') {
                $("#component_name").attr('class', 'form-control is-invalid');
                flag = 1;
            }
            if($("#component_brand").val() == '') {
                $("#component_brand").attr('class', 'form-control is-invalid');
                flag = 1;
            }
            if($("#component_value").val() == '') {
                $("#component_value").attr('class', 'form-control is-invalid');
                flag = 1;
            }
            if($("#component_short_desc").val() == '') {
                $("#component_short_desc").attr('class', 'form-control is-invalid');
                flag = 1;
            }
            if($("#inputDescription").val() == '') {
                $("#inputDescription").attr('class', 'form-control is-invalid');
                flag = 1;
            }
            if (flag == 0) {
                $("form").submit();
            }else{flag = 0}
        })
        $('#component_type').change(function(){
            if($(this).hasClass("is-invalid"))
                $(this).toggleClass("is-invalid");
        })
        $('.form-control').keyup(function(){
            if($(this).hasClass("is-invalid"))
                $(this).toggleClass("is-invalid");
        })
    })
</script>
<!-- /.content-wrapper -->