<?php
function num_format($n, $precision = 1) {
	if ($n < 900) {
		$n_format = number_format($n);
	} elseif ($n < 900000) {
		$n_format = number_format($n / 1000). 'K';
	} elseif ($n < 900000000) {
		$n_format = number_format($n / 1000000, $precision). 'M';
	} elseif ($n < 900000000000) {
		$n_format = number_format($n / 1000000000, $precision). 'B';
	} else {
		$n_format = number_format($n / 1000000000000, $precision). 'T';
	}
	return $n_format;
}
?>
