<nav class="navbar navbar-default">
   <link rel="stylesheet" href="style1.css">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>



    <table>
      <tr>
      <td><button class="nav-button" onclick="goBack()">Go Back</button></td>
   
     <td> <a href="index.php"><img src="assets/icon/home2.jpg" class="home"></a> </td>
      </tr>
</table>
<br/><br/>
<img src="assets/img/back.png" class="first" >
 
 

   

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php 

      if(isset($_SESSION['username'], $_SESSION['password'])) {

    ?>

      <form class="navbar-form navbar-right" action="searchresults.php" method="GET">

       
        
        <h1><strong><div class="welcome"><?php echo "Welcome, <a href='profile.php'>".$_SESSION['username']."</a>!";?></div></strong></h1>

        <a href="logout.php">Log Out <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>

      </form>

      <?php 

        } else {
          echo "<span class='not-logged'>Not logged in.</span>";
        }

      ?>

      


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
