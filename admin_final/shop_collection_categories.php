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
    <title>Shop Collection | AntickZONE</title>

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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>


    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php
            include "include/header_admin.php";
            include "include/sidebar_admin.php";
        ?>



        


        <div class="content-wrapper mt-2">
            <div class="container-fluid manage-products new-designs">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Shop Collection</h3>

                            <button data-toggle="modal" data-target="#add_category_modal">Add Category</button>
                        </div>
                    </div>
                        
                    <div class="card-body">
                        <table id="image_table" class="table table-bordered table-striped table-light category_table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Category Title</th>
                                    <th>Category Slug</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                    $select = "SELECT * FROM `shop` WHERE `status`=1";
                                    $run = mysqli_query($con, $select);
                                    if(mysqli_num_rows($run) > 0){
                                        $i=0;
                                        while($row = mysqli_fetch_assoc($run)){
                                            $i++;
                                ?>
                                            <tr>
                                                <td><?=$i?></td>
                                                <td><?=$row['category']?></td>
                                                <td><?=$row['title']?></td>
                                                <td><?=$row['slug']?></td>
                                                <td class="actions-td">
                                                    <button class="btn edit-btn px-3 my-2" onclick="editCategory(<?=$row['id']?>)"><i style="color: #ee9a00;" class="fa-solid fa-pencil"></i></button>
                                                    <button class="btn py-1 px-3 mx-1 my-2" onclick="deleteCategory(<?=$row['id']?>)"><i style="color: #e20000;" class="fa-solid fa-trash-can"></i></button>
                                                    <button class="btn py-1 px-3 my-2"><a style="color: #000;" href="shop_collection_images.php?id=<?=$row['id']?>" class="fa-solid fa-eye text-decoration-none"></a></button>
                                                </td>
                                            </tr>
                                <?php
                                            
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
            <strong class="text-black" style="color: #444">ANTICKZONE | &copy; 2022 | All rights reserved.
        </footer>





        <!-- Modal (Add Category) -->
        <div class="modal fade add_products_modal add_new_design_cat_modal" id="add_category_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="add_category" class="row">
                            <div class="form-group col-md-12">
                                <select name="category_select" id="category_select" class="form-control">
                                    <option value="Events">Events</option>
                                    <option value="Home">Home</option>
                                    <option value="Places">Places</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="category_title" name="category_title"
                                    placeholder="Enter Category Title">
                            </div>

                            <div class="form-group col-md-12 d-flex justify-content-end">
                                <button type="submit" class="submit_btn_add_products mx-2" id="submit_btn_add_products">Submit</button>
                                <button type="button" class="close_btn btn" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 





        <!-- Modal (Edit Products) -->
        <div class="modal fade edit_category_modal" id="edit_category_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="edit_category" class="row">
                            <input type="hidden" name="hid" id="hid" value="">

                            <div class="form-group col-md-12">
                                <select name="category_select_edit" id="category_select_edit" class="form-control">
                                    <option value="Events">Events</option>
                                    <option value="Home">Home</option>
                                    <option value="Places">Places</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="category_title_edit" name="category_title_edit"
                                    placeholder="Enter Category Title">
                            </div>                            

                            <div class="form-group col-md-12 d-flex justify-content-end">
                                <button type="submit" class="submit_btn mx-2" id="submit_btn">Update</button>
                                <button type="button" class="close_btn btn" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
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
            $("#image_table").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#image_table_wrapper .col-md-6:eq(0)');
        });
    </script>

    
    


    <script>
        $(document).ready(function(){
            $('#add_category').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url:"dynamic/addCategory_ShopCollection.php",
                    type:"POST",
                    data:formData,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        if(data == "1"){
                            swal("Good Job!", "Category Added Successfuly!", "success").then((value) => {
                                location.reload();
                            });;
                        }else{
                            swal("Oh no!", "Something went wrong! Please try again!", "error").then((value) => {
                                location.reload();
                            });;
                        }
                    }
                })
            })

            $('#edit_category').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url:"dynamic/editShopCollectionCategory.php",
                    type:"POST",
                    data:formData,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        if(data == "1"){
                            swal("Good Job!", "Category Edited Successfuly!", "success").then((value) => {
                                location.reload();
                            });;
                        }else{
                            swal("Oh no!", "Something went wrong! Please try again!", "error").then((value) => {
                                location.reload();
                            });;
                        }
                    }
                })
            })
        })

        function deleteCategory(id){
            var id = id;
            
            if(confirm("Are you sure, your want to delete the Category?") == 1){
                $.ajax({
                    url:'dynamic/deleteCategory_ShopCollection.php',
                    type:'post',
                    data:{id:id},
                    success:function(data){
                        if(data == 1){
                            swal("Good Job!", "Category Deleted Successfuly!", "success").then((value) => {
                                location.reload();
                                });;
                        }else{
                            swal("Oh no!", "Something went wrong! Please try again!", "error").then((value) => {
                                location.reload();
                                });;
                        }
                    }
                })
            }
        }

        function editCategory(id){
            $('.edit_category_modal').modal('show');
            var id = id;
            $.ajax({
                url:"dynamic/editShopCollectionCatData.php",
                method:"post",
                data:{id:id},
                success:function(data){
                    var result = $.parseJSON(data);
                    // var rate = result['rate'];
                    $('#hid').val(result['id']);
                    $("#category_select_edit option").each(function(){
                        if(($(this).val()) == result['category']){
                            $(this).attr('selected', 'selected');
                        }
                    });
                    $('#category_title_edit').val(result['title']);
                }
            })
        }

        // function previewFile(input){
        //     var file = $("#product_icon_input").get(0).files[0];

        //     if(file){
        //         var reader = new FileReader();
    
        //         reader.onload = function(){
        //             $("#category_img_add").attr("src", reader.result);
        //             $("#category_img_add").css({"display":"block", "margin-bottom":"10px"});
        //         }
    
        //         reader.readAsDataURL(file);
        //     }
        // }


        // function previewFileEdit(input){
        //     var file = $("#category_image_input").get(0).files[0];
    
        //     if(file){
        //         var reader = new FileReader();
    
        //         reader.onload = function(){
        //             $("#category_img").attr("src", reader.result);
        //             $("#category_img").css({"display":"block"});
        //         }
    
        //         reader.readAsDataURL(file);
        //     }
        // }
    </script>

</body>

</html>