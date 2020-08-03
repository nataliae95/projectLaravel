<?php


function setAction($routeName){
	return request()->is($routeName) ? 'active' : '';
}

