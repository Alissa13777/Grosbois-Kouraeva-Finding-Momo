
    <?php
    include('connect.php');

    $requete = 'SELECT * FROM user ORDER BY temps ASC';
    $tab=[];
    if($result=mysqli_query($link,$requete)){
      while($ligne=mysqli_fetch_assoc($result)){
        $tab[]=$ligne;
      }
    }
    echo json_encode($tab);

     ?>
