<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markah</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        *
        {
            font-family: Arial;
            text-decoration: none;
            margin: 0;
            font-family: Roboto;
            
        }
        .menu
        {
            display: flex;
            justify-content: right;
            background-color: #193350;
        }
        .markah
        {
            
            color: #FDBA3D;
            font-weight: bold;
        }
        .menu a
        {   
            font-weight: bold;
            padding: 10px 50px;
        }
        .pesan, .home, .profil
        {
            color: #FFF;
        }
        .menu-main
        {
            display: flex;
            justify-content: center;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px; 
        }
        /* .selection{
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            padding-bottom: 5%;
        }

        .beng{
            background-color: rgb(222, 221, 226);
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            padding: 4% 0;
            
        }
        .beng img{
            width: 90%;
        }
        .beng h5{
            font-size: 1.3vw;
            padding-top: 2%;
            color: black;
            text-align: left;
        }
        .selection :hover{
            background-color: #FDBA3D;
            transition: 0.2s ease;
        }
        #mark{
            width: 50%;
        } */
        .logindulu
        {
            padding: 200px 0px;
            display: flex;
            justify-content: center;
        }
        .logindulu p
        {
            
            color: #193350;
        }

        footer
        {
            background-color: #193350;
            padding: 70px 0px;
        }
        footer h2
        {
            display: flex;
            justify-content: center;
            color: #FFF;
            font-size: 50px;
        }
    </style>
</head>
<body>
        <nav>
            <div class="menu">
                <a href="home.php" class="home">Bengkel</a>
                <a href="pesanlogin.php" class="pesan">Pesan</a>
                <a href="markahlogin.php" class="markah">Markah</a>
                <a href="profillogin.php" class="profil">Profil</a>
                
            </div>
        
        </nav>
        
        <div class="logindulu">
            <p>Belum ada markah!</p>
        </div>
        <!-- <div class="selection">
            <div class="beng">
                <img src="assets/image/bengkel-mobil-jakarta-bengkel-bos.jpg" alt="">
                <div class="detail">
                    <h3>CARfix</h3><p>Jakarta Selatan</p>
                    <h3>Karang Tengah</h3>
                    <img src="assets/image/markah.png" id="mark" alt="">
                </div>
            </div>
            <div class="beng">
                <img src="assets/image/bengkel-mobil-jakarta-kjs-motor.jpg" alt="">
                <div class="detail">
                    <h3>CARfix</h3><p>Jakarta Timur</p>
                    <h3>Karang Tengah</h3>
                    <img src="assets/image/markah.png" id="mark" alt="">
                </div> 
            </div>     
            <div class="beng">
                <img src="assets/image/bengkel-mobil-jakarta-dokter-mobil.jpg" alt="">
                <div class="detail">
                    <h3>CARfix</h3><p>Jakarta Timur</p>
                    <h3>Karang Tengah</h3>
                    <img src="assets/image/markah.png" id="mark" alt="">
                </div>   
            </div> 
            
            <div class="beng">
                <img src="assets/image/bengkel-mobil-jakarta-kudamas-resepsionis.jpg" alt="">
                <div class="detail">
                    <h3>CARfix</h3><p>Jakarta Timur</p>
                    <h3>Karang Tengah</h3>
                    <img src="assets/image/markah.png" id="mark" alt="">
                </div>
                
                
              
                    
            </div>   
        </div> -->

        <footer>
            <h2>Auto Help</h2>
        </footer>
</body>
</html>

<?php 
}else{
     header("Location: profil.php");
     exit();
}
 ?>
