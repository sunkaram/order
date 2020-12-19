<?php
require_once "config.php";

  // create short variable names
  $c_name = $_POST['c_name'];
  $i_name = $_POST['i_name'];
  $qty = $_POST['qty'];

   // Prepare an insert statement
        $sql = "INSERT INTO orders (customer_name, item_name, quantity) VALUES ('$c_name', '$i_name', '$qty')";
        $mysqli_result = mysqli_query($link, $sql); 
        if($mysqli_result){
                echo "Order submitted successfully";
        } else {
            echo "Something went wrong. Please try again later.";
        }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Misc Store - Order Results</title>
  </head>
  <body>
    <h1>Misc Store</h1>
    <h2>Order Results</h2> 
    <?php
    echo "<p>Order processed at ";
    echo date('H:i, jS F Y');
    echo "</p>";

    echo '<p>Your order is as follows: </p>';

    echo 'Customer Name : '. htmlspecialchars($c_name).'<br />';
    echo 'Item Name : '.htmlspecialchars($i_name).'<br />';
    echo 'Qty : '.htmlspecialchars($qty).'<br />';
    ?> 
     <br/><br/>
     <a href="orderform.html" >Create Order</a>
     <br/><br/>
                        <a href="list.php" >List all orders</a>
  </body>
</html>
