<?php
    include "../include/connection.php";
    session_start();
    $username = $_SESSION['uname'];
    $password = $_SESSION['pwd'];
    $img = $_SESSION['img'];
    if(isset($_REQUEST['id'])){
        // echo "mast chal rha hai";
        $id = $_REQUEST['id'];

        $select_cat = "SELECT * FROM `shop` WHERE `id`='$id'";
        $run_cat = mysqli_query($con, $select_cat);

        $cat_title="";

        if(mysqli_num_rows($run_cat) > 0){
            while($row = mysqli_fetch_assoc($run_cat)){
                $cat_title = $row['title'];
            }
        }
    }
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
            <div class="container-fluid manage-products new-designs-images">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title"><?=$cat_title?></h3>

                            <button data-toggle="modal" data-target="#add_image_modal">Add Image</button>
                        </div>
                    </div>
                        
                    <div class="card-body">
                        <table id="image_table" class="table table-bordered table-striped table-light category_table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th class="desc-table-heading">Description</th>
                                    <th class="actual-price-table-heading">Price</th>
                                    <th>Size</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                    $select = "SELECT * FROM `shop_images` WHERE `shop_id`='$id'";
                                    $run = mysqli_query($con, $select);
                                    if(mysqli_num_rows($run) > 0){
                                        $i=1;
                                        while($row = mysqli_fetch_assoc($run)){
                                ?>
                                            <tr>
                                                <td><?=$i?></td>
                                                <td style="padding:15px;"><img src="<?=$row['image']?>" alt=""></td>
                                                <td><?=$row['title']?></td>
                                                <td style="width: 25%; font-size: 12px; padding: 10px; text-align: justify;"><?=$row['description']?></td>
                                                <td><?=$row['price']?></td>
                                                <td><?=$row['size_width']?>ft width × <?=$row['size_height']?>ft height</td>
                                                <td class="actions-td">
                                                    <button class="btn edit-btn px-3 my-2" onclick="editProduct(<?=$row['id']?>)"><i style="color: #ee9a00;" class="fa-solid fa-pencil"></i></button>
                                                    <button class="btn py-1 px-3 mx-1 my-2" onclick="deleteImage(<?=$row['id']?>)"><i style="color: #e20000;" class="fa-solid fa-trash-can"></i></button>
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
            <strong class="text-black" style="color: #444">ANTICKZONE | &copy; 2022 | All rights reserved.
        </footer>





        <!-- Modal (Add Category) -->
        <div class="modal fade add_products_modal new_designs_images_modal" id="add_image_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="add_images" class="row">
                            <input type="hidden" name="img_category_id" id="img_category_id" value="<?=$id?>">

                            <!-- <div class="form-group position-relative col-md-12 d-flex justify-content-center align-items-center">
                                <input type="file" name="product_icon_input" onchange="previewFile(this.value)" id="product_icon_input" class="form-control">
                                <input type="text" class="product_icon_display" placeholder="Upload Image" readonly="True">
                                <button class="upload_file" type="button">Upload Image</button>
                            </div>

                            <div class="form-group position-relative col-md-12 mb-0">
                                <img src="" id="new_design_img_add" name="new_design_img_add" class="img-fluid w-25" alt="">
                            </div> -->

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="image_url" name="image_url"
                                    placeholder="Enter Image Url">
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="image_title" name="image_title"
                                    placeholder="Enter Image Title">
                            </div>

                            <div class="form-group col-md-12">
                                <textarea rows="3" type="text" class="form-control" id="image_description" name="image_description"
                                    placeholder="Enter Image Description"></textarea>
                            </div>

                            <div class="form-group col-md-6" style="padding-right: 5px;">
                                <input type="text" class="form-control" id="image_price" name="image_price"
                                    placeholder="Enter Price">
                            </div>

                            <div class="form-group col-md-6" style="padding-right: 5px;">
                                <input type="text" class="form-control" id="size_width" name="size_width"
                                    placeholder="Enter Image Width (in ft.)">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="size_height" name="size_height"
                                    placeholder="Enter Image Height (in ft.)">
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
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form id="edit_image" class="row">
                            <input type="hidden" name="hid" id="hid" value="">

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="image_url_edit" name="image_url_edit"
                                    placeholder="Enter Image Url">
                            </div>

                            <div class="form-group col-md-12" style="padding-right: 10px;">
                                <input type="text" class="form-control" id="image_title_edit" name="image_title_edit"
                                    placeholder="Enter Image Title">
                            </div>

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="image_description_edit" name="image_description_edit"
                                    placeholder="Enter Image Description">
                            </div>

                            <div class="form-group col-md-12">
                                <input class="form-control" id="image_price_edit" name="image_price_edit"
                                    placeholder="Enter Image Price">
                            </div>

                            <div class="form-group col-md-6" style="padding-right: 10px;">
                                <input type="text" class="form-control" id="image_size_width_edit" name="image_size_width_edit"
                                    placeholder="Enter Image Width (In ft.)">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="image_size_height_edit" name="image_size_height_edit"
                                    placeholder="Enter Image Height (In ft.)">
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
            $('#add_images').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url:"dynamic/addImages_ShopCollection.php",
                    type:"POST",
                    data:formData,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        if(data == "1"){
                            swal("Good Job!", "Image Added Successfuly!", "success").then((value) => {
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

            $('#edit_image').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url:"dynamic/editShopCollectionImage.php",
                    type:"POST",
                    data:formData,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        if(data == "1"){
                            swal("Good Job!", "Image Edited Successfuly!", "success").then((value) => {
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

        function deleteImage(id){
            var id = id;
            
            if(confirm("Are you sure, your want to delete the Image?") == 1){
                $.ajax({
                    url:'dynamic/deleteImage_ShopCollection.php',
                    type:'post',
                    data:{id:id},
                    success:function(data){
                        if(data == 1){
                            swal("Good Job!", "Image Deleted Successfuly!", "success").then((value) => {
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
                url:"dynamic/editShopCollectionImgData.php",
                method:"post",
                data:{id:id},
                success:function(data){
                    var result = $.parseJSON(data);
                    console.log(result);
                    $('#hid').val(result['id']);
                    $('#image_title_edit').val(result['title']);
                    $('#image_url_edit').val(result['image']);
                    $('#image_description_edit').val(result['description']);
                    $('#image_price_edit').val(result['price']);
                    $('#image_size_width_edit').val(result['size_width']);
                    $('#image_size_height_edit').val(result['size_height']);
                }
            })
        }

        // function previewFile(input){
        //     var file = $("#product_icon_input").get(0).files[0];
    
        //     if(file){
        //         var reader = new FileReader();
    
        //         reader.onload = function(){
        //             $("#new_design_img_add").attr("src", reader.result);
        //             $("#new_design_img_add").css({"display":"block", "margin-bottom":"10px"});
        //         }
    
        //         reader.readAsDataURL(file);
        //     }
        // }

        // function previewFileEdit(input){
        //     var file = $("#new_design_image_input").get(0).files[0];
    
        //     if(file){
        //         var reader = new FileReader();
    
        //         reader.onload = function(){
        //             $("#new_design_img").attr("src", reader.result);
        //             $("#new_design_img").css({"display":"block"});
        //         }
    
        //         reader.readAsDataURL(file);
        //     }
        // }
    </script>

</body>

</html>