
<?php include_once('head.php');  ?>
<?php if(!isset($_SESSION)){if($_SESSION['user_status']==2){header("Location: admin/index.php"); exit();}} ?>
<?php include_once('header.php'); ?>

<main>
    <?php include 'components/mv.php'; ?>
    <?php include 'components/popular.php'; ?> 
    <?php include 'components/buy_orders.php'; ?> 
    <?php include 'components/newly_listed.php'; ?> 



     
</main>

<?php include_once('footer.php'); ?>

</body>
</html>