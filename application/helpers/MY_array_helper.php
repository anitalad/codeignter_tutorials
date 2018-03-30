<?php

function custom_array_helper() {
	echo "I am in custome array helper";
}

//overwring element function of array_helper in MY_array_helper
function element(){
	echo "Overwritten array heper element function ";
}
?>