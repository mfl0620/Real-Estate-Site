<?php
    include_once './header.php';
    include './navbar.php';
    include './searchBar.php';
?>
<div class="bodyContainer">
<h1>Search Results</h1>
</div>


<div class="container-fluid bodyContainer row">
    
    
<?php
            if (isset($_POST['search'])) {
                $bedrooms = mysqli_real_escape_string($conn, $_POST['bedrooms']);
                $bathrooms = mysqli_real_escape_string($conn, $_POST['bathrooms']);
                $priceHigh = mysqli_real_escape_string($conn, $_POST['priceHigh']);

                settype($priceHigh, "integer");
                settype($bedrooms, "integer");
                settype($bathrooms, "integer");

                $priceOp = ' != ';
                $bedOp = ' != ';
                $bathOp = ' != ';

                if(!empty($priceHigh)){
                    $priceOp = ' <= ';
                }

                if(!empty($bedrooms)){
                    $bedOp = ' = ';
                }

                if(!empty($bathrooms)){
                    $bathOp = ' = ';
                }
                
                $sql = "SELECT * FROM houses WHERE id != 0 AND price $priceOp $priceHigh AND bed $bedOp $bedrooms AND bath $bathOp $bathrooms;";


                 $result = mysqli_query($conn, $sql);
                    
                //Check for results
                $queryResults = mysqli_num_rows($result);
                echo "<div class=\"container-fluid\">
                <h4>There are ".$queryResults." results!</h4>
                </div>";
                
                
                
                
               
                if ($queryResults > 0) {
                    while($row = mysqli_fetch_assoc($result)){
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
                }else{
                    echo "no results";
                }   
            }
        ?>
    </div>

    <?php
  include './footer.php';   
?>