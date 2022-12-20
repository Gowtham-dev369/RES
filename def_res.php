
<?php
require('./pages/header.php');
require('./database/db_connect.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "select food_img,fname,sname from food,store where food.sid=store.sid and food.sid = $id";
    $result= mysqli_query($conn,$sql);
    $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $ssname = $datas[0]['sname'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
   <div class="container d-flex justify-content-center py-5 mt-5">
    <div class="">
        <h1><u><?php echo $ssname ?></u></h1>
        <h3>Available Foods</h3>
        
    </div>
   </div>
   <div class="container">
   <div class="card-columns">

   <?php foreach($datas as $data){
            ?>
<div class="card" style="width: 18rem;">
  <img src="./img/<?php echo $data['food_img']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h2 class="card-title text-center"><?php echo $data['fname']?></h2>
  </div>
</div>

        <?php }  ?> 
        </div>

   </div>
   <script>var nav = document.querySelector('nav');
       nav.classList.add('bg-dark');

</script>
</body>
</html>

