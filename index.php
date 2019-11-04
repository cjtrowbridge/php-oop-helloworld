<?php

$OOPHello = new OOPHello('Hello world');

class OOPHello{
	function __construct($Message){
		die($Message."\n");
	}
}
