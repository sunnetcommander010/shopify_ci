<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Components</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php base_url().'admin'?>">Home</a></li>
                        <li class="breadcrumb-item active">Manage Components</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- [fill-errorBox] -->
  <!-- Main content -->
    <section class="content" style="margin-left:10px; margin-right:10px">
                <div class="card">
                    <div class="card-header">
                        <a href="<?php echo base_url().'admin/'.'component/addview' ?>" class="btn btn-primary">Add Component</a>
                        <div style="float:right">
                            <a href="<?php echo base_url().'admin' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: black;">CLEAR</span></a>
                            <a href="<?php echo base_url().'admin?component_type=1' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;">PROCESSOR</span></a>
                            <a href="<?php echo base_url().'admin?component_type=2' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: #FF3322;">MOTHERBOARD</span></a>
                            <a href="<?php echo base_url().'admin?component_type=3' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: rgba(0, 144, 255, 1);">MEMORY</span></a>
                            <div class="clearfix"></div>
                            <a href="<?php echo base_url().'admin?component_type=4' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: rgba(151, 13, 105, 0.822);">CASE</span></a>
                            <a href="<?php echo base_url().'admin?component_type=5' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: #cf5915d2;">POWER SUPPLY</span></a>
                            <a href="<?php echo base_url().'admin?component_type=6' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: #19d400d2;">GRAPHICS</span></a>
                            <a href="<?php echo base_url().'admin?component_type=7' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: #1da5aad2;">SSD</span></a>
                            <div class="clearfix"></div>
                            <a href="<?php echo base_url().'admin?component_type=8' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;">HDD</span></a>
                            <a href="<?php echo base_url().'admin?component_type=9' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: #f55a00d2;">SOFTWARE</span></a>
                            <a href="<?php echo base_url().'admin?component_type=10' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;background-color: #250a85;">ACCESSORIES</span></a>
                            <a href="<?php echo base_url().'admin?component_type=11' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;">WARRANTY</span></a>
                            <div class="clearfix"></div>
                            <a href="<?php echo base_url().'admin?component_type=12' ?>"><span class="badge badge-success eve" style="margin-left:5px; margin-bottom:5px;font-size: 90%; width: 150px;">COOLING</span></a>
                        </div>
                        <div style="float:right">
                            Filter by:
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 3%">
                                        #
                                    </th>
                                    <th style="width: 20%; text-align: center;">
                                        Type
                                    </th>
                                    <th style="width: 40%">
                                        Name
                                    </th>
                                    <th style="width: 30%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                    {components}
                                    <tr>
                                        <td>
                                            {pad}
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success" style="font-size: 90%; width: 200px; background-color: 
                                                {c_color}
                                                ;">{type_name}</span>
                                        </td>
                                        <td>
                                            {component_brand} {component_name} {component_value} 
                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="<?php echo base_url().'admin/'.'component/edit'.'?id=' ?>{component_id}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/'.'component/delete'.'?id=' ?>{component_id}">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                    {/components}
                                <!-- <div execute-fillAllBuilds></div>  -->
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
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