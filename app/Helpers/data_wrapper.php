<?php

if (!function_exists('data_wrapper')) {
    function data_wrapper($data)
    {
    	return new \App\Support\DataWrapper($data);
    }
}
