<?php
include('../../vendor/autoload.php');
require_once('../../config.php');
global $PAGE, $COURSE, $USER, $OUTPUT, $remotedb, $CFG;

// Get the system context.
$systemcontext = get_system_context();

// Check basic permission.
require_capability('report/myreport:view', $systemcontext);

// Get the language string from language file.
$strtitle = get_string('pluginname', 'report_myreport');

// Set up page object
$PAGE->set_url(new moodle_url('/report/myreport/detail_student.php', ['studentid' => $studentid]));
$PAGE->set_context($systemcontext);
$PAGE->set_title($strtitle);
$PAGE->set_pagelayout('report');
$PAGE->set_heading($strtitle);

if(isset($_GET["studentid"])){
    $studentid = $_GET["studentid"];
}

$sql = "SELECT *
		FROM (mdlnr_course_completions mc, mdlnr_user mu, mdlnr_course md)
		WHERE mc.course = ? 
			AND mc.userid = mu.id 
			AND md.id = mc.course
			AND mu.id = '$studentid'";

$users = $DB->get_records_sql($sql, array('courseid' => 2));

$table = new html_table();
$name2 = 'Nama Mahasiswa';
$nrp2 = 'NRP';
$mk2 = 'Mata Kuliah';
$table->head = array($name2, $nrp2, $mk2);

foreach ($users as $u2) {
	$table->data[] = array($u2->firstname, $u2->username, $u2->fullname);
}

$table2 = new html_table();
$karakterikstik = 'Karekteristik';
$nilaikarakterikstik = 'Nilai';
$keterangan = 'Keterangan';
$keterangan_autentik = 'Lebih ditingkatkan lagi'; 
$table2->head = array($karakterikstik, $nilaikarakterikstik, $keterangan);
foreach ($users as $u2) {
	//Display  the table data.
	$table2->data[] = array(Aktif, B, Tingkatkan);
	$table2->data[] = array(Autentik, BC, $keterangan_autentik);
	$table2->data[] = array(Konstruktif, A, Pertahankan);
	$table2->data[] = array(Koperatif, A, Pertahankan);
	$table2->data[] = array(Intensional, C, Semangat);
}

$chart = new \core\chart_bar(); // Create a bar chart instance.
$series1 = new \core\chart_series('Nilai Meaningful Learning', [70, 65, 90, 85, 50]);
$chart->add_series($series1);
$chart->set_labels(['Aktif', 'Autentik', 'Konstruktif', 'Koperatif', 'Intensional']);

echo $OUTPUT->header();

if(!empty($table->data)) {
	echo html_writer::table($table);
}	

if(!empty($table2->data)) {
	echo html_writer::table($table2);
}

if (!empty($chart)) {
	echo $OUTPUT->render($chart);
}
echo $OUTPUT->footer();