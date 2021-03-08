<?php 
    require '../../db-conection/mercado-mercato.php';

    $access_token = $_GET['access_token'];
    $token_type = $_GET['token_type'];
    $expires_in = $_GET['expires_in'];
    // $refresh_token = $_GET['refresh_token'];

    echo $access_token;
    echo '<hr>';
    echo $token_type;
    echo '<hr>';
    echo $expires_in;
    // echo $refresh_token;

    $timezone = new DateTimeZone('Europe/Rome');
    $now = new DateTime('now', $timezone);
    $dateTime = $now->format('Y-m-d H:i:s');

    try {
        $statement = $conn->prepare("INSERT INTO `mercadomercato`.`tagplus_access_token` (`access_token`, `expires_in`, `refresh_token`, `token_type`, `date_create`) VALUES ('$access_token', '$token_type', '$expires_in', 'humm temos que resolver', '$dateTime')");
        $statement->execute();
    } catch(PDOException $e){
        echo "Erro: " . $e->getMessage() . "<br>";
        echo "Erro: " . $e->getCode() . "<br>";
    }
  
    $conn = null;
?>