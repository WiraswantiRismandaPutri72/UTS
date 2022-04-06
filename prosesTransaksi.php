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
            <br>
                <b>Total Transaksi</b><br><br>
            <?php
                $paket1 = 20000;
                $paket2 = 30000;
                $paket3 = 50000;
                $jml = $_GET["jumlah"];
                $menu = $_GET["menu"];
                $status = $_GET["status"];

                if($status == "Member"){
                    if($menu=="Paket 1"){
                        $harga = $paket1 * $jml;
                        if($jml==1){
                            $diskon = $harga * 5/100;
                        }else if($jml <= 3){
                            $diskon = $harga * 7/100;
                        }else if($jml > 3){
                            $diskon = $harga*10/100;
                        }
                    }else if($menu=="Paket 2"){
                        $harga = $paket2 * $jml;
                        if($jml==1){
                            $diskon = $harga*5/100;
                        }else if($jml <= 3){
                            $diskon = $harga*7/100;
                        }else if($jml > 3){
                            $diskon = $harga*10/100;
                        }
                    }else{
                        $harga = $paket3 * $jml;
                        if($jml==1){
                            $diskon = 0;
                        }else if($jml <= 3){
                            $diskon = $harga*7/100;
                        }else if($jml > 3){
                            $diskon = $harga*10/100;
                        }
                    }
                } else {
                    if($menu=="Paket 1"){
                        $harga = $paket1 * $jml;
                        if($jml<=5){
                            $diskon = 0;
                        }else if($jml<=10){
                            $diskon = $harga*5/100;
                        }else if($jml>10){
                            $diskon = $harga*7/100;
                        }
                    }else if($menu=="Paket 2"){
                        $harga = $paket2 * $jml;
                        if($jml<=5){
                            $diskon = 0;
                        }else if($jml<=10){
                            $diskon = $harga*5/100;
                        }else if($jml>10){
                            $diskon = $harga*7/100;
                        }
                    }else{
                        $harga = $paket3 * $jml;
                        if($jml<=5){
                            $diskon = 0;
                        }else if($jml<=10){
                            $diskon = $harga*5/100;
                        }else if($jml>10){
                            $diskon = $harga*7/100;
                        }
                    }
                }

                $total = $harga - $diskon;

                echo "Nama Pembeli : " . $_GET["nama"] . "<br><br>";
                echo "Status Pembeli : " . $_GET["status"] . "<br><br>";
                echo "Total Harga : " . $harga . "<br><br>";
                echo "Total Diskon : " . $diskon . "<br><br>";
                echo "Yang harus dibayarkan " . $total;
            ?>
            </form>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <footer>
                Website Footer
            </footer> 
    </body>
</html> 