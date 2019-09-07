<?php
   include_once './header.php';
   include './navbar.php';
   include './searchBar.php';
   ?>
<div class="container-fluid row bodyContainer">
   <h2>Featured Homes</h2>
   <div class="container-fluid row bodyContainer">
      <?php
         $sql = "SELECT * FROM houses;";
         $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);
         
         if ($resultCheck > 0) {
             while ($row = mysqli_fetch_assoc($result)) {
                 echo "<div class=\"col-sm-3 card resultsCard \" style=\"width:400px\">
                 <img class=\"card-img-top resImg\" src=\"./img/".$row['imgSrc']."\" alt=\"Card image\" style=\"width:100%\">
                 <div class=\"card-body\">
                   <h4 class=\"card-title\">".$row['address']."</h4>
                   <h6>Price: $".$row['price']."</h6>
                   <div class=\"d-flex resultsInfo\">
                       <p class=\"card-text\">Beds: ".$row['bed']."</p>
                       <p class=\"card-text\">Baths: ".$row['bath']."</p> 
                       <p class=\"card-text\">Garage: ".$row['garage']."</p>
                       <p class=\"card-text\">Pool: ".$row['pool']."</p>
                   </div>
                   <div class=\"resultsLocation\">
                       <p>Daytona Beach</p>
                   </div>
                   <form method=\"POST\" action=\"homeView.php\">
                   <input type=\"checkbox\" name=\"homeId\" class=\"homeId\" value=\"".$row['id']."\" checked>
                   <button type=\"submit\" name=\"viewer\" class=\" btn btn-primary\" value=\" \" >View More</button>
                   </form>
                 </div>
               </div>";
             }
         }
         ?>
   </div>
</div>
</div>
<?php
   include './footer.php';   
   ?>