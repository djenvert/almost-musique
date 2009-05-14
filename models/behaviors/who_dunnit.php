<?php
/**
 * track database row's creator
  * inspired by http://www.ad7six.com/MiBlog/TrackWhoMakesDBChanges
 *
 * @package default
 * @author Guillaume Sautereau
 **/
class WhoDunnitBehavior extends ModelBehavior {
	 function setup(&$model, $config = array()) {
		 $this->settings[$model->name] = am (array('enabled' => true),$config);
		}
	 function enableWhoDunnit(&$model, $enable = null) {
		 if ($enable !== null) {
			 $this->settings[$model->name]['enabled'] = $enable;
			 }
		return $this->settings[$model->name]['enabled'];
	}
	
	function beforeSave(&$model) {
		 extract ($this->settings[$model->name]);
		 if (!$enabled) {
			return true;
			 }
		if (isset($_SESSION['Auth'])) {
			$model->data[$model->name]['user_id'] = $_SESSION['Auth']['User']['id'];
		}
		return true;
		}
	}
?>