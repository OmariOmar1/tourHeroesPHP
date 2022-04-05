<?php
    $db = new PDO('mysql:host=localhost;dbname=tour_heroes', 'root', '');
    $search="omar";
    $sql = 'SELECT * FROM Heroes WHERE HeroFirstName =:name';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':name',$search,PDO::PARAM_STR);
    echo $sql.'<br><br>';
    $results = $stmt->execute();
    if ($results){
        $user = $stmt->fetch();
    }