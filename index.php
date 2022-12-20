<?php
require('./pages/header.php')
?>

<section class="home">
        <div class="container-fluid px-0 top-banner">
            <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
                 <div class="col-lg  content text-center text-white col-md-6">
                    <h1>Good Foods Here</h1>
                    <p>Book table and search restaurants</p>
                    <div class="mt-4">
                        <button class="btn btn-warning main-btn px-4 py-2">Book Now</button>
                    </div>
                </div>
               </div> 
            </div>
        </div>
</section>

<!-- load restaurant from database -->
<?php
require('./pages/restaurant.php')
?>  
<!-- end  -->


<!-- load footer  -->
<?php 
require('./pages/footer.php')
?>
<!-- end  -->
