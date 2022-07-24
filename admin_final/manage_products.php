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
    <title>Products | AntickZONE</title>

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
            <div class="container-fluid manage-products">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Add Products</h3>

                            <a href="view_products.php">
                                <button data-toggle="modal" data-target="#add_products_modal">View All Products</button>
                            </a>
                        </div>
                    </div>
                        
                    <div class="card-body">
                        <table id="category_table" class="table table-bordered table-striped table-light category_table">
                            <tbody>
                                <form id="add_products" class="row">
                                    <div class="form-group col-md-12 p-0">
                                        <label>Product Title</label>
                                        <input type="text" class="form-control" id="product_title" name="product_title"
                                            placeholder="Enter Product Title" required>
                                    </div>

                                    <div class="form-group col-md-12 p-0">
                                        <label>Product Slug</label>
                                        <input type="text" class="form-control" id="product_slug" name="product_slug"
                                            placeholder="Enter Product Slug" required>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Product Width</label>
                                            <input type="text" class="form-control" id="product_width" name="product_width"
                                                placeholder="Enter Product Width (In ft.)" required>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Product Height</label>
                                            <input type="text" class="form-control" id="product_height" name="product_height"
                                                placeholder="Enter Product Height (In ft.)" required>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Price</label>
                                            <input type="text" class="form-control" id="product_price" name="product_price"
                                                placeholder="Enter Actual Price (In Rs.)" required>
                                        </div>

                                        <!-- <div class="form-group col-md-4">
                                            <label>Product Rate</label>
                                            <select name="product_rate" id="product_rate" class="form-control">
                                                <option value="1">1-Star</option>
                                                <option value="2">2-Star</option>
                                                <option value="3">3-Star</option>
                                                <option value="4">4-Star</option>
                                                <option value="5" selected>5-Star</option>
                                            </select>
                                        </div> -->
                                    </div>

                                    <div class="form-group add_reqr">
                                        <label>Product Image</label>
                                        <div class="input-group">
                                            <textarea rows="4" type="text" required class="form-control" name="product_image" placeholder="Enter your image url.. (separate multiple image using comma (,))"></textarea>
                                            <!-- <div class="input-group-append">
                                                <button type="button" class="btn btn-info add_reqr_Btn"><i class="fa-solid fa-plus"></i></button>
                                            </div> -->
                                        </div>
                                    </div>


                                    <div class="form-group col-md-12 p-0">
                                        <label>Product Description</label>
                                        <textarea rows="4" class="form-control" id="product_desc" name="product_desc"
                                            placeholder="Enter Product Description" required></textarea>
                                    </div>

                                    <div class="form-group col-md-12 p-0 mt-2">
                                        <button type="submit" class="submit_btn_add_products" id="submit_btn_add_products">Submit</button>
                                        <!-- <button type="button" class="close_btn btn" data-dismiss="modal">Cancel</button> -->
                                    </div>
                                </form>
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
            $("#category_table").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#category_table_wrapper .col-md-6:eq(0)');
        });
    </script>

    
    


    <script>
        $(document).ready(function(){
            $('#add_products').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url:"dynamic/addProducts.php",
                    type:"POST",
                    data:formData,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        if(data == "1"){
                            swal("Good Job!", "Product Added Successfuly!", "success").then((value) => {
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

            $('#edit_product').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url:"dynamic/editProduct.php",
                    type:"POST",
                    data:formData,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        if(data == "1"){
                            swal("Good Job!", "Product Edited Successfuly!", "success").then((value) => {
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

            $('.add_reqr_Btn').on('click', function () {
                $('.add_reqr').append(
                    `<div class="input-group addInp mt-2">
                                <input type="text" class="form-control" name="reqr[]" placeholder="Enter your image url..">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-danger RemoveBtn"><i class="fa-solid fa-trash"></i></button>
                                </div>
                        </div>`
                )
                $('.RemoveBtn').on('click', function () {
                    $(this).parent().parent().remove();
                })

            })
        })

        function deleteProduct(id){
            var id = id;
            
            if(confirm("Are you sure, your want to delete the Product?") == 1){
                $.ajax({
                    url:'dynamic/deleteProduct.php',
                    type:'post',
                    data:{id:id},
                    success:function(data){
                        if(data == 1){
                            swal("Good Job!", "Product Deleted Successfuly!", "success").then((value) => {
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

        function editProduct(id){
            $('.edit_category_modal').modal('show');
            var id = id;
            $.ajax({
                url:"dynamic/editProductData.php",
                method:"post",
                data:{id:id},
                success:function(data){
                    var result = $.parseJSON(data);
                    var cat_name = result['category'];
                    $('#hid').val(result['id']);
                    $('#hid_img').val(result['image']);
                    $("#product_category_edit option").each(function(){
                        if(($(this).val()) == cat_name){
                            $(this).attr('selected', 'selected');
                        }
                    });
                    $('#product_title_edit').val(result['product_title']);
                    $('#product_img').attr('src', result['image']);
                    $('#product_actual_price_edit').val(result['actual_price']);
                    $('#product_discount_price_edit').val(result['disc_price']);
                }
            })
        }

        function previewFile(input){
            var file = $("#product_icon_input").get(0).files[0];
    
            if(file){
                var reader = new FileReader();
    
                reader.onload = function(){
                    $("#display_image").attr("src", reader.result);
                    $("#display_image").css({"display":"block", "margin-bottom":"10px"});
                }
    
                reader.readAsDataURL(file);
            }
        }

        function previewFileEdit(input){
            var file = $("#product_icon_input_edit").get(0).files[0];

            if(file){
                var reader = new FileReader();
    
                reader.onload = function(){
                    $("#product_img").attr("src", reader.result);
                    $("#product_img").css({"display":"block"});
                }
    
                reader.readAsDataURL(file);
            }
        }
    </script>

</body>

</html>