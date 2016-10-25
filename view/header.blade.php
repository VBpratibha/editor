<!doctype html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="kKL1VjDU86udHFQ5aMpysGRTlCHUFcjkfWnJ5vol">
      <title>Dashboard | AnyLinuxWork</title>
      <meta name="application-name" content="AnyLinuxWork"/>
      <meta name="msapplication-TileColor" content="#FFFFFF" />
      <link media="all" type="text/css" rel="stylesheet" href="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/css/bootstrap.css">
      <link media="all" type="text/css" rel="stylesheet" href="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/css/font-awesome.min.css">
      <link media="all" type="text/css" rel="stylesheet" href="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/css/metisMenu.css">
      <link media="all" type="text/css" rel="stylesheet" href="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/css/sweetalert.css">
      <link media="all" type="text/css" rel="stylesheet" href="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/css/bootstrap-social.css">
      <link media="all" type="text/css" rel="stylesheet" href="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/css/app.css">
      <link media="all" type="text/css" rel="stylesheet" href="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/css/datatables.min.css"> 
   </head>
   <body>
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="" style="padding: 7px 0 0 0;">
                  <img src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/img/logo.png" height="40" alt="AnyLinuxWork">
               </a>
            </div>
            <div id="navbar" class="navbar-collapse">
               <a href="#" id="sidebar-toggle" class="btn">
               <i class="navbar-icon fa fa-bars icon"></i>
               </a>
               <ul class="nav navbar-nav collapse navbar-collapse">
                  <li class="">
                     <a href="" class="">
                     Users							</a>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right" style="float:right;">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                     AnyLinuxWork Admin 
                     <b class="caret"></b>
                     </a>
                     <ul class="dropdown-menu">
                        <li>
                           <a href="">
                           <i class="fa fa-sign-out"></i>
                           Logout								</a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="navbar-default sidebar" role="navigation">
         <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
               <li class="sidebar-avatar">
                  <div class="dropdown">
                     <div class="name"><strong>AnyLinuxWork Admin</strong></div>
                  </div>
               </li>
               <li class="active open">
                  <a href="" class="active">
                  <i class="fa fa-dashboard"></i> Dashboard                </a>
               </li>
               <li class="">
                  <a href="" class="">
                  <i class="fa fa-user"></i> Users                    </a>
               </li>
            </ul>
         </div>
         <!-- /.sidebar-collapse -->
      </div>

      @yield('content')

      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/jquery-2.1.4.min.js"></script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/bootstrap.min.js"></script>

      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/datatables.min.js"></script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/metisMenu.min.js"></script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/sweetalert.min.js"></script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/delete.handler.js"></script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/js.cookie.js"></script>
      <script type="text/javascript">
         $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
         });
      </script>
      
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/app.js"></script>
      <script>
         var users = [0,0,0,0,0,0,0,0,"3","6",0,0];
         var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
         var trans = {
             chartLabel: "Registration History",
             new: "new",
             user: "user",
             users: "users"
         };
         $(document).ready(function() {
            $('#userTable').DataTable();
         } );
      </script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/chart.min.js"></script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/dashboard-admin.js"></script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/jquery.form.js"></script>
      <script src="http://192.168.168.151/training-2016/prtaibha/staticPages/packages/laravelContent/contents/src/public/js/customValidation.js"></script>
   </body>
</html>