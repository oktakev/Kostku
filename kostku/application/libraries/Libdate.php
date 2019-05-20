<?php 

class Libdate{
	function convert($date){
			$converteddate=date("j F Y", strtotime($date));
			return $converteddate;
		}
}
?>


<?//php echo $count['ttl'] ?>