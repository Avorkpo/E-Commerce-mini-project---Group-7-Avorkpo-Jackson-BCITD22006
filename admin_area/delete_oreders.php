<?php
if(isset($_GET['delete_orders'])){
    $delete_order = $_GET['delete_orders'];
    $delete_query = "Delete from `user_orders` where order_id = $delete_order";
    $result = mysqli_query($con, $delete_query);
    if($result){
        echo"<script>alert('Order deleted successfully')</script>";
        echo"<script>window.open('./index.php?list_orders','_self')</script>";
     
    }
}
?>