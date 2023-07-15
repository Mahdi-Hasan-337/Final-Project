<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
        
        <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script defer src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
        
        <script defer src="js/index.js"></script>
        <style>
            form{
                background: rgb(229, 228, 228);
                border: 0.1rem solid black;
                padding: 1rem;
                /* color: white; */
                /* box-shadow : 0px 0px 10px 0px; */
                border-radius : 10px;
                /* margin: 0 auto; */
            }

            .box{
                padding: 0.8rem;
            }

            form .box{
                border: 0.1rem solid rgb(140, 138, 138);
                text-transform: none;
                /* padding:.8rem .8rem; */ */
                font-size: 1rem;
                /* color:var(--black); */
                border-radius: .5rem;
                background-color: var(--white);
                margin:1rem 0;
                width: 100%;
            }

            .add-btn{
                display: block;
                width: 100%;
                /* text-align: center; */
                /* background-color: var(--blue); */
                /* color:var(--white); */
                font-size: 1rem;
                padding:0.7rem;
                border-radius: .5rem;
                cursor: pointer;
                margin-top: 1rem;
            }

            .add-btn:hover{
                background-color:rgb(184, 183, 183);
    ;
            }
        </style>
        
        <title>Document</title>
    </head>
    <body>
    <?php include 'navbar.php'; ?>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 box">
                form action="insertAction.php" method ="post" enctype='multipart/form-data'>
                    <h5 style="text-align:center">ADD A NEW PRODUCT</h5>
                    <div class="mb-3">                       
                        <input type="text" class="form-control box" name="p_name" placeholder="Enter the product name" required>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control box" name="p_price" placeholder="Enter the product price" required>
                    </div>

                    <div class="mb-3">                        
                        <input type="file" class="form-control box" name="p_image" required>
                    </div>
                                
                    <button type="Register" class="add-btn btn btn-primary col-12">ADD THE PRODUCT</button>
                </form>
            </div>
        </div>

        <hr>

        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include 'config.php';
                    
                    $allData = mysqli_query($conn, "SELECT * FROM `product`");
                    
                    while($row = mysqli_fetch_array($allData))
                    {
                        echo "
                            <tr>                               
                                <td>$row[id]</td>
                                <td>$row[p_name]</td>
                                <td>$row[p_price]</td>
                                <td> <img width='100px' src='$row[p_image]' alt=''></td>
                                <td>
                                    <a class='btn btn-warning' href='update.php? id=$row[id]' style='width:6rem'>Update</a><br>
                                    <a class='btn btn-danger' href='#' onclick='confirmDelete($row[id])' style='width:6rem; margin-top: 5px;'>Delete</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(productId) {
            if (confirm("Are you sure you want to delete this product?")) {
                window.location.href = "delete.php?id=" + productId;
            }
        }
    </script>
    </body>
</html>