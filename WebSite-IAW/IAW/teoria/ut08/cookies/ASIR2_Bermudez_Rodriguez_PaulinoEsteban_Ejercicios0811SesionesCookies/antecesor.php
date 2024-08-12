<?php
	function antecesor($nummero){
		for ($i=1,$acumulado=0;$i<=$nummero;$i++ )
		$acumulado=$acumulado+$i;
		return $acumulado;
	}
?>