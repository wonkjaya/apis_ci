<?php

function get_exclude(){
    if(isset($_GET['exclude'])){
        // exclude di pisah dengan tanda koma (,)
        $ex = explode(",",$_GET['exclude']);
        for($i=0;$i<count($ex);$i++){
            if(strlen($ex[$i])>0){
                $data[]=$ex[$i];
            }
        }
        return $data;
    }
}

//end of file