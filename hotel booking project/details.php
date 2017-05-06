<?php
//include('header.php'); 
  
	//include_once 'dbconnect.php';
    extract($_POST);
    if(isset($_GET['hotelid']))
    { $id=$_GET['hotelid'];
      $db=mysql_query("select * from rooms where hotelid='$id'");
    //  $db1=mysql_fetch_array($db);
    
    }
    
?>
<table align="center" width="50%" border="0">
   <tr> <th> Room Type </th>
        <th> Features </th>
        <th> Price </th>
   </tr>
   <?php while($db1 = mysql_fetch_array($db))
   
   {
   ?>
   <tr> <td> <?php echo $db1['roomtype'] ?> </td>
        <td>
                <ul> <?php $features = explode("/",$db1['features']);
                foreach($features as $f){
                  ?>
                   <li><?php echo $f; ?></li><br><?php }?>
                </ul> 
        </td>
        <td> <?php echo $db1['price'] ?> </td> 
        <td> <form action="payment.php">
        <input type="hidden" name="hotelid" value="<?php echo $_REQUEST["hotelid"]?>">
        <input type="hidden" name="roomtype" value="<?php echo $db1["roomtype"]?>">
        <input type="hidden" name="bookdate" value="<?php echo $_REQUEST['bookdate']?>">
        <input type="submit" class="myButton" value="Select Room" >
        
        </form>
    </td>
   </tr>
   <?php } 
  ?>
  </table>
<?php  include('footer.php') ; ?>