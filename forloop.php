<?php 

// Date of birth 
// DD - MM - YYYY 

// DD 
echo '<select name="dd">';
echo dropDown(1, 31, 1, 5 );
echo '</select>';



// MM  
echo '<select name="mm">';
echo dropDown(1, 12, 1 );
echo '</select>';

// YYYY 
echo '<select name="yy">';
echo dropDown(1950, 2016, 1 );
echo '</select>';






























function dropDown($start = 1, $stop=31, $incriment=1, $selected = 0 ){
	$option = "\n\t".  '<option value="0">--Select--</option>' . "\n";
	
	for($i=$start; $i <= $stop; $i+=$incriment){		
		$option .=  "\t" . '<option';
		$option .= ($selected == $i) ? ' selected' : '';
		$option .= '>'. sprintf( '%02d', $i) . '</option>' . "\n";		
	}	
	return $option;
}












