<?php

require_once('../../config.php');
require_once("$CFG->libdir/formslib.php");

class students_form extends moodleform {
	public function definition() {
		global $DB;
		$mform =& $this->_form;

		$options = array();
		$options[0] = get_string('choose');
		$options += $this->_customdata['courses'];
		$mform->addElement('select','students', get_string('students'), $options, 'align="center"');
		$mform->setType('students', PARAM_ALPHANUMEXT);
		$mform->addElement('submit', 'save', get_string('display'), 'align="right"');
	}

	public function validation($data, $files) {
		$errors = parent::validation($data, $files);
		if ($data['students'] == '0') {
			$errors['students'] = get_string('error_invalidstudent', 'report_myreport');
		}
		return $errors;
	}
}