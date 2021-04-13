<?php

    ob_start();
    session_start();

    require __DIR__ . "/vendor/autoload.php";

    if(empty($_SESSION["userLogin"])){
        echo "<h1>Guest user</h1>" ;

        /* Auth google */
        $google = new \League\OAuth2\Client\Provider\Google(GOOGLE);
        $authUrl = $google->getAuthorizationUrl();
        $error = filter_input( INPUT_GET, "error", FILTER_SANITIZE_STRING );
        $code = filter_input( INPUT_GET, "code", FILTER_SANITIZE_STRING );

        
        if($error){
            echo '<h3>You have to sigin</h3>';
        }
        
        if($code){
            $token = $google->getAccessToken(  "authorization_code" , [
                "code" => $code
                ]);
                
                $_SESSION["userLogin"] = serialize($google->getResourceOwner($token));
                header( "Location: " . GOOGLE["redirectUri"] );
                exit();
            }
            
        echo "<a title='Logar com Google' href='{$authUrl}' target='_blank'>Google Login</a>";

    } else {
        echo "<h1>User</h1>";

        $user = unserialize($_SESSION['userLogin']);
        
        echo "<img width='120' src='{$user->getAvatar()}' alt='{$user->getName()}' title='{$user->getName()}'/>";
        echo "<h3>Ben vindo {$user->getFirstName()}</h3>"; 
        echo "<p>Ben vindo {$user->getEmail()}</p>"; 

        echo "<pre>";
        print_r($user->toArray());
        echo "</pre>";
        /* 
            $user->getAvatar();
            $user->getEmail();
            $user->getName();
            $user->getLastName();
            $user->getFirstName();
            $user->getId();
            $user->getHostedDomain();
            $user->getLocale();
            $user->toArray();
        */

        echo "<a title='Logout' href='?logout=true'>Logout</a>";
        $logout = filter_input(INPUT_GET, "logout", FILTER_VALIDATE_BOOLEAN);
        if ($logout == 1) {
            unset($_SESSION['userLogin']);
            header( "Location: " . GOOGLE["redirectUri"] );
        }
    }
    ob_end_flush();    
?>