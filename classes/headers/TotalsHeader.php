<?php
class TotalsHeader extends HeaderBase {
	static $validation = array(
		'value'=>array(
			'required'=>true,
			'type'=>'string'
		)
	);
	
	public static function init($params, &$report) {
		$report->options['Totals'] = $params['value'];
	}
	
	public static function parseShortcut($value) {
		return array(
			'value'=>$value
		);
	}
}
