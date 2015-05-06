<?php

// array games

class greek {
	
	public function greeknumber() {
		$GreekNumbers = array('macron','mono', 
'di','tri','tetra','penta','hex','hept','oct','ennea','deca','hendeca','dodeca');
		$NumberId = rand(0,9);
	return $GreekNumbers[$NumberId];
	}


	public function greekwords() {
		$GreekWords = array('aion','ouranos','pantote','teras','amen','christos','diangello','kerusso', 'katangello','euangelizo','proeuangelizomai','apostolos','	anastasis','aitema','ekklesia','exousia','phobos','baptizo','deesis','pisteuo','makarios','episkopos');
		$GreekWordIds = rand(0,20);
		return $GreekWords[$GreekWordIds];
	}



}

$firstnumber = new greek();

echo $firstnumber->greeknumber()." ".$firstnumber->greekwords()." ".$firstnumber->greekwords();







