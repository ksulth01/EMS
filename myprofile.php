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
  <script>
    function changeType()
    {
        document.profile.password.type=(document.profile.option.value=(document.profile.option.value==1)?'-1':'1')=='1'?'password':'text';
    }
</script>

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
           My Details</div>
          <div class="card-body">
            <div class="table-responsive">
              <div style="padding-top:20px">
                <form name="profile">
                  <table >
               <tr >
                
               <td><label>My Id</label></td>
               <td><input type="text" name="empID" > </td>
                <td style="padding-left:50px"><label>Full Name</label></td>
                <td style="padding-left:50px"><input type="text" name="empName" ></td>
                </tr>
                <tr>
                <td><label>Home address</label></td>
                <td><input type="text" name="address" ></td>
                <td style="padding-left:50px"><label>Mobile No</label></td>
                <td style="padding-left:50px"> <input type="text" name="mobilen" ></td>
                </tr>
                <tr>
                <td><label>Password</label></td>
                <td>  <input type="password" name="password">
                <input type="checkbox" name="option" value='1' onchange="changeType()"><label>View Password </label></td>
            
                </tr>
                <tr>
                <td><form>
                <br>
                <input type ="submit" value="Update Details">
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
      
        
          </div>
          
        </div>

      <div align="right" style="padding-right:20px">
      <script>
          document.write('<a href="' + document.referrer + '" class="backbutton">Go Back</a>');
      </script>
      </div>


      </div>
      

  

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
