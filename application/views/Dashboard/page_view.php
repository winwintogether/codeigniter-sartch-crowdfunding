<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>Assets/dashboard/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>Assets/dashboard/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>Assets/dashboard/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>Assets/dashboard/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>Assets/dashboard/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>Assets/dashboard/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">      
      
      <ul class="sidebar-menu">
       <li class="active"><a href="<?=base_url()?>index.php/dashboard/Home/show"><i class="fa  fa-area-chart"></i> <span>Dashboard</span></a></li>
       <li><a href="<?=base_url()?>index.php/dashboard/Collections/show"><i class="fa fa-image"></i> <span>Collections</span></a></li>
       <li><a href="<?=base_url()?>index.php/dashboard/Users/show"><i class="fa  fa-users"></i> <span>Users</span></a></li>
       <li><a href="<?=base_url()?>index.php/dashboard/Pages/show"><i class="fa fa-book"></i> <span>Pages</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h4>
       <a href="#" style="text-decoration:underline;">Create users</a>
      </h4>      

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>
   
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>PASSWORD</th>
                    <th>ADDRESS</th>
                    <th>CITY</th>
                    <th>ZIP CODE</th>
                    <th>STATUS</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>                    
                    <td>1</td>
                    <td>ben</td>
                    <td>her</td>
                    <td>my@gmail.com</td>
                    <td>PASSWORD</th>
                    <td>ADDRESS111111</td>
                    <td>London</th>
                    <td>431</th>
                    <td><i class="fa fa-toggle-on" style="font-size:30px"></i></td>                    
                  </tr>
                  <tr>                    
                    <td>2</td>
                    <td>ben</td>
                    <td>her</td>
                    <td>my@gmail.com</td>
                    <td>PASSWORD</th>
                    <td>ADDRESS111111</td>
                    <td>London</th>
                    <td>431</th>
                    <td><i class="fa fa-toggle-on" style="font-size:30px"></i></td>                    
                  </tr>
                  <tr>                    
                    <td>3</td>
                    <td>ben</td>
                    <td>her</td>
                    <td>my@gmail.com</td>
                    <td>PASSWORD</th>
                    <td>ADDRESS111111</td>
                    <td>London</th>
                    <td>431</th>
                    <td><i class="fa fa-toggle-on" style="font-size:30px"></i></td>                    
                  </tr>
                  <tr>                    
                    <td>4</td>
                    <td>ben</td>
                    <td>her</td>
                    <td>my@gmail.com</td>
                    <td>PASSWORD</th>
                    <td>ADDRESS111111</td>
                    <td>London</th>
                    <td>431</th>
                    <td><i class="fa fa-toggle-on" style="font-size:30px"></i></td>                    
                  </tr>
                  <tr>                    
                    <td>5</td>
                    <td>ben</td>
                    <td>her</td>
                    <td>my@gmail.com</td>
                    <td>PASSWORD</th>
                    <td>ADDRESS111111</td>
                    <td>London</th>
                    <td>431</th>
                    <td><i class="fa fa-toggle-on" style="font-size:30px"></i></td>                    
                  </tr>  
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>VISITORS</th>
                    <th>CREATE_DATE</th>
                    <th>STATUS</th>
                  </tr>
                  </tfoot>
              </table>
                <!-- /.table -->
            </div>

            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label >First Name</label>
                  <input type="text" class="form-control"  placeholder="Collection Name">
                </div>
                <div class="form-group">
                  <label >Last Name</label>
                  <input type="text" class="form-control" placeholder="Description">
                </div>
                <div class="form-group">
                  <label >Price</label>
                  <input type="text" class="form-control" placeholder="Price">                 
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
          </div>
          </div>
        </div>        
      </div>      
    </section>
    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.11
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

 

</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>Assets/dashboard/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>Assets/dashboard/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url()?>Assets/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>Assets/dashboard/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>Assets/dashboard/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>Assets/dashboard/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>Assets/dashboard/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>Assets/dashboard/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    
  });
</script>
</body>
</html>
