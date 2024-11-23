<?php
require_once "init.php";


if(isset($_POST['country_name'])){
    $sv = $adminCl->createNewCountry($_POST['country_name'] ?? "" , $_POST['country_code']);
    if($sv){
        ?>
        <script>
            alert('Country Created');
            window.location.href = 'countries.php';
        </script>
        <?php
    }
}

$title = "List SGA";
$pageFile = "country.php";
require "components/dashboard_template.php";