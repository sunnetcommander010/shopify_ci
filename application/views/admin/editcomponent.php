<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Component</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Component</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <form method=post action="<?php echo base_url().'admin/'.'component/save' ?>">
        <input type=hidden name=action value="edit">
        <input type=hidden name=component_id value="{component_id}">
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
                                <select class="form-control custom-select is-valid" value="{component}" name="component_type">
                                    <!-- <option selected disabled>Select one</option> -->
                                    <option <?php echo $component_type==1?'selected':'' ?> value="1">PROCESSOR</option>
                                    <option <?php echo $component_type==2?'selected':'' ?> value="2">MOTHERBOARD</option>
                                    <option <?php echo $component_type==3?'selected':'' ?> value="3">MEMORY</option>
                                    <option <?php echo $component_type==4?'selected':'' ?> value="4">CASE</option>
                                    <option <?php echo $component_type==5?'selected':'' ?> value="5">POWER SUPPLY</option>
                                    <option <?php echo $component_type==6?'selected':'' ?> value="6">GRAPHICS</option>
                                    <option <?php echo $component_type==7?'selected':'' ?> value="7">SSD</option>
                                    <option <?php echo $component_type==8?'selected':'' ?> value="8">HDD</option>
                                    <option <?php echo $component_type==9?'selected':'' ?> value="9">SOFTWARE</option>
                                    <option <?php echo $component_type==10?'selected':'' ?> value="10">ACCESSORIES</option>
                                    <option <?php echo $component_type==11?'selected':'' ?> value="11">WARRANTY</option>
                                    <option <?php echo $component_type==12?'selected':'' ?> value="12">COOLING</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Component Brand</label>
                                <input type="text" name="component_brand" class="form-control is-valid" value="{component_brand}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Component Name</label>
                                <input type="text" name="component_name" class="form-control is-valid" value="{component_name}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Component Value</label>
                                <input type="text" name="component_value" class="form-control  is-valid" value="{component_value}">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Component Short Description</label>
                                <input type="text" name="component_short_desc" class="form-control  is-valid" value="{component_short_desc}">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Component Description</label>
                                <textarea name="component_desc" id="inputDescription"
                                    class="form-control  is-valid" rows="4">{component_desc}</textarea>
                            </div>
                            <div class="col-12">
                                <a href="<?php echo base_url().'admin' ?>" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Edit Component" class="btn btn-success float-right">
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