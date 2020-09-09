<?php
session_start(); 
ini_set('max_execution_time', 900); //300 seconds = 5 minutes

if($_SESSION['status']!="Active")
{
    header("location:index.php");
}
include 'connection.php';



 



?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Jnanasri</title>
		<link rel='icon' type='image/png' href='hat1.png'/>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

      <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  
       <script type="text/javascript" src="js/jquery.min.js"></script>
			<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

	
	<script type="text/javascript" language="javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js"></script>
		
		
		<script language="javascript" type="text/javascript">
			$(document).ready(function() {
				$('#example1').DataTable();
			});	

		</script>
    </head>
	
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="admin_dashboard.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               Jnana sri
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
				  
			
                <div class="navbar-right">
				
                        
                    <ul class="nav navbar-nav">
                       
                         <ul class="nav navbar-nav">
                 
                               
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $uname=$_SESSION["user"];?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                   
                                <!-- Menu Body -->
                             
                                <!-- Menu Footer-->
                                <li class="user-footer">
                             
                                    
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
           
                   
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                 <ul class="sidebar-menu">
                        <li class="active">
                            <a href="admin_dashboard.php">
                            <big>    <i class="fa fa-dashboard"></i></big> <span>Dashboard</span>
                            </a>
                        </li>
                  
						<li class="treeview">
                            <a href="#">
                              <big>  <i class="fa fa-user"></i></big> <span>Student</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="admi.php"><i class="fa fa-angle-double-right"></i>Admission</a></li>
                                
								<li><a href="view_student_details.php"><i class="fa fa-angle-double-right"></i> View Student Information</a></li>
                                
								
                
							 
                            </ul>
                        </li>
						<li class="treeview">
                            <a href="#">
                                <big><i class="fa fa-group"></i></big> <span>Teachers</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="staff_adding.php"><i class="fa fa-angle-double-right"></i>Add Teachers</a></li>
								
                                <li><a href="view_teach.php"><i class="fa fa-angle-double-right"></i>Teachers Information</a></li>
					
                            </ul>
                        </li>
			<li class="treeview">
                            <a href="#">
                             <big>   <i class="fa fa-sitemap"></i></big>
                                <span>Class</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="class.php"><i class="fa fa-angle-double-right"></i> Add Class and Section</a></li>

                            </ul>
                        </li>
							<li class="treeview">
                            <a href="#">
                              <big>  <i class="glyphicon glyphicon-eye-open"></i></big> <span>Attendance</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="take_staff_attendance.php"><i class="fa fa-angle-double-right"></i>Attendance</a></li>
                       
                            </ul>
                        </li>
							<li class="treeview">
                            <a href="#">
                              <big>  <i class="glyphicon glyphicon-eye-open"></i></big> <span>Question Paper</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="upload_question_paper.php"><i class="fa fa-angle-double-right"></i>Upload Question Paper</a></li>
                                <li><a href="view_question_paper.php"><i class="fa fa-angle-double-right"></i>View Question Paper</a></li>
                              
                            </ul>
                        </li>
								<li class="treeview">
                            <a href="#">
                              <big>  <i class="glyphicon glyphicon-eye-open"></i></big> <span>Gallery</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="gallery_adding.php"><i class="fa fa-angle-double-right"></i>Upload Images</a></li>
                                <li><a href="view_gallery.php"><i class="fa fa-angle-double-right"></i>View gallery</a></li>
                              
                            </ul>
                        </li>
										<li class="treeview">
                            <a href="#">
                             <big>   <i class="fa fa-sitemap"></i></big>
                                <span>Subjects</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_sub.php"><i class="fa fa-angle-double-right"></i> Add & Assign subject </a></li>
                              
									
									
								
        
                            </ul>
                        </li>			
						<li class="treeview">
                            <a href="#">
                             <big>   <i class="fa fa-sitemap"></i></big>
                                <span>Timetable</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_time_table.php"><i class="fa fa-angle-double-right"></i> Add Timetable </a></li>
                              
								<li><a href="add_t_c.php"><i class="fa fa-angle-double-right"></i> View Time Table </a></li>
									
									
								
        
                            </ul>
                        </li>			
						
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

           

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>    
		
  <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
		
		<script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                
            });
        </script>
    </body>
</html>
