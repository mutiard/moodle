<?php
include('../../vendor/autoload.php');
require_once('../../config.php');

global $PAGE, $COURSE, $USER, $OUTPUT, $remotedb, $CFG, $DB;

// Get the system context.
$systemcontext = get_system_context();

// Check basic permission.
require_capability('report/myreport:view', $systemcontext);

// Get the language string from language file.
$strtitle = get_string('pluginname', 'report_myreport');

// Set up page object
$PAGE->set_url(new moodle_url('/report/myreport/aktif.php', ['studentid' => $studentid], ['courseid' => $courseid]));
$PAGE->set_context($systemcontext);
$PAGE->set_title($strtitle);
$PAGE->set_pagelayout('report');
$PAGE->set_heading($strtitle);

if(isset($_GET["studentid"])){
    $studentid = $_GET["studentid"];
}

if(isset($_GET["courseid"])){
    $courseid = $_GET["courseid"];
}

//insert to mdlnr_frekuensi
// $records = new stdClass();
// $records->id_aktivitas_aksi     = '1';
// $records->id_course_completions = '1';
// $records->frekuensi = '1';

// $lastinsertid = $DB->insert_record('frekuensi', $records);
//end of insert to mdlnr_frekuensi

//tabel biodata mahasiswa
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
//end of tabel biodata mahasiswa


$sql = "SELECT * FROM mdlnr_aktivitas_aksi
		INNER JOIN mdlnr_aksi ON mdlnr_aksi.id = mdlnr_aktivitas_aksi.id_aksi
		INNER JOIN mdlnr_aktivitas ON mdlnr_aktivitas.id = mdlnr_aktivitas_aksi.id_aktivitas
		ORDER BY mdlnr_aktivitas_aksi.id";
$aktivitas_aksi = $DB->get_records_sql($sql);

$table2 = new html_table();
$col1 = 'Aktivitas Moodle';
$col2 = 'Tindakan';
$col3 = 'F(t)';
$table2->head = array($col1, $col2, $col3);

foreach ($aktivitas_aksi as $value) {
	$table_logstore = 'logstore_standard_log';
	$select = " component = 'mod_assign' AND crud = 'r' AND courseid = '$courseid' AND userid = '$studentid'";
	$result = $DB->get_records_select($table_logstore, $select);
	$count_result = count($result);
	$table2->data[] = array($value->nama_aktivitas, $value->nama_aksi, $count_result);
}

// $chart = new \core\chart_bar(); // Create a bar chart instance.
// $series1 = new \core\chart_series('Nilai Meaningful Learning', [70, 65, 90, 85, 50]);
// $chart->add_series($series1);
// $chart->set_labels(['Aktif', 'Autentik', 'Konstruktif', 'Koperatif', 'Intensional']);

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