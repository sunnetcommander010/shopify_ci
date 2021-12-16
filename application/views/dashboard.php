  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
        AF Documentation
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?=base_url().'library';?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">AD Documents</span>
              </a>
            </li>
          </ul>

          <?php
              if($isLogined) {
                echo '<ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" href="'.base_url().'dashboard">
                            <i class="ni ni-cloud-upload-96 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                          </a>
                        </li>
                      </ul>';

                if($isAdmin) {
                  echo '<ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" href="'.base_url().'userrole">
                              <i class="ni ni-single-02 text-primary"></i>
                              <span class="nav-link-text">User Roles</span>
                            </a>
                          </li>
                        </ul>';
                }
              }

          
          ?>

          
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: block, important !important;">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  " style="float:lfet">
            <li class="nav-item">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search..." id="usr">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <?php

            if($isAdmin && $isLogined) {
              echo '<ul class="navbar-nav align-items-center ml-auto ml-md-0 " style="margin-right:30px">
                      <li class="nav-item">
                      <input type="file" name="files" id="directory" multiple webkitdirectory style="display:none"/>
                      <a class="btn btn-danger" href="#" role="button" id="uploaddirectory">
                        Upload FOLDER
                      </a>
                      </li>
                    </ul>';

                    
            }

            if($isAdmin && $isLogined) {
              echo '<ul class="navbar-nav align-items-center ml-auto ml-md-0" style="margin-right:30px">
                      <li class="nav-item">
                      <input type="file" name="files" id="files" multiple style="display:none"/>
                      <a class="btn btn-danger" href="#" role="button" id="upload">
                        Upload FILE
                      </a>
                      </li>
                    </ul>';

                    
            }

            if($isLogined) {
              echo '<ul class="navbar-nav align-items-center  ml-auto ml-md-0 " style="float:right">
                      <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                              <img alt="Image placeholder" src="'.base_url().'../assets/img/theme/team-4.jpg">
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                          <a href="./login/logout" class="dropdown-item">
                              <i class="ni ni-user-run"></i>
                              <span>Logout</span>
                          </a>
                        </div>
                      </li>
                    </ul>';
            } else {
                echo '<ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
                        <li class="nav-item">
                          <a class="btn btn-danger" href="'.base_url().'login" role="button">
                            Login
                          </a>
                        </li>
                      </ul>';
            }
          ?>
        
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row" id="content_id">
        <?php
          foreach ($filelist as $key => $file) {
            echo '
              <div class="col-xl-3 col-lg-3 col-md-6  icon-card-container" id="card'.$key.'">
                <div class="card">
                  <div class="card-img-top icon-card">
                          <i class="ni ni-books text-primary icon-card-icon"></i>
                  </div>
  
                  <div class="card-body text-center">
                      <h5 class="h2 card-title mb-4">
                        '.$file['name'].'
                      </h5>';
                      if($isLogined) {
                        echo '<button type="button" class="btn btn-danger btn-delete" name="'.$file['directory'].'" id="'.$key.'">
                            Delete
                        </button>';
                      }
                      echo '
                  </div>
                </div>
              </div>     
            ';
          }
        ?>
      </div>
      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-danger">
            
              <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              
              <div class="modal-body">
                
                  <div class="py-3 text-center">
                      <i class="ni ni-bell-55 ni-3x"></i>
                      <h4 class="heading mt-4">You should read this!</h4>
                      <p>You are going to delete file in the server directory. <br>Are you sure?</p>
                  </div>
                  
              </div>
              
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" id="btnDeleteConfirm">Ok, Delete it</button>
                  <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
              </div>
              
          </div>
        </div>
      </div>
  </div>

  <script>
    var filelist = "";
    $(document).ready(function() {
      $(".btn-delete").click(function() {
        var name = $(this).attr("name");
        var id = $(this).attr("id");
        sessionStorage.setItem("name", name);
        sessionStorage.setItem("id", id);
        console.log(id,name);
        $("#modal-notification").modal();
      });

      $("#usr").keyup(function(e){
        filelist = <?php echo json_encode($filelist) ?>;
        $("#content_id").html("");
        for (let i = 0; i < filelist.length; i++) {
          const element = filelist[i];
          if (filelist[i]['name'].includes(e.target.value)) {
            if(<?php echo $isLogined?> == 1)
              {
                $("#content_id").append(
                  '<div class="col-xl-3 col-lg-3 col-md-6  icon-card-container" id="card'+i+'">'+
                      '<div class="card">'+
                        '<div class="card-img-top icon-card">'+
                                '<i class="ni ni-books text-primary icon-card-icon"></i>'+
                        '</div>'+
        
                        '<div class="card-body text-center">'+
                            '<h5 class="h2 card-title mb-4">'+filelist[i]['name']+'</h5>'+
                            '<button type="button" class="btn btn-danger btn-delete" name="'+filelist[i]['directory']+'" id="'+i+'">Delete</button>'+
                        '</div>'+
                      '</div>'+
                    '</div>'
                );
              }
            else {
              $("#content_id").append(
                  '<div class="col-xl-3 col-lg-3 col-md-6  icon-card-container" id="card'+i+'">'+
                      '<div class="card">'+
                        '<div class="card-img-top icon-card">'+
                                '<i class="ni ni-books text-primary icon-card-icon"></i>'+
                        '</div>'+
        
                        '<div class="card-body text-center">'+
                            '<h5 class="h2 card-title mb-4">'+filelist[i]['name']+'</h5>'+
                        '</div>'+
                      '</div>'+
                    '</div>'
                );
            }
          }
        }
        
        // location.href = "<?php echo base_url()?>Dashboard/search?search="+e.target.value+"&filelist=<?php $filelist ?>&is_admin=<?php $isAdmin ?>&logged_in=<?php $isLogined?>";
      });

      $("#btnDeleteConfirm").click(function() {
        var name = sessionStorage.getItem("name");
        name = name.split("\\uploads\\")[1];
        var id = sessionStorage.getItem("id");
        $.post("<?php echo base_url()?>Dashboard/remove_file", {"name" : name}, function(res, err) {
          if(res == "SUCCESS") {
            console.log(res);
            $("#card"+id).remove();              
          } else {
            console.log(res);
          }
        });
        $("#modal-notification").modal('hide');
      });
      $("#upload").click(function() {
        console.log("upload");
        $("#files").click();
      });
      $("#uploaddirectory").click(function() {
        console.log("#diretory");
        $("#directory").click();
      });
      
      $('#directory').change(function() {
          var files = $('#directory')[0].files;
          var error = '';
          var form_data = new FormData();
          
          var array = [];
          for (var count = 0; count < files.length; count++) {
              var name = files[count].name;
              var extension = name.split('.').pop().toLowerCase();
              if (jQuery.inArray(extension, ['pdf']) == -1) {
                  error = "You can upload only PDF files";
              } else {
                  form_data.append("files[]", files[count]);
                  var paths = files[count]["webkitRelativePath"].split('/');
                  paths.splice(paths.length - 1);
                  form_data.append("folder_name" + count, paths.join('/')); 
              }
              
          }
          console.log(files);
          if (error == '') {
              console.log(array);
              $.ajax({
                  url: "<?php echo base_url()?>Dashboard/upload", //base_url() return http://localhost/tutorial/codeigniter/
                  method: "POST",
                  data: form_data,
                  contentType: false,
                  cache: false,
                  processData: false,
                  beforeSend: function() {
                    // $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
                  },
                  success: function(data) {
                    $('#directory').val('');
                    window.location.reload(false);
                  }
              })
          } else {
              alert(error);
          }
      });

      $('#files').change(function() {
          var files = $('#files')[0].files;
          var error = '';
          var form_data = new FormData();
          for (var count = 0; count < files.length; count++) {
              var name = files[count].name;
              var extension = name.split('.').pop().toLowerCase();
              if (jQuery.inArray(extension, ['pdf']) == -1) {
                  error = "You can upload only PDF files";
              } else {
                  form_data.append("files[]", files[count]);
              }
          }
          if (error == '') {
              $.ajax({
                  url: "<?php echo base_url()?>Dashboard/upload", //base_url() return http://localhost/tutorial/codeigniter/
                  method: "POST",
                  data: form_data,
                  contentType: false,
                  cache: false,
                  processData: false,
                  beforeSend: function() {
                    // $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
                  },
                  success: function(data) {
                    $('#files').val('');
                    window.location.reload(false);
                  }
              })
          } else {
              alert(error);
          }
      });

    })
  </script>