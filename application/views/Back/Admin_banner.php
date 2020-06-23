<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?=$page."/".$pagetree?></title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/Back/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/Back/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Logout</a>
      </li>
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url()?>assets/Back/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>assets/Back/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
               <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Home Page
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?=base_url()?>index.php/Hmpg/banner" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>
                        Banner
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url()?>index.php/Hmpg/service" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Our Service</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url()?>index.php/Hmpg/pricing" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pricing</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=base_url()?>index.php/Hmpg/letstalk" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Let's Talk</p>
                    </a>
                  </li>
                </ul>
              </li>
       

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Portfolio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Our Story
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link ">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link active">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Social Media
              </p>
            </a>
          </li>
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              <?=$page?>
            </h1>
          </div>
          <div class="col-sm-6">
            <div class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#modal-default">
                Add Social Media
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-3 ">
            <p>image</p>
            </div>
            <div class="col-md-2">
            <p>title</p>
            </div>
            <div class="col-md-4">
            <p>link</p>
            </div>
            <div class="col-md-1">
            <p>Order</p>
            </div>
            <div class="col-md-1">
            action
            </div>
        </div>
    
        <?php 
        foreach ($banner as $value) {
      ?>
        <div class="card">
            <div class="card-body">
              <form action="<?=base_url()?>index.php/Hmpg/banner" method="post">
               
                    
                       <div class="form-group">
                        <div class="row align-items-center text-center">
                          <div class="col-md-3">
                            <img src="<?=base_url('/imagebanner/'.$value->image)?>" alt="" srcset="" width="300">
                          </div>
                          <div class="col-2">
                            <p><?=$value->title?></p>
                          </div>
                          <div class="col-4">
                            <p><?=$value->link?></p>
                          </div>
                          <div class="col-1">
                            <p><?=$value->order_by?></p>
                          </div>
                          <div class="col-1">
                            <a data-toggle="modal"
                            data-target="#modal-edit"

                            data-id="<?=$value->id?>" 
                            data-title="<?=$value->title?>"
                            data-link="<?=$value->link?>"
                            data-image="<?=$value->image?>"
                            data-order="<?=$value->order_by?>"

                            id="edit"
                            class="btn btn-outline-info form-control form-group">Edit</a>
                            <a href="<?=base_url()?>index.php/Hmpg/delbanner?id=<?=$value->id?>" class="btn btn-outline-danger form-control form-group">Delete</a>
                          </div>
                     
                        </div>
                    </div>
                     
                <!-- /.form group -->
              </form>
            </div>
          <!-- /.card -->
        </div>
        <!-- /.row -->
        <?php
    }
  ?>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/Back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url()?>assets/Back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?=base_url()?>assets/Back/dist/js/adminlte.js"></script>
<!-- bs-custom-file-input -->
<script src="<?=base_url()?>assets/Back/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});

$(document).on("click", "#edit", function () {
     var myBookId = $(this).data('id');
     var title = $(this).data('title');
     var link = $(this).data('link');
     var order = $(this).data('order');
     var image = $(this).data('image');

     $(".modal-body #id").val( myBookId );
     $(".modal-body #title").val( title );
     $(".modal-body #link").val( link );
     $(".modal-body #order").val( order );
     $(".modal-body #imageold").val( image );
});
</script>


<div class="modal fade" id="modal-default">
  <form action="<?=base_url()?>index.php/Hmpg/addbanner" enctype="multipart/form-data" method="post">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title">New <?=$pagetree?></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body">
            <div class="input-group form-group">
                <div class="custom-file">
                <input type="file" name="image"  id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
            </div>
            <input type="text" name="title" class="form-group form-control" placeholder="Title" >
            <input type="text" name="link" class="form-group form-control" placeholder="Link (ex: https://facebook.com/)" >
            <input type="text" name="order_by" class="form-group form-control" placeholder="Order (1,2,....)" >
      </div>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add +</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
  </form>
</div>

<!-- edittt -->


  <div class="modal fade" id="modal-edit">
    <form action="<?=base_url()?>index.php/Hmpg/editbanner" enctype="multipart/form-data" method="post">
  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title">Edit <?=$pagetree?></p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       
        <div class="modal-body">
            <input type="hidden" name="id" id="id" class="form-group form-control">
            <input type="hidden" name="imageold" id="imageold" class="form-group form-control">
            <div class="input-group form-group">
                <div class="custom-file">
                <input type="file" name="image"  id="exampleInputF">
                <label class="custom-file-label" id="imageolds" for="exampleInputF">Choose file</label>
                </div>
            </div>
              <input type="text" name="title" id="title" class="form-group form-control" placeholder="Title" >
              <input type="text" name="link" id="link" class="form-group form-control" placeholder="Link (ex: https://facebook.com/)" >
              <input type="text" name="order_by" id="order" class="form-group form-control" placeholder="Order (1,2,....)" >
        </div>
  
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</form>
</div>
<!-- /.modal -->

</body>
</html>
