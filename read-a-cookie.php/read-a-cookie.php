<?php

if(isset($_COOKIE['fruit'])){
    echo $_COOKIE['fruit'];
} else {
    echo "The cookie has not been set";
}
