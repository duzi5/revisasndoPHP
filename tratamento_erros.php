<?php

try{
    echo '<h3> **** try *** </h3>';
    $sql='select * from clintes';
    mysqli_query($sql);
}catch(Error $e){
    echo '<h3 style="color:red">'. $e .'***  </h3>'; 
}finally{
    echo '<h3> **** finally *** </h3>';
    echo '<h3> **** finally *** </h3>';
    echo '<h3> **** finally *** </h3>';
};