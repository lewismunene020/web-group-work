<?php
    include_once("header.php");
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']) ){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);

        


     

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg = "Image uploaded successfully";

            // inserting  the product data to  the  database
            $sql = "INSERT INTO ".PRODUCTS." (name, description, price, quantity, image) VALUES ('$name', '$description', '$price', '$quantity', '$image')";
           
            $insert = mysqli_query($conn, $sql);

            // echo $insert;

            if($insert){
                $msg = "Product uploaded successfully";
                echo showSuccessfulUpload($name , $description , $price , $quantity , $image , $msg);
            }else{

                $msg = "Failed to upload product";
                echo showSuccessfulUpload($name , $description , $price , $quantity , $image , $msg);
            }




        }else{
            $msg = "Failed to upload image";
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            echo "Welcome To".APP_NAME;

        ?>
    </title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>





<script>
    
</script>

    <div class="admin-upload popup active" >
        <form class="container" action="admin.php" method="post" enctype="multipart/form-data">
        <h1>Upload  Goods</h1>


            <div class="form-control">
                <label for="">Enter Product Name</label>
                <input type="text" name="name" placeholder="Product Name" required>
            </div>

            <div class="form-control">
                <label for="image">Select  Product Image</label>
                <input id="image" type="file" name="image" accept="image/*" required>
            </div>

            <div class="form-control">
                <label for="">Enter Product Description</label>
                <input type="text" name="description" placeholder="" required>
            </div>
            
            <div class="form-control">
                <label for="">Enter Product Price</label>
                <input type="number" name="price" placeholder="" required>
            </div>

            <div class="form-control">
                <label for="">Enter Product Quantity</label>
                <input type="number" name="quantity" placeholder="" required>
            </div>

    

            <div class="form-control">
                <input class="btn primary"type="submit" name="submit" value="Upload">
            </div>


        </form>
    </div>

    
</body>
</html>