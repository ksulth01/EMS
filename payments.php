<?php
include 'login.php';
require 'mysql.php';
$_SESSION['visible']="display:none";
$_SESSION ['employee']="display:none";
if(!isset($_SESSION['login_user'])){
  header("location: index.php");
  }

  if($_SESSION['userType']=="Admin")
  {
    $_SESSION['visible']  = "display";
    $_SESSION['employee'] ="display";
  }
  if($_SESSION['userType']=="Accountant")
  {
    $_SESSION['visible']="display";
  }


?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EPMS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="customstyle.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <table style="table-layout:auto" width=100%>
      <td width=90%>
    <a class="navbar-brand mr-1" href="home.php">Employee Payroll Management System</a>
    <td width=5%><a href="myprofile.php">My Profile</a></td>
    <td width=5%> <a href="payslips.php">Payslips</a></td>
</td>
<td >
<form>
      <input type="text" placeholder="Search..">
        </form>
    
</td>
<td align="right">
   
       
        <ul class="navbar-nav ml-auto ml-md-0">
        <table width=100% style="table-layout:auto" align="right">
          <td><a  href="logout.php">Logout</a></td>
        </table>
       
      </li>
    </ul>
     
</td>
</table>
  </nav>

  <div id="wrapper">

  
    <ul class="sidebar navbar-nav">
    <li class="nav-item " >
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DashBoard</span>
        </a>
      </li>
      <li class="nav-item " >
        <a class="nav-link" href="markatt.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Mark Attendance</span>
        </a>
      </li>

      <li class="nav-item" style="<?php echo $_SESSION['visible'] ?>">
          <a class="nav-link" href="attendance.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Attendance</span></a>
        </li>
      <li class="nav-item active" style="<?php echo $_SESSION['visible'] ?>">
        <a class="nav-link" href="payments.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Payments</span></a>
      </li>
      <li class="nav-item" style="<?php echo $_SESSION['employee'] ?>">
        <a class="nav-link" href="employees.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Employees</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
      

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Welcome <?php echo
              $_SESSION['login_user'];
              ?> !</a>
          </li>
        </ol>
        
       

        <!-- Area Chart Example-->

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Add Payment</div>
          <div class="card-body">
            <div class="table-responsive">
              <div style="padding-top:20px">
                <form >
                  <table >
               <tr >
                
               <td><label>Employee Id</label></td>
               <td><input type="text" name="empID" > </td>
                <td style="padding-left:50px"><label>Employee Name</label></td>
                <td style="padding-left:50px"><input type="text" name="empName" ></td>
                </tr>
                <tr>
                <td><label>Start Date</label></td>
                <td><input type="text" name="start_date" ></td>
                <td style="padding-left:50px"><label>End Date</label></td>
                <td style="padding-left:50px"> <input type="text" name="end_date" ></td>
                </tr>
                <tr>
                <td><label>Work Hours</label></td>
                <td>  <input type="text" name="work_hours"></td>
                <td style="padding-left:50px"><label>O/T Hours</label></td>
                <td style="padding-left:50px"><input type="text" name="ot_hours" ></td>
                </tr>
                <tr>
                <td><form>
                <br>
                <input type ="submit" value="Add Payment">
                </form>
                </td>
                </tr>
                </table>
                  </form>
                
            
              </div>
            </div>
             
            </div>
          </div>
          
        
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Payments</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr >
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Work Hours</th>
                <th>O/T hours</th>  
              </tr>
              <?php while($row1 =mysqli_fetch_array($result1)):;?>
              <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
              </tr>
              <?php endwhile;?>
              </table>
              <form>
                <input type="submit" value ="Pay">
              </form>
              <br>
              <form>
                <input type="submit" value ="Update Payments">
              </form>
            </div>
          </div>
          
        </div>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Payments History</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr >
                <th>Employee ID</th>
                <th>Payment ID</th>
                <th>Employee Name</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Total Hours</th>
                <th>Payment Date</th>  
              </tr>
              <?php while($row1 =mysqli_fetch_array($result1)):;?>
              <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
              </tr>
              <?php endwhile;?>
              </table>
            </div>
          </div>
          
        </div>





      </div>
      

      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Charles Sturt University 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>


</body>

</html>