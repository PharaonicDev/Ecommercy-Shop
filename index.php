
<?php require_once 'core/init.php';

 $sql = "SELECT * FROM products WHERE featured = 1";
 $featured = $db->query($sql);
?>
<?php include 'header.php';?>

<?php 
 $sql = "SELECT * FROM categories WHERE parent = 0";
 $pquery = $db->query($sql);
?>
	<!-- Start Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
   <a class="navbar-brand" href="#">Stone Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavDropdown" aria-controls="NavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="NavDropdown">
    <ul class="navbar-nav">
      
      <?php while($parent = mysqli_fetch_assoc($pquery )) : ?>
      <?php 
       $parent_id = $parent['id'];
       $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id' ";
       $cquery = $db->query($sql2);
      ?>
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo $parent['category']; ?>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navDropdownMenuLink" role="menu">
          <?php 
            while($child = mysqli_fetch_assoc($cquery)) : ?> 
          
          <li><a class="dropdown-item" href="#"><?php echo $child['category']?></a></li>
         <?php endwhile;?>
        </ul>
      </li>
       <?php endwhile;?>
    </ul>
  </div>
 </div>
</nav>
	<!-- End Navbar -->
 <!--Start slider[welcome window] -->
  <section>
  	<div class="slider">
  		<div id="slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider/bg1.jpg" alt="First slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/bg2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slider/bg3.jpg" alt="Third slide">
    </div> -->
  </div>
</div>
  	</div>
  </section>
<!--End slider[welcome window] -->

<!-- Products -->
<section>
	<div class="container">
	

	<div class="row">
		<div class="products">
			<h1 class="text-center text-muted "> T-Shirts</h1>
      <?php  while ($products = mysqli_fetch_assoc($featured)) :   ?>
    
			<div class="card-deck">
    <?php include 'product.php'; ?>
  </div>
   
   </div>
 <?php endwhile; ?>
</div><!--products-->
		</div><!--row-->
</div><!--container-->
</section>

<footer>
	<p class="text-muted text-center">copy right &copy; 2016</p>
</footer>
<?php include 'details-modal-Levisjeans.php';
    include 'details-modal-Football.php';
    include  'details-modal-Watch.php';
    include 'details-modal-HeadBand.php';
    include 'details-modal-Hoodie.php';
    include 'details-modal-Purse.php';
    include 'details-modal-joggers.php';
    include 'details-modal-poloshirt.php'; ?>

<?php include 'footer.php';?>
