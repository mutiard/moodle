<?php

function xmldb_myreport_upgrade($oldversion) {
    global $DB;
    $dbman = $DB->get_manager();

    $result = TRUE;

    if ($result && $oldversion < 2017051501) {
        if ($oldversion < 2017051501) {

        // Define table aktivitas to be created.
            $table = new xmldb_table('aktivitas');

        // Adding fields to table aktivitas.
            $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
            $table->add_field('nama_aktivitas', XMLDB_TYPE_TEXT, null, null, null, null, null);

        // Adding keys to table aktivitas.
            $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for aktivitas.
            if (!$dbman->table_exists($table)) {
                $dbman->create_table($table);
            }

         // Define table aksi to be created.
            $table1 = new xmldb_table('aksi');

         // Adding fields to table aksi.
            $table1->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
            $table1->add_field('nama_aksi', XMLDB_TYPE_TEXT, null, null, null, null, null);

         // Adding keys to table aksi.
            $table1->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

         // Conditionally launch create table for aksi.
            if (!$dbman->table_exists($table1)) {
             $dbman->create_table($table1);
         }

         // Define table aktivitas_aksi to be created.
         $table2 = new xmldb_table('aktivitas_aksi');

        // Adding fields to table aktivitas_aksi.
         $table2->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
         $table2->add_field('id_aksi', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
         $table2->add_field('id_aktivitas', XMLDB_TYPE_INTEGER, '10', null, null, null, null);

        // Adding keys to table aktivitas_aksi.
         $table2->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));
         $table2->add_key('id_aksi', XMLDB_KEY_FOREIGN, array('id_aksi'), 'aksi', array('id'));
         $table2->add_key('id_aktivitas', XMLDB_KEY_FOREIGN, array('id_aktivitas'), 'aktivitas', array('id'));

        // Conditionally launch create table for aktivitas_aksi.
         if (!$dbman->table_exists($table2)) {
            $dbman->create_table($table2);
        }

        // Define table aspek to be created.
        $table3 = new xmldb_table('aspek');

        // Adding fields to table aspek.
        $table3->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table3->add_field('nama_aspek', XMLDB_TYPE_TEXT, null, null, null, null, null);

        // Adding keys to table aspek.
        $table3->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for aspek.
        if (!$dbman->table_exists($table3)) {
            $dbman->create_table($table3);
        }

        // Define table bobot to be created.
        $table4 = new xmldb_table('bobot');

        // Adding fields to table bobot.
        $table4->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table4->add_field('id_aktivitas_aksi', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table4->add_field('id_aspek', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table4->add_field('bobot', XMLDB_TYPE_NUMBER, '6, 5', null, null, null, null);

        // Adding keys to table bobot.
        $table4->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));
        $table4->add_key('id_aktivitas_aksi', XMLDB_KEY_FOREIGN, array('id_aktivitas_aksi'), 'aktivitas_aksi', array('id'));
        $table4->add_key('id_aspek', XMLDB_KEY_FOREIGN, array('id_aspek'), 'aspek', array('id'));

        // Conditionally launch create table for bobot.
        if (!$dbman->table_exists($table4)) {
            $dbman->create_table($table4);
        }

        // Define table waktu to be created.
        $table5 = new xmldb_table('waktu');

        // Adding fields to table waktu.
        $table5->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table5->add_field('waktu', XMLDB_TYPE_CHAR, '10', null, null, null, null);

        // Adding keys to table waktu.
        $table5->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for waktu.
        if (!$dbman->table_exists($table5)) {
            $dbman->create_table($table5);
        }

        // Define table log_aksi to be created.
        $table6 = new xmldb_table('log_aksi');

        // Adding fields to table log_aksi.
        $table6->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table6->add_field('id_course_completions', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table6->add_field('id_aktivitas_aksi', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table6->add_field('id_waktu', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table6->add_field('id_log', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table6->add_field('nilai', XMLDB_TYPE_NUMBER, '6, 3', null, null, null, null);

        // Adding keys to table log_aksi.
        $table6->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));
        $table6->add_key('id_aktivitas_aksi', XMLDB_KEY_FOREIGN, array('id_aktivitas_aksi'), 'aktivitas_aksi', array('id'));
        $table6->add_key('id_waktu', XMLDB_KEY_FOREIGN, array('id_waktu'), 'waktu', array('id'));
        $table6->add_key('mdlnr_logaksi_courcomlog_uix', XMLDB_KEY_UNIQUE, array('id_course_completions', 'id_log'));

        // Adding indexes to table log_aksi.
        $table6->add_index('mdlnr_logaksi_courcom_ix', XMLDB_INDEX_NOTUNIQUE, array('id_course_completions'));
        $table6->add_index('mdlnr_logaksi_log_ix', XMLDB_INDEX_NOTUNIQUE, array('id_log'));

        // Conditionally launch create table for log_aksi.
        if (!$dbman->table_exists($table6)) {
            $dbman->create_table($table6);
        }

        $table7 = new xmldb_table('nilai_akhir');

        // Adding fields to table nilai_akhir.
        $table7->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table7->add_field('id_log_aksi', XMLDB_TYPE_INTEGER, '10', null, null, null, null);
        $table7->add_field('id_waktu', XMLDB_TYPE_INTEGER, '10', null, null, null, null);

        // Adding keys to table nilai_akhir.
        $table7->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));
        $table7->add_key('id_log_aksi', XMLDB_KEY_FOREIGN, array('id_log_aksi'), 'log_aksi', array('id'));
        $table7->add_key('id_waktu', XMLDB_KEY_FOREIGN, array('id_waktu'), 'waktu', array('id'));

        // Conditionally launch create table for nilai_akhir.
        if (!$dbman->table_exists($table7)) {
            $dbman->create_table($table7);
        }

        // Myreport savepoint reached.
        upgrade_plugin_savepoint(true, 2017051501, 'report', 'myreport');
    }
}

return $result;
}
?>