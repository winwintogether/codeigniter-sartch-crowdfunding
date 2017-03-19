<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SARTCH | Dashboard</title>
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
       <a id="create_collection" href="#" style="text-decoration:underline;" data-toggle="modal" data-target="#myCreateModal" >Create collection</a>
      </h4>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Collections</li>
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
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>INVESTORS</th>
                    <th>CREATE_DATE</th>
                    <th>EDIT</th>
                    <th>STATUS</th>
                  </tr>
                  </thead>
                  <tbody id="collection_list">
                    
                     <?php
                     foreach($all_collections as $item){
                      $item=get_object_vars($item);
                    ?>
                      <tr>                    
                      <td><?=$item['collection_id']?></td>
                      <td  onclick="gotoproduct(<?=$item['collection_id']?>)"><a><?=$item['collection_name']?></a></td>
                      <td><?=substr($item['collection_description'],0,50)."..."?></td>
                      <td><?=$item['collection_value']?></td>
                      <td><?=$item['visitors']?></td>
                      <td><?=$item['create_time']?></td>
                      <td>
                        <div>
                          <form class="btn-group">
                            <button type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#myModal" onclick="modalcontent('<?=$item['collection_id']?>','<?=$item['collection_name']?>','<?=preg_replace('/[\r\n]/','',$item['collection_description'])?>','<?=$item['collection_value']?>')"><i class="fa fa-folder-open"></i></button>
                            <button type="button" class="btn btn-default btn-flat"><i class="fa fa-close"></i></button>
                          </form>
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
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>INVESTORS</th>
                    <th>CREATE_DATE</th>
                    <th>EDIT</th>
                    <th>STATUS</th>
                  </tr>
                  </tfoot>
              </table>
                <!-- /.table -->
            </div>

          </div>
        </div>        
      </div>
      <div class="modal fade  bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Collection Information</h4>
            </div>

            <div class="modal-body">
              <form>
                  <div class="form-group">
                    <label for="collection-name" class="control-label">Collection Name:</label>
                    <input type="text" class="form-control" id="collection-name">
                  </div>
                  <div class="form-group">
                    <label for="collection-description" class="control-label">Collection Description:</label>
                    <textarea class="form-control" id="collection-description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="collection-value" class="control-label">Collection Value:</label>
                    <input class="form-control" id="collection-value"></input>
                  </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="save_btn" type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

       <div class="modal fade  bs-example-modal-lg" id="myCreateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myCreateModalLabel">Collection Information</h4>
            </div>

            <div class="modal-body">
              <form>
                  <div class="form-group">
                    <label for="collection-name" class="control-label">Collection Name:</label>
                    <input type="text" class="form-control" id="Createcollection-name">
                  </div>
                  <div class="form-group">
                    <label for="collection-description" class="control-label">Collection Description:</label>
                    <textarea class="form-control" id="Createcollection-description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="collection-value" class="control-label">Collection Value:</label>
                    <input class="form-control" id="Createcollection-value"></input>
                  </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="Createsave_btn" type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
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
function gotoproduct(collection_id){
    window.location.href="<?=base_url()?>index.php/dashboard/Products/show?collection_id="+collection_id;
}
function modalclear(){
    document.getElementById("collection-name").setAttribute("value","");
    document.getElementById("collection-description").innerHTML="";
    document.getElementById("collection-value").setAttribute("value","");

}
function modalcontent(collection_id, collection_name, collection_description, collection_value){  
    modalclear();       
    document.getElementById("collection-name").setAttribute("value",collection_name);
    document.getElementById("collection-description").innerHTML=collection_description;
    document.getElementById("collection-value").setAttribute("value",collection_value);
}

$(function () {
    $("#example1").DataTable();
    $("#create_collection").click(function(){
        document.getElementById("Createcollection-name").setAttribute("value","");
        document.getElementById("Createcollection-description").innerHTML="";
        document.getElementById("Createcollection-value").setAttribute("value","");
   });

    $("#Createsave_btn").click(function(){
        $.ajax({
                  url:'<?=base_url()?>index.php/dashboard/Collections/CreateCollection',
                  type:'POST',
                  data:{collection_name:$("#Createcollection-name").val(),collection_description:$("#Createcollection-description").val(),collection_value:$("#Createcollection-value").val()},
                    success: function(result){

                      res=JSON.parse(result);
                      if(res.collection.length>0){
                          prependstring="<tr><td>"+res.collection[0].collection_id+"</td><td onclick=\"gotoproduct("+res.collection[0].collection_id+")\"><a>"+res.collection[0].collection_name+"</a></td><td>"+res.collection[0].collection_description+"</td><td>"+res.collection[0].collection_value+"</td><td>"+res.collection[0].visitors+"</td><td>"+res.collection[0].create_time+"</td><td><div><form class=\"btn-group\"><button type=\"button\" class=\"btn btn-default btn-flat\" data-toggle=\"modal\" data-target=\"#myModal\" onclick=\"modalcontent('"+res.collection[0].collection_id+"','"+res.collection[0].collection_name+"','"+res.collection[0].collection_description+"','"+res.collection[0].collection_value+"')\"><i class=\"fa fa-folder-open\"></i></button><button type=\"button\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-close\"></i></button></form></div></td><td><i class=\"fa fa-toggle-on\" style=\"font-size:30px\"></i></td></tr>";
                          $("#collection_list").prepend(prependstring);
                      }
                   
                  },
                  error: function(){
                    alert("Error");
                  }                 
                });         
    });
}); 
</script>
</body>
</html>
