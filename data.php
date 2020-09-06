<?php

class RestaurantData {
    
    private $restaurantList;

    function __construct(array $restaurantList) {
        if (sizeof($restaurantList)>0) {
            $this->restaurantList = $restaurantList;
        } else {
            throw new Exception("No menu record available");
        }
    }

    public function getMenuName() {
        $menuNameList = [];

        foreach($this->restaurantList as $restaurant) {
            $restaurantNameList[] = array(
                "name"=>$restaurant['name']
            );
        }

        return json_encode($restaurantNameList);
    }

    public function getMenuDetails($name){
        $response=["Invalid choice"];
        if($name){
            foreach($this->restaurantList as $restaurant)
            {
                
                if($restaurant['name'] == $name)
                {
                    
                        $response=$restaurant;
                        break;
                }
            }
        }
        return json_encode($response);
    }

    
}
?>