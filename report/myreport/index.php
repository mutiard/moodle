<?php
include('../../vendor/autoload.php');
require_once('../../config.php');
global $PAGE, $COURSE, $USER, $OUTPUT, $remotedb, $CFG;
require($CFG->dirroot . '/report/myreport/index_form.php');
use NlpTools\Tokenizers\WhitespaceAndPunctuationTokenizer;
use NlpTools\Similarity\CosineSimilarity;

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
		FROM (mdlnr_course)
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
			FROM (mdlnr_course_completions mc, mdlnr_user mu, mdlnr_course md)
			WHERE mc.course = ? 
				AND mc.userid = mu.id 
				AND md.id = mc.course
				AND mu.id = 5";
	if ($users = $DB->get_records_sql($sql, $params)) {
		//Table Set Up
		$table = new html_table();
		$name2 = 'Nama Mahasiswa';
		$nrp2 = 'NRP';
		$mk2 = 'Mata Kuliah';
		$table->head = array($name2, $nrp2, $mk2);
		foreach ($users as $u2) {
			//Display  the table data.
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
		
	}

		
}
echo $OUTPUT->header();
echo $OUTPUT->heading($strtitle);

// echo "Hello World!!!";
$mform->display();

// $sql = "SELECT intro from mdlnr_forum where course = 2";
// $intro = $DB->get_records_sql($sql);
// foreach($intro as $listintro){
// 	print_r($listintro->intro);
// }

// TES TOKEN & COSINE SIMILARITY
$text1 = 'Menurut kalian, hal-hal apa saja yang mendasari pentingnya pembuatan diagram sequence? Lalu apa saja keterkaitan antara diagram sequence dan diagram class? Jelaskan secara singkat dan jelas!';
$text2 = 'Diagram sequence menjelaskan bagaimana alur use case atau kasus aplikasi itu beroperasi, ini akan mempermudah developer untuk membangun aplikasi tersebut. Dalam diagram sequence, terdapat banyak kelas yang terhubung satu sama lain yang menentukan alur use case, kelas-kelas tersebut diperoleh dari diagram kelas. Selain itu, semua message atau input dari pengguna akan langsung menuju ke kelas bertipe boundary.';
$tok = new WhitespaceAndPunctuationTokenizer();
$cos = new CosineSimilarity();
$setA = $tok->tokenize($text1);
$setB = $tok->tokenize($text2);

printf('Cosine: %.3f', $cos->similarity($setA, $setB));

// Output the table if it contain the data
if(!empty($table->data)) {
	echo html_writer::table($table);
}

if(!empty($table2->data)) {
	echo html_writer::table($table2);
}

echo $OUTPUT->render($chart);

echo $OUTPUT->footer();