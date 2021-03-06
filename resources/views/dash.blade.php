@include('layouts.Allcss')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('includes.Allheader')
  <!-- Left side column. contains the logo and sidebar -->
 @include('includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      
    </section>
    @if(Auth::user()->role_id == 1||Auth::user()->role_id == 3)


    
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$list}}</h3>

              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
         
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$admin}}</h3>

              <p>Total Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
         
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$sales}}</h3>

              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
         
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$active}}</h3>

              <p>Total Active Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
         
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$inactive}}</h3>

              <p>Total Inactive User</p>
            </div>
            <div class="icon">
              <i class="ion ion-minus"></i>
            </div>
         
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
  
  @else
  
          <!-- small box -->
            <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$category}}</h3>

              <p>Total Categories</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
         
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$products}}</h3>

              <p>Total Products</p>
            </div>
            <div class="icon">
              <i class="fa fa-tag"></i>
            </div>
         
          </div>
        </div>
     
     

     
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
  
             
          
          
   
   

  @endif
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('layouts.Alljs')
