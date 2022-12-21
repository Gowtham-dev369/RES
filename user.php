<?php
include('./database/ses.php') ;
require('./pages/header.php');
?>
<?php
require('./database/db_connect.php');
?>
<h1 class="py-5"><?php echo "Your Logged In"?></h1>

<a class="btn btn-primary" href="./database/logout.php">Logout</a>




<script>var nav = document.querySelector('nav');
       nav.classList.add('bg-dark');
</script>