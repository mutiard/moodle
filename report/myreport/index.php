<?php
include('../../vendor/autoload.php');
require_once('../../config.php');
global $PAGE, $COURSE, $USER, $OUTPUT, $remotedb, $CFG;
require($CFG->dirroot . '/report/myreport/index_form.php');
use NlpTools\Tokenizers\WhitespaceAndPunctuationTokenizer;

// Get the system context.
$systemcontext = get_system_context();
$url = new moodle_url('/report/myreport/index.php');

// Check basic permission.
require_capability('report/myreport:view', $systemcontext);

// Get the language string from language file.
$strtitle = get_string('pluginname', 'report_myreport');

// Set up page object
$PAGE->set_url($url);
$PAGE->set_context($systemcontext);
$PAGE->set_title($strtitle);
$PAGE->set_pagelayout('report');
$PAGE->set_heading($strtitle);

// Get the courses.
$sql = "SELECT id, fullname
		FROM (mdl_course)
		WHERE visible = :visible
		AND id != :siteid
		ORDER BY fullname";
$courses = $DB->get_records_sql_menu($sql, array('visible' => 1, 'siteid' => SITEID));

// Load up the form
$mform = new myreport_form('', array('courses' => $courses));

// Had any data been submitted?
if($data = $mform->get_data()) {
	// Process the data:
	// Select the course details corresponding to the rewuested course.
	$params = array($_POST['course']);
	$sql = "SELECT *
			FROM (mdl_course)
			WHERE id = ?";
	if ($users = $DB->get_records_sql($sql, $params)) {
		//Table Set Up
		$table = new html_table();
		
		$table->head = array($strname);
		foreach ($users as $u) {
			//Display  the table data.
			$table->data[] = array($u->fullname);
		}
	}
}
echo $OUTPUT->header();
echo $OUTPUT->heading($strtitle);

// echo "Hello World!!!";
$mform->display();
// TES TOKEN
$text = "Please allow me";
$tok = new WhitespaceAndPunctuationTokenizer();
print_r($tok->tokenize($text));

// Output the table if it contain the data
if(!empty($table->data)) {
	echo html_writer::table($table);
}



echo $OUTPUT->footer();