<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin BTL</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>
<body>
        <?php
            include('./modules/header.php');
        ?>
    <div class="main">
        <div class="sidebar">
            <?php
                include('./modules/menu.php');
            ?>
        </div>
            <?php
                include('./config/config.php');
                include('./modules/main.php');
            ?> 
    </div>
    <?php
        include('./modules/footer.php');
    ?>  

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'tomtat' );
            CKEDITOR.replace( 'noidung' );
    </script>
</html>