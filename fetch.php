<?php

sleep(1);

include("config.php") ;

if(isset($_POST['request'])){

    $request = $_POST['request'];

    $query = "SELECT * FROM posts WHERE p_title = '$request' ";

    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

?>

<table class="table">      
    <?php

    if($count){

    ?>
    <thead>
            <tr>
                <th> Sr No. </th>
                <th>Username</th>
                <th>Date</th>
                <th>Post Title</th>
                <th>Post Image<th>
            </tr>
    </thead>
    <?php 
    }else{
        echo "Sorry, No Records!!!";
    }
    ?>

    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['p_no']?></td>
            <td><?php echo $row['p_username']?></td>
            <td><?php echo $row['p_tmg']?></td>
            <td><?php echo $row['p_title']?></td>
            <td><img src="img/<?php echo $row['p_img']?>" class="img-responsive img-thumbnail" width="150"></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>

</table>
<?php } ?>