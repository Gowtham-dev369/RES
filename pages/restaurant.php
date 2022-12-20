<!-- require connection of database  -->
<?php
require('./database/db_connect.php')
?>
<!-- end  -->


 <!-- fetch store name from database  -->
<?php  
    $sql = "select sid,sname,img from store";
    $result = mysqli_query($conn,$sql);
    $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!-- end  -->

<div class="container py-5 ">
    <div class="card-columns">
        <?php foreach($datas as $data){?>
            <div class="card h-100">
                <img class="card-img-top" src="./img/<?php echo $data['img'] ?>" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title"><?php echo $data['sname']?></h5>
                    <a href="def_res.php?id=<?= $data['sid'] ?>" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

