<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sartch | Dashboard</title>
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

<style type="text/css">
#image-preview {
  width: 300px;
  height: 300px;
  position: relative;
  overflow: hidden;
  background-color: #ffffff;
  color: #ecf0f1;
}
#image-preview input {
  line-height: 200px;
  font-size: 200px;
  position: absolute;
  opacity: 0;
  z-index: 10;
}
#image-preview label {
  position: absolute;
  z-index: 5;
  opacity: 0.8;
  cursor: pointer;
  background-color: #bdc3c7;
  width: 200px;
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  text-transform: uppercase;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  text-align: center;
}
</style>

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
         
      <h1>
        <?php
        $col_info=null;
        foreach($collection as $col){
          $col_info=get_object_vars($col);
        }
        ?>
        <p><?=$col_info['collection_name']?></p>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Collections/Products</li>
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
                    <th>IMAGE</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>IMAGE</th>
                    <th>CREATE_DATE</th>
                    <th>EDIT</th>
                    <th>STATUS</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach($products as $item){
                      $item=get_object_vars($item);
                  ?>
                      <thr>                    
                        <td><?=$item['product_id']?></td>
                        <td><img  src="<?=base_url()?>collections/<?=$col_info['collection_id']?>/<?=$item['product_image']?>" style="width:150px; height:100px" alt=""></td>
                        <td><?=$item['product_name']?></td>
                        <td><?=substr($item['product_description'],0,50)."..."?></td>
                        <td><?=$item['product_image']?></td>
                        <td><?=$item['create_time']?></td>
                        <td>
                          <div>
                            <span  class="btn btn-default btn-flat"><i class="fa fa-folder-open"></i></span>
                            <span  class="btn btn-default btn-flat"><i class="fa fa-check"></i></span>
                            <span  class="btn btn-default btn-flat"><i class="fa fa-close"></i></span>
                          </div>
                        </td>
                        <td><i class="fa fa-toggle-on" style="font-size:30px"></i></td>                    
                      </tr>

                  <?php
                    }
                  ?>
                  </tbody>
                  
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>IMAGE</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <td>IMAGE</td>                    
                    <th>CREATE_DATE</th>
                    <th>EDIT</th>
                    <th>STATUS</th>
                  </tr>
                  </tfoot>
              </table>
                <!-- /.table -->
            </div>
          </div>

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Product Information</h3>
            </div>  
            
            <form role="form" id="create_form" method="post">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label style="display:none">Collection_ID</label>
                      <input id="collection_id" name="collection_id" type="text" class="form-control"  style="display:none" value="<?=$col_info['collection_id']?>">
                    </div>  
                    <div class="form-group">
                      <label >Name</label>
                      <input id="product_name" name="product_name" type="text" class="form-control"  placeholder="Product Name">
                    </div>
                    <div class="form-group">
                      <label >Description</label>
                      <input id="product_description" name="product_description" type="text" class="form-control" placeholder="Product Description">
                    </div>
                    <div class="box-footer">
                      <button id="Createsave_btn" type="button" class="btn btn-primary">Create</button>
                    </div>
                  </div>
                  <div class="col-md-6" id="image-preview">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input  type="file" name="image" id="image-upload">
                  </div>
                </div>
              </div>           
            </form>

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
<script src="<?=base_url()?>Assets/dashboard/plugins/jQuery/jquery-imagepreview.min.js"></script>

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

    $.uploadPreview({
      input_field: "#image-upload",
      preview_box: "#image-preview",
      label_field: "#image-label"
    });

    $("#Createsave_btn").click(function(e){

       e.preventDefault();
       var formData = new FormData($("#create_form")[0]) ;       
       
        $.ajax({
            type:'POST',
            url: '<?=base_url()?>index.php/dashboard/Products/CreateProduct',
            data:formData,
            cache:false,
            async:true,
            crossDomain: true,
            contentType: false,
            processData: false,
            success:function(data){             
               alert("success"+JSON.stringify(data));
            },
            error: function(data){
               alert("error:"+JSON.stringify(data));
            
            }
        });   
     });       

   
 }); 
</script>
</body>
</html>
