<?php
	function setJsVariable($variableName, $data) : String
	{
		return'<script type="text/javascript">
			 var ' . $variableName . ' = ' . json_encode($data), ';\n
		</script>';
	}
	