<?php
header("Content-type: application/json");
require 'data.php';


$req = $_GET['req'] ?? null;

if ($req) {
    $jsonData = file_get_contents("restaurant.json");
    $menuList = json_decode($jsonData, true)['menu_items'];
    try {
        $restaurantData = new RestaurantData($menuList);
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}

switch ($req) {
    case 'menu_name_list':
        echo $restaurantData->getMenuName();
        break;
    
    case 'menuName':
        $name=$_GET['name'] ?? null;
        echo $restaurantData->getMenuDetails($name);
        break;

    default:
        echo json_encode(["In-valid request"]);
        break;
}

?>