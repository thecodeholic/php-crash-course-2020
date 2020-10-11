<?php

// Explain what is cookie
// Cookie is a piece of data saved in browser and sent to server and back
// on every request/response

// How to set cookies
setcookie('name', 'Zura', time() + 60);

// How to update cookie
setcookie('name', 'Bob', time() + 2 * 60);

// How to delete cookie
setcookie('name', 'Bob', time() - 1);

