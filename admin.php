<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodie</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <section>
            <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                <h3>Add a new product</h3>
                <input type="text" name="p_name" placeholder="Enter the product name"class="box" required>
                <input type="number" name="p_price" placeholder="Enter the product name"class="box" required>
                <input type="file" name="p_image"  accept="image/png, image/jpg, image/jpge"class="box" required>
                <input type="submit" value="add the product" name="add_product" class="btn">
            </form>
        </section>
    </div>



<script src='js/script.js'></script>
</body>
</html>