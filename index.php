<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" style="background-color : #04262a;">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #04262a;">
              <div class="col-sm-12 col-md"  >
                <div class="heading text-center my-5 " style="background-color : #a8b1b1;">
                  <h3>Welcome to</h3>
                  <h1>PIGGY BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="https://foto.wuestenigel.com/wp-content/uploads/api/close-up-photo-of-white-piggy-bank-with-coins-around-it-and-hammer-next-to-it-on-white-background.jpeg" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" class="img-fluid ">
                    <br>
                    <a href="createuser.php"><button style="background-color : #d39e00;">Add New User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://png.pngtree.com/png-vector/20191127/ourmid/pngtree-mobile-transaction-icon-png-image_2043269.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #d39e00;">Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEpEYav5967FmAKdCe0j06CYttFeb3-hk0J_YfLHR0w4Zn_Dkg4E3GW-PXpHAX4_dxr3E&usqp=CAU" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #d39e00;">History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>PARTH NANDA</b> <br> Parth Nanda Foundation</p>
        <?php
  include 'footer.php';
  ?>

            
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>