<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Delicous Seafood Restoran</h1>
            </header>
            <nav>
                 <ul>
                    <li><a href="formUpload.html">Tambah Foto</a></li>
                    <li><a href="formTransaksi.html">Transaksi</a></li>
                    <li><a href="form.html">Menu</a></li>
                 </ul>
            </nav>
            <?php
                $target_path ="foto/";

                $target_path =$target_path . basename(
                $_FILES['uploadedfile']['name']);

                if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)){
                    echo "The file " . basename($_FILES['uploadedfile']['name'])."has been uploaded";
                }else{
                    echo "There was an error uploading the file, please try again!";
                }
            ?>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br>
            <footer>
                Website Footer
            </footer> 
    </body>
</html>