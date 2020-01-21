<?php
	function setJsVariable($variableName, $data) : void
	{
		echo  'var ' . $variableName . ' = ' . json_encode($data), ";\n";
	}
	