<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Privacy Subsystem implementation for enrol_cohort.
 *
 * @package    enrol_cohort
 * @copyright  2018 Carlos Escobedo <carlos@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace enrol_cohort\privacy;
defined('MOODLE_INTERNAL') || die();
use \core_privacy\local\metadata\collection;
use \core_privacy\local\request\contextlist;
use \core_privacy\local\request\approved_contextlist;

/**
 * Privacy provider for enrol_cohort.
 *
 * @copyright  2018 Carlos Escobedo <carlos@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements
    \core_privacy\local\metadata\provider,
    \core_privacy\local\request\plugin\provider {
    /**
     * Returns meta data about this system.
     *
     * @param   collection     $collection The initialised item collection to add items to.
     * @return  collection     A listing of user data stored through this system.
     */
    public static function get_metadata(collection $collection) {

        $collection->add_subsystem_link('core_group', [], 'privacy:metadata:core_group');
        return $collection;
    }
    /**
     * Get the list of contexts that contain user information for the specified user.
     *
     * @param int $userid The user to search.
     * @return contextlist $contextlist The contextlist containing the list of contexts used in this plugin.
     */
    public static function get_contexts_for_userid($userid) {
        $contextlist = new contextlist();

        $sql = "SELECT ctx.id
                  FROM {groups_members} gm
                  JOIN {groups} g ON gm.groupid = g.id
                  JOIN {context} ctx ON g.courseid = ctx.instanceid AND ctx.contextlevel = :contextlevel
                 WHERE gm.userid = :userid
                   AND gm.component = 'enrol_cohort'";

        $params = [
            'contextlevel' => CONTEXT_COURSE,
            'userid'        => $userid
        ];

        $contextlist->add_from_sql($sql, $params);

        return $contextlist;
    }
    /**
     * Export all user data for the specified user, in the specified contexts.
     *
     * @param approved_contextlist $contextlist The approved contexts to export information for.
     */
    public static function export_user_data(approved_contextlist $contextlist) {
        if (empty($contextlist)) {
            return;
        }
        foreach ($contextlist as $context) {
            if ($context->contextlevel == CONTEXT_COURSE) {
                \core_group\privacy\provider::export_groups(
                    $context,
                    'enrol_cohort',
                    [get_string('pluginname', 'enrol_cohort')]
                );
            }
        }
    }

    /**
     * Delete all use data which matches the specified deletion_criteria.
     *
     * @param context $context A user context.
     */
    public static function delete_data_for_all_users_in_context(\context $context) {
        if (empty($context)) {
            return;
        }
        if ($context->contextlevel == CONTEXT_COURSE) {
            // Delete all the associated groups.
            \core_group\privacy\provider::delete_groups_for_all_users($context, 'enrol_cohort');
        }
    }
    /**
     * Delete all user data for the specified user, in the specified contexts.
     *
     * @param approved_contextlist $contextlist The approved contexts and user information to delete information for.
     */
    public static function delete_data_for_user(approved_contextlist $contextlist) {
        if (empty($contextlist->count())) {
            return;
        }
        \core_group\privacy\provider::delete_groups_for_user($contextlist, 'enrol_cohort');
    }
}