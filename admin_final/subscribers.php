<?php
    include "../include/connection.php";
    session_start();
    $username = $_SESSION['uname'];
    $password = $_SESSION['pwd'];
    $img = $_SESSION['img'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subscribers | AntickZONE</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
   <!-- CodeMirror -->
   <link rel="stylesheet" href="plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <!-- <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php
            include "include/header_admin.php";
            include "include/sidebar_admin.php";
        ?>


        <div class="content-wrapper mt-2">
            <div class="container-fluid subscribers">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Subscribers</h3>

                            <!-- <button data-toggle="modal" data-target="#add_products_modal">Add Products</button> -->
                        </div>
                    </div>
                        
                    <div class="card-body">
                        <table id="subscribers" class="table table-bordered table-striped table-light category_table">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Customer Name</th>
                                    <th>Username</th>
                                    <th>Phone No.</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                    $select = "SELECT * FROM `login`";
                                    $run = mysqli_query($con, $select);
                                    if(mysqli_num_rows($run) > 0){
                                        $i=1;
                                        while($row = mysqli_fetch_assoc($run)){
                                ?>
                                            <tr>
                                                <td><?=$i?></td>
                                                <td><?=$row['cust_name']?></td>
                                                <td><?=$row['username']?></td>
                                                <td><?=$row['phone']?></td>
                                                <td><?=$row['email']?></td>
                                                <td><?=$row['password']?></td>
                                                <td>
                                                    <?php
                                                        if($row['status'] == 1){

                                                    ?>
                                                            <button class="btn btn-danger py-1 px-3" onclick="updateSubscriber(<?=$row['id']?>, <?=$row['status']?>)">Unsubscribe</button>
                                                    <?php
                                                        }else{
                                                    ?>
                                                            <button class="btn btn-success py-1 px-3" onclick="updateSubscriber(<?=$row['id']?>, <?=$row['status']?>)">Subscribe</button>
                                                    <?php
                                                        }
                                                    ?>
                                                    <!-- <button class="btn btn-dark py-1 px-3 mx-1 my-2" onclick="deleteProduct(<?=$row['id']?>)">Delete</button> -->
                                                </td>
                                            </tr>
                                <?php
                                            $i++;
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong class="text-black" style="color: #444">GERMAN DIARIES | &copy; 2022 | All rights reserved.
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <form id="update_level" enctype="multipart/form-data" class="row">
                            <input type="hidden" name="hidden_id" id="hidden_id">
                            
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Level Title</label>
                                <input type="text" class="form-control" id="level_title" name="level_title"
                                    placeholder="Add level title..">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Level Image</label>
                                <input type="file" name="file_img_modal" onchange="previewFile(this)" id="level_image_modal" class="form-control">
                                <img src="" id="level_image" class="img-fluid w-50 mt-2" alt="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Level Duration (optional)</label>
                                <input type="text" name="level_duration" id="level_duration" class="form-control"
                                    placeholder="Add Level Duration (optional)..">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Level Description </label>
                                <input type="text" name="level_desc" id="level_desc" class="form-control"
                                    placeholder="Enter Level Description...">
                            </div>

                            <div class="col-md-6">
                                <img src="" alt="" class="img-fluid border border-dark rounded shadow-lg p-1"
                                    id="image-preview-main">
                            </div>

                            <div class="form-group col-md-12">
                                <button class="btn btn-block btn-info" name="btn_update_level">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#subscribers").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#subscribers_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
        });
    </script>

    <script>
        function updateSubscriber(id, stat){
            var id = id;
            var status = stat;
            
            // if(confirm("Are you sure, your want to delete the level?") == 1){
                $.ajax({
                    url:'dynamic/updateSubscriber.php',
                    type:'post',
                    data:{id:id, status:status},
                    success:function(data){
                        if(data == "1"){
                            swal("Good Job!", "Updated Successfully!", "success").then((value) => {
                                location.reload();
                            });;
                        }else{
                            swal("Oh no!", "Something went wrong! Please try again!", "error").then((value) => {
                                location.reload();
                                });;
                        }
                    }
                })
            // }
        }
    </script>
<!-- Page specific script -->
</body>

</html>