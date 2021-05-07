
<?php
include('security.php');
        $query = "SELECT * FROM cart";
        $query_run = mysqli_query($connection, $query);
          if(mysqli_num_rows($query_run) > 0)        
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                      $pid=$row["id"];
        ?>
                <div class="modal-body">
                  <div class="row mb-2">
                    <div class="col-sm-3">
                    <?php echo '<img src="images/'.$row['img'].'" style="width: 100%;""  alt="image">'?>
                      <!-- <img src="user1.jpeg" alt="" style="width: 100%;"> -->
                    </div>
                    <div class="col-sm-9">
                      <div class="container mt-2">
                      <h4> <?php echo $row['pname'] ?></h4>
                      <div class="quantity mx-3">
                          <button id="plus"  class="btn minus-btn btn-outline-success px-3 py-1 disbled" type="button" name="button">+
                          </button>
                          <input  type="number" id="number" value="1">
                          <button id="minus" class=" btn minus-btn btn-outline-success px-3 py-1" type="button" name="button">-
                          </button>
                          
                          <select style="float: right; margin-top: 5px;">
                            <option>Select Size</option>
                            <option>XXL</option>
                            <option>XL</option>
                            <option>Large</option>
                            <option>Medium</option>
                            <option>Small</option>
                          </select>
                        </div>
                        <div class="quantity mx-3">
                        <p><strike class="mx-3"><?php echo $row['org_price'] ?> </strike>
                          <input type="text" style="width:80px;"name="quant"id="price"  value="999">
                        </p>
                    
                      </div>
                    </div>
                  </div>
                  <hr>
                  <?php
              } 
              }
              else {
                echo "No Record Found";
              }
            
              ?>
                  <div class="container">
                    <p class="mb-0">Total Amount <span
                        style="float: right; background-color: black; border-radius: 8px; padding: 0px 8px;"> <a
                          style="color: white; text-decoration: none;" href="#">Go To Cart</a></span></p>
                  </div>
                  <div class="quantity mx-3">
                    <p><input type="text" style="width:80px;"name="quant"id="total"  value="0"><span
                        style="float: right; background-color: black; border-radius: 8px; padding: 0px 8px; margin-top: 5px;">
                        <a style="color: white; text-decoration: none;" href="#">Chech Out</a></span></p>
                  </div>
                </div>
                <hr>
                <div id="wish"></div>
                              
               
  
            <script src="jquery.js"></script>
            <script>
function increment() {
      document.getElementById('demoInput').stepUp();
   }
   function decrement() {
      document.getElementById('demoInput').stepDown();

// Get the modal
var modal = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function () {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
$(document).ready(function(){
   displaydata();
   function displaydata(){
       $.ajax({
      url:'action.php',
      type:'post',
      success:function(responsedata){
        $('#response').html(responsedata);
      }

       });
   }
   });
     


</script>