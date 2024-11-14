<?php

for($i = 0; $i < 10; $i = $i++){
    echo $i;
}
//ejemplo
for($i = 0; $i < 10; $i = $i++){
    if($i % 2 == 0){
        break; //se podria colocar continue para que pase al siguiente numero
    }
}//13579