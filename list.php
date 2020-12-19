<!DOCTYPE html>
<html lang="en">
<body>

                        <h2>Order Details</h2>
                        

                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM orders";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table border=1>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Customer Name</th>";
                                        echo "<th>Item Name</th>";
                                        echo "<th>Quantity</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['customer_name'] . "</td>";
                                        echo "<td>" . $row['item_name'] . "</td>";
                                        echo "<td>" . $row['quantity'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                    <br/><br/>
                    <a href="orderform.html" >Create Order</a>
</body>
</html>