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
$PAGE->set_url(new moodle_url('/report/myreport/list_student.php', ['courseid' => $courseid]));
$PAGE->set_context($systemcontext);
$PAGE->set_title($strtitle);
$PAGE->set_pagelayout('report');
$PAGE->set_heading($strtitle);

if(isset($_GET["courseid"])){
    $courseid = $_GET["courseid"];
}

$sql = "SELECT mu.id, mu.username, mu.firstname
		FROM (mdlnr_course_completions mc, mdlnr_user mu, mdlnr_course md) 
		WHERE mc.course = '$courseid'
			AND mc.userid = mu.id 
			AND md.id = mc.course";
$courses = $DB->get_records_sql($sql);

$newtable = new html_table();
$col1 = 'No';
$col2 = 'Fullname';
$col3 = 'Aktif';
$col4 = 'Autentik';
$col5 = 'Konstruktif';
$col6 = 'Koperatif';
$col7 = 'Intensional';
$col8 = 'Total';
$key = '0';
$newtable->head = array($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8);
foreach ($courses as $value) {
	$link = '/report/myreport/detail_student.php?studentid='.$value->id.'&courseid='.$courseid;
	$link_aktif = '/report/myreport/aktif.php?studentid='.$value->id.'&courseid='.$courseid;
	$nilai_aktif = 'A';
	$nilai_autentik = 'A';
	$nilai_konstruktif = 'AB';
	$nilai_koperatif = 'B';
	$nilai_intensional = 'B';
	$total = '98.2 %';
	$newtable->data[] = array($key+1, $value->firstname, '<a href="'.$link_aktif.'">'.$nilai_aktif.'</a>', $value->id, $nilai_konstruktif, $nilai_koperatif, $nilai_intensional, $total);
	$key++;
}
// $newtable->data[] = array($total, $empty, $total_aktif, $total_autentik, $total_konstruktif, $total_koperatif, $total_intensional);

echo $OUTPUT->header();
$PAGE->set_heading($strtitle);

if(!empty($newtable->data)) {
	echo html_writer::table($newtable);
}	
 
echo $OUTPUT->footer();