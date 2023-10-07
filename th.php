 <?php
   include 'header.php';
if(isset($_POST["ans"]))
{
    
    $ssql ="select upad from Kata";
    $res=$conn->query($ssql);
    $to =$res->num_rows;
    
    $jama = $_POST["jama"];
    
    $sql = "UPDATE `Kata` SET `Upad` = '$jama' WHERE `Kata`.`k_id` = $to ";
    $res=$conn->query($sql);
    
}
?>
 
  <form action="" method="post">
  <div class="container mt-5">
    <div class="form-group">
      <label for="inputEmail4">jama</label>
          <?php
          $sql="select SUM(K_money), SUM(upad) from Kata";
          $res=$conn->query($sql);
        while($row = mysqli_fetch_array($res)){

    //echo " Total cost: ". $row['SUM(K_money)'];
            $main = $row['SUM(K_money)'];
            $temp = $row['SUM(upad)'];
                   
                $total = $main - $temp;
         
        

      echo'<input type="text" class="form-control text-danger" value=" '.$total.' " readonly>';
            
            }
        
?>
    </div>
    <div class="form-group">
      <label for="inputPassword4">upad</label>
      <input type="text" name="jama" class="form-control text-success" required id="inputPassword4" placeholder="enter you advance">
    </div>
          <br>
    
    <button type="submit" name="ans" class="btn btn-primary">Submit</button>
</form> 
          
    <br>
    <br>
    
    
    <div class="table-responsive-xl">

    <table class="table table-striped table-dark">
  <thead class="bg-danger table-bordered ">
    <tr>
      <th scope="col">date</th>
      <th scope="col">num of kata</th>
      <th scope="col">items</th>
      <th scope="col">money</th>
    </tr>
  </thead>
    <?php
     
    $sql="select * from Kata ";
    $res=$conn->query($sql);
    while($row = $res ->fetch_assoc())
    {
        $temp = $row["K_money"];
        $_SESSION["money"] = $temp ;
        echo'<tbody>
    <tr>
      <th>'.$row["Date"].'</th>
      <td>'.$row["K_contity"].'</td>
      <td>'.$row["K_items"].'</td>
      <td>'.$row["K_money"].'</td>
    </tr>
  </tbody>';
        
    }
          ?>
</table>
    </div>
    
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
