<?php
    include_once './dbconnect.php';
    include_once './header.php';
    include './navbar.php';
?>

<div class="container">
    <a href="`"></a>
</div>
<?php

    if(isset($_POST['viewer'])){
        $id = mysqli_real_escape_string($conn, $_POST['homeId']);
        settype($id, 'integer');
        $sql = "SELECT * FROM houses WHERE id = $id;";

        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class=\"backgroundClr container\">
                <div class=\"row\">
                    <div class=\"col-bg-6\">
                        <img src=\"./Img/".$row['imgSrc']."\" alt=\"\" class=\"img-thumbnail viewImg\">
                    </div>
                    <div class=\"viewInfo col-md-6 \">
                        <h3>Addres: ".$row['address']."</h3>
                        <h5>Price: $".$row['price']."</h5>
                        <h5>Beds: ".$row['bed']."</h5>
                        <h5>Baths: ".$row['bath']."</h5>
                        <h5>Garage: ".$row['garage']."</h5>
                        <h5>Pool: ".$row['pool']."</h5>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-bg-12\">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    </div>
                </div>
                
            </div>";
            }
        }
    }

?>

    



<?php

    include './footer.php';

?>