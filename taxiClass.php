<?php

class Car{
		
	function start(){
		header("Location:./taxi/engine.html");
	}

	function run(){
		header("Location:./taxi/run.html");
	}

	function stop(){
		header("Location:./taxi/stop.html");
	}
}

?>