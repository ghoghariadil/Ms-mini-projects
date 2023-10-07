<?php
   include 'header.php';
?>
<?php

if(!isset($_POST["btn"]))
{
    ?>
    <div class="container mt-5">
  <form action="" method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text" name="date" class="form-control" id="exampleInputEmail1" value="<?php echo date('d/m/y'); ?> ">
   </div>
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text" name="price" class="form-control text-success" id="exampleInputEmail1" value="100">
   </div>
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text" name="kata" class="form-control text-success" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number of kata">
   </div>
    <br>
        
    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>
  </div>
    <?php
}

?>
<?php
   if(isset($_POST["btn"]))
   {
        $a=$_POST["kata"];
        $b=$_POST["date"];
        echo'<div class="container mt-5">
  <form action="" method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text" name="date1" class="form-control" id="exampleInputEmail1" value=" '.$b.'">
   </div>
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text" name="price1" class="form-control text-success" id="exampleInputEmail1" value="100">
   </div>
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text" name="kata1" class="form-control text-success" id="exampleInputEmail1" aria-describedby="emailHelp" value=" '. $a .' ">
   </div>
    <br>';
        
        for($tmp = 1;$a>0;$tmp)
        {
            
          $tmp++;
           echo'<select class="form-control form-control" name="select'.$tmp.'">
      <option>please select</option>
      <option>મોળી કળી</option>
      <option>તીખી કળી</option>
      <option>મોળી ફાફડી</option>
      <option>તીખી ફાફડી</option>
      <option>જીણા ગાઠિયા</option>
      <option>જાડા ગાઠિયા</option>
      <option>સેવ</option>
    </select>
            
    
    <br>';
       $a--; 
       
        
        }
    
    echo'<button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>';

   }
        
        ?>
  
  
  
  
  
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php


 
if(isset($_POST["save"]))
{
      $date=$_POST["date1"];
    $nok=$_POST["kata1"];
    $price=$_POST["price1"];
     $to = $nok * $price;
for($q = 2;$nok>0;$q++)
    {
      $tp = $_POST["select".$q.""];
        $tot .= $tp;
        echo"$tot";
        $nok--;
    }

$nok=$_POST["kata1"];
     $gr = $_SESSION["tot"];
    $sql="insert into Kata values(NULL,'$nok','$tot','$date','$to','0')";
    $res=$conn->query($sql);
}