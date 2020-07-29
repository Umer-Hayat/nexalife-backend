<html lang="en">
<?php include_once 'classes/UserManagement.php';
$st=new UserManagement();
if(isset($_GET['del']))
{
    $result=$st->deleteUser($_GET['del']);
    if($result)
       echo " <script>alert('User Details successfully Deleted');</script>";
    echo '<script>window.location.replace("userList.php")</script>';
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nexalife</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once 'includes/navbar.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            User Details
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Name:</th>
                                    <th>Gender:</th>
                                    <th>Date of Birth:</th>
                                    <th>Postal Code:</th>
                                    <th>Are You Smoker:</th>
                                    <th>Do Exercise:</th>
                                    <th>Do Practise:</th>
                                    <th>Insurace Title:</th>
                                    <th>Insurace Type:</th>
                                    <th>Insuraance Price:</th>
                                    <th>Contractor Name:</th>
                                    <th>Contractor Last Name:</th>
                                    <th>Contractor Mother Name:</th>
                                    <th>Contractor Mail:</th>
                                    <th>Contractor celular:</th>
                                    <th>Contractor RFC No:</th>
                                    <th>Contractor nationallity:</th>
                                    <th>Contractor Sex:</th>
                                    <th>Contractor Profession:</th>
                                    <th>Contractor Street No:</th>
                                    <th>Contractor No_Ext:</th>
                                    <th>Contractor Interior:</th>
                                    <th>Contractor Suburb:</th>
                                    <th>Contractor Postal Code:</th>
                                    <th>Contractor state:</th>
                                    <th>Contractor country:</th>
                                    <th>Operation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $letter=$st->getAllRecords('user_detail');
                                    if($letter)
                                    {
                                        while ($getAll=$letter->fetch_assoc())
                                        {
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $getAll['life2_name']; ?></td>
                                    <td><?php echo $getAll['life2_gender']; ?></td>
                                    <td><?php echo $getAll['life2_date']; ?></td>
                                    <td><?php echo $getAll['life2_postal_code']; ?></td>
                                    <td><?php echo $getAll['is_smoker']; ?></td>
                                    <td><?php echo $getAll['do_exercise']; ?></td>
                                    <td><?php echo $getAll['do_practice']; ?></td>
                                    <td><?php echo $getAll['insurance-title']; ?></td>
                                    <td><?php echo $getAll['inurance_type']; ?></td>
                                    <td><?php echo $getAll['insuraance_price']; ?></td>
                                    <td><?php echo $getAll['cont_name']; ?></td>
                                    <td><?php echo $getAll['cont_last_name']; ?></td>
                                    <td><?php echo $getAll['m_last_name']; ?></td>
                                    <td><?php echo $getAll['mail']; ?></td>
                                    <td><?php echo $getAll['celular']; ?></td>
                                    <td><?php echo $getAll['rfc']; ?></td>
                                    <td><?php echo $getAll['nationality']; ?></td>
                                    <td><?php echo $getAll['sex']; ?></td>
                                    <td><?php echo $getAll['profession']; ?></td>
                                    <td><?php echo $getAll['street']; ?></td>
                                    <td><?php echo $getAll['no_ext']; ?></td>
                                    <td><?php echo $getAll['interior']; ?></td>
                                    <td><?php echo $getAll['suburb']; ?></td>
                                    <td><?php echo $getAll['postal']; ?></td>
                                    <td><?php echo $getAll['state']; ?></td>
                                    <td><?php echo $getAll['country']; ?></td>
                                    <td>
                                        <!-- <a class="btn btn-primary" href="updateUser.php?edit=<?php echo $getAll['id']; ?>">Edit</a>  -->
                                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete!')" href="userList.php?del=<?php echo $getAll['id'];?>">Delete</a></td>
                                </tr>
                                <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
</body>

</html>
