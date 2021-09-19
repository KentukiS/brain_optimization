<?php 
$flowers = array( 3,
                  array( "Название" => "розы", 
                         "Цена" => 100,
                         "Количество" => 15 
                       ),
                  array( "Название" => "тюльпаны", 
                         "Цена" => 60,
                         "Количество" => 25,
                       ),
                  array( "Название" => "орхидеи", 
                         "Цена" => 180,
                         "Количество" =>  
                           array( "Название" => "орхидеи2", 
                             "Цена" => 1802,
                             "Количество" => 
                                array( "Название" => "орхидеи3", 
                                 "Цена" => 1803,
                                 "Количество" => 73
                                ) 
                            ) 
                       )
                );
echo "<pre>";
function arrayView ($array){
  foreach($array as $key => $value){
      if(is_array($value)){
        arrayView($value);
      } else {
        var_dump($value) ;
        // echo "</br>"."2g2";
      }
    }
}

// var_dump(arrayView($flowers));
arrayView ($flowers );
?>