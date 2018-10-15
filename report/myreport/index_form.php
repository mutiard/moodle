<?php

require_once('../../config.php');
require_once("$CFG->libdir/formslib.php");

class myreport_form extends moodleform {
	public function definition() {
		global $DB;
		$mform =& $this->_form;

		$options = array();
		$options[0] = get_string('choose');
		$options += $this->_customdata['courses'];
		$mform->addElement('select','course', get_string('course'), $options, 'align="center"');
		$mform->setType('course', PARAM_ALPHANUMEXT);
		$mform->addElement('submit', 'save', get_string('display'), 'align="right"');
	}

	public function validation($data, $files) {
		$errors = parent::validation($data, $files);
		if ($data['course'] == '0') {
			$errors['course'] = get_string('error_invalidcourse', 'report_myreport');
		}
		return $errors;
	}
}