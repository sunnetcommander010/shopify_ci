<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Builds</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Manage Builds</li>
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

                        <a href="<?php echo base_url().'admin/'.'build/addview'?>" class="btn btn-primary">Add Build</a>
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
                                    <th style="width: 50%">
                                        Name
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {builds}
                                    <tr>
                                        <td>
                                            {pad}
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-{badge}" style="font-size: 90%;width: 150px;">{isActive_html}</span>
                                        </td>
                                        <td>
                                            <span style="font-weight: bold;">{build_name}</span> -  {cpu_brand} {cpu_name} {cpu_value} | {ram_brand} {ram_name} {ram_value}
                                                 | {gpu_brand} {gpu_name} {gpu_value}
                                        </td>

                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="<?php echo base_url().'admin/build/edit?build_id='?>{build_id}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/build/delete?build_id='?>{build_id}">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                {/builds}
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