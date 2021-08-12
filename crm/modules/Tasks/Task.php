<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
require_once 'include/SugarPHPMailer.php';
include 'custom/include/PhpOffice/PhpWord/Autoloader.php';
include 'custom/include/PhpOffice/Common/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();
\PhpOffice\Common\Autoloader::register();
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// Task is used to store customer information.
class Task extends SugarBean
{
    public $field_name_map;

    // Stored fields
    public $id;
    public $date_entered;
    public $date_modified;
    public $assigned_user_id;
    public $modified_user_id;
    public $created_by;
    public $created_by_name;
    public $modified_by_name;
    public $description;
    public $name;
    public $status;
    public $date_due_flag;
    public $date_due;
    public $time_due;
    public $date_start_flag;
    public $date_start;
    public $time_start;
    public $priority;
    public $parent_type;
    public $parent_id;
    public $contact_id;

    public $parent_name;
    public $contact_name;
    public $contact_phone;
    public $contact_email;
    public $assigned_user_name;

    //added fields
    public $agreementFile = 'modules/Tasks/DocGeneration/Templates/MCVisa_agreement';
    public $descriptionFile = 'modules/Tasks/DocGeneration/Templates/MCVisa_description.docx';
    public $estimateFile = 'modules/Tasks/DocGeneration/Templates/MCVisa_estimate_form.docx';
    public $tempDocumentsFolder = 'modules/Tasks/DocGeneration/TempDocuments';
    public $emailTemplate = 'modules/Tasks/DocGeneration/Templates/email.php';

    //bug 28138 todo
    //    var $default_task_name_values = array('Assemble catalogs', 'Make travel arrangements', 'Send a letter', 'Send contract', 'Send fax', 'Send a follow-up letter', 'Send literature', 'Send proposal', 'Send quote', 'Call to schedule meeting', 'Setup evaluation', 'Get demo feedback', 'Arrange introduction', 'Escalate support request', 'Close out support request', 'Ship product', 'Arrange reference call', 'Schedule training', 'Send local user group information', 'Add to mailing list');

    public $table_name = "tasks";

    public $object_name = "Task";
    public $module_dir = 'Tasks';

    public $importable = true;
    // This is used to retrieve related fields from form posts.
    public $additional_column_fields = array('assigned_user_name', 'assigned_user_id', 'contact_name', 'contact_phone', 'contact_email', 'parent_name');

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    public function Task()
    {
        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if (isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        } else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct();
    }

    public $new_schema = true;

    public function save($check_notify = false)
    {
        global $current_user;

        //CHECK IF LEAD TASK SUBMISSION AND PULL LEAD INFO
        if ($lead = $this->setLeadValues()) {
            //IF LEAD IS MCVISA, AUTO-SEND EMAIL AND CHANGE DESCRIPTION ATTACHED TO TASK TO INDICATE THIS
            if ($lead->cases_c == 'VisaMC2018') {
                if ($agreement = $this->generateClientAgreement()) {
                    if ($agreement !== 'AR') {

                        $ae = (new User())->retrieve($lead->assigned_user_id);
                        $vp = (new User())->retrieve('4b7a3db9-26c0-cfad-9482-56defd33ca80');

                        $team_lead_name = $lead->team_lead_c;
                        $team_lead_email = $lead->team_lead_email_c;

                        $mail = new SugarPHPMailer();
                        $mail->setMailerForSystem();
                        $mail->From = 'contract@jelcrs.com';
                        $mail->FromName = 'J.E. Lawrence & Co.';
                        $mail->Subject = 'JEL Client Agreement';
                        $mail->isHTML(true);
                        

                        //decide which vp email to use
                        $vpCC = $vp->emailAddress->getPrimaryAddress($vp);

                        if ($vpCC == "") {
                            $vpCC = $ae->email1;
                            if ($vpCC == "") {
                                $vpCC = $ae->email2;
                            }
                        }
                        
                        //decide which ae email to use
                        $aeEmail = $ae->emailAddress->getPrimaryAddress($ae);

                        if ($aeEmail == "") {
                            $aeEmail = $ae->email1;
                            if ($aeEmail == "") {
                                $aeEmail = $ae->email2;
                            }
                        }

                        //grab before formatting for email copy
                        $aeCC = $aeEmail;

                        //if an email address has been decided, use it to complete sentence in body of email message
                        if ($aeEmail != "") {
                            $aeEmail = " at $aeEmail.";
                        } else { //else use this variable to simply end sentence in body of email
                            $aeEmail = ".";
                        }

                        // Parse the template content
                        ob_start();
                        include $this->emailTemplate;
                        $body = ob_get_clean();
                        $mail->Body = $body;

                        //attachments
                        foreach ($agreement as $name => $attachment) {
                            $mail->addAttachment($attachment, $name, $mail::ENCODING_BASE64, "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
                        }

                        $mail->prepForOutbound();
                        $mail->AddAddress($lead->email1, $lead->first_name . ' ' . $lead->last_name); //client email
                        $mail->AddCC($aeCC, $ae->first_name . ' ' . $ae->last_name); //AE email
                        $mail->AddCC($ae->teamleaderemail_c, $ae->teamleader1_c); //Team leader email
                        $mail->AddCC($vpCC, $vp->first_name . ' ' . $vp->last_name); //VP email
                        $mail->Send();

                        $_REQUEST['name'] .= ' (AUTO-SENT)';
                        $_REQUEST['description'] .= "\n\n [This agreement has been auto-sent. Please verify with the AE and Team Leader.]";

                    } else {
                        $_REQUEST['name'] .= ' (ADMIN RQRD)';
                        $_REQUEST['description'] .= "\n\n [This agreement can only be sent by an admin due to its percentage not being set to 30% in the lead details.]";
                    }

                }
            } else {
                $_REQUEST['name'] .= ' (MANUAL SEND RQRD)';
                $_REQUEST['description'] .= "\n\n [This agreement must be sent manually as it has not been set up for automation.]";
            }
        }

        if (empty($this->status)) {
            $this->status = $this->getDefaultStatus();
        }

        $this->name = $_REQUEST['name'];
        $this->description = $_REQUEST['description'];
        $fp = fopen('POST.txt', 'w');
        fwrite($fp, json_encode($_POST) . json_encode($_REQUEST));
        fclose($fp);

        return parent::save($check_notify);
    }

    public function setLeadValues()
    {
        //day of the month, month itself, and year
        $lead_id = "";

        if ($_REQUEST['target_action'] == "QuickCreate") {
            $lead_id = $_REQUEST['lead_id'];

            $lead = new Lead();
            $lead->retrieve($lead_id);

            //legal name
            $this->lead_legal_name = $lead->companyname_c;

            //address
            $lead_street = $lead->primary_address_street;
            $lead_street_2 = $lead->primary_address_street_2;
            $lead_city = $lead->primary_address_city;
            $lead_state = $lead->primary_address_state;
            $lead_zip = $lead->primary_address_postalcode;
            $lead_country = $lead->primary_address_country;

            $lead_address = "$lead_street, $lead_city, $lead_state, $lead_zip";

            $this->lead_address = $lead_address;

            //account executive name
            $this->lead_account_executive = $lead->assigned_user_name;

            //estimated claim amount
            $this->lead_estimated_claim = $lead->estclaim_c;

            //tax ID number
            $this->lead_tax_id = $lead->taxid_c;

            //phone number
            $this->lead_phone = $lead->office_phone2_c;

            //email address
            $this->lead_email = $lead->email1;

        } else if ($_POST['action'] == 'Save' && $_POST['relate_to'] == 'Leads') {
            $lead_id = $_POST['relate_id'];

            $lead = new Lead();
            $lead->retrieve($lead_id);

        }

        if (isset($lead)) {

            //We need to check if the user is PanG or DinA -- in this case we need to substitute real users for them
            if ($lead->assigned_user_id == "6ca2d663-64c3-53ed-e5fa-5d937bed34a3") { //Pan Gregorian
                $lead->assigned_user_id = "e2c3a507-1dcd-aaf7-dbde-53d050748661"; // Ed Vicinanza
                $replacementUser = (new User())->retrieve($lead->assigned_user_id);
                $initialName = $lead->assigned_user_name;
                //$this->lead_account_executive = $replacementUser->first_name . " " . $replacementUser->last_name . " ( $initialName )";
                $this->lead_account_executive = $replacementUser->first_name . " " . $replacementUser->last_name;
            } else if ($lead->assigned_user_id == "3b0e01c7-cdc2-4e59-fc02-5d77a1c82fce") { //Dining Alliance
                $lead->assigned_user_id = "e8bc551d-77c2-096d-b4ec-53d050af519b"; //Elise Vicinanza
                $replacementUser = (new User())->retrieve($lead->assigned_user_id);
                $initialName = $lead->assigned_user_name;
                //$this->lead_account_executive = $replacementUser->first_name . " " . $replacementUser->last_name . " ( $initialName )";
                $this->lead_account_executive = $replacementUser->first_name . " " . $replacementUser->last_name;
            }

            return $lead;
        } else {
            return false;
        }

    }

    public function generateClientAgreement()
    {
        $lead_id = "";

        if ($_REQUEST['target_action'] == "QuickCreate") {
            $lead_id = $_REQUEST['lead_id'];
        } else if ($_POST['action'] == 'Save' && $_POST['relate_to'] == 'Leads') {
            $lead_id = $_POST['relate_id'];
        }

        if ($lead_id != "") {

            $lead = new Lead();
            $lead->retrieve($lead_id);

            //date
            $today = new \DateTime();
            $day = $today->format('dS');
            $month = $today->format('F');
            $year = $today->format('Y');

            //legal name
            $lead_legal_name = htmlspecialchars_decode($lead->companyname_c);

            //contact info
            $contact_name = htmlspecialchars_decode($lead->first_name . ' ' . $lead->last_name);
            $contact_email = $lead->email1;
            $contact_phone = $lead->office_phone2_c;

            //ae
            $ae = $lead->assigned_user_name;

            //address
            $lead_street = $lead->primary_address_street;
            $lead_street_2 = $lead->primary_address_street_2;
            $lead_city = $lead->primary_address_city;
            $lead_state = $lead->primary_address_state;
            $lead_zip = $lead->primary_address_postalcode;
            $lead_country = $lead->primary_address_country;

            $lead_address = htmlspecialchars_decode("$lead_street, $lead_city, $lead_zip, $lead_state");

            $JEL_percent = $lead->jel_percent_c;

            //verification on percentage
            if ($JEL_percent != '30percent') {
                //check user role -- admin: pass through, else don't auto-send email
                global $current_user;
                $admin = $current_user->isAdmin();

                if ($admin != 1) {
                    return 'AR';
                }

            }

            //choose template
            switch ($JEL_percent) {
                case '30percent':
                    $masterTemplate = $this->agreementFile . '_30.docx';
                    break;
                case '25percent':
                    $masterTemplate = $this->agreementFile . '_25.docx';
                    break;
                case '20percent':
                    $masterTemplate = $this->agreementFile . '_20.docx';
                    break;
                default:
                    return false;
            }

            $userFolder = $this->tempDocumentsFolder;
            $userAgreementFile = $userFolder . '/' . substr($lead_id, 0, 11) . '_agreement.docx';
            $userDescriptionFile = $userFolder . '/' . substr($lead_id, 0, 11) . '_description.docx';
            $userEstimateFile = $userFolder . '/' . substr($lead_id, 0, 11) . '_estimate.docx';

            copy($masterTemplate, $userAgreementFile);
            copy($this->descriptionFile, $userDescriptionFile);
            copy($this->estimateFile, $userEstimateFile);

            ob_start();
            $document = new \PhpOffice\PhpWord\TemplateProcessor($userAgreementFile);
            $document->setValue('dateDay', htmlspecialchars($day, ENT_COMPAT, 'UTF-8'));
            $document->setValue('dateMonth', htmlspecialchars($month, ENT_COMPAT, 'UTF-8'));
            $document->setValue('dateYear', htmlspecialchars($year, ENT_COMPAT, 'UTF-8'));
            $document->setValue('companyLegalName', htmlspecialchars($lead_legal_name, ENT_COMPAT, 'UTF-8'));
            $document->setValue('companyAddress', htmlspecialchars($lead_address, ENT_COMPAT, 'UTF-8'));
            $document->setValue('accountExecutive', htmlspecialchars($ae, ENT_COMPAT, 'UTF-8'));
            $document->saveAs($userAgreementFile);

            $estimate = new \PhpOffice\PhpWord\TemplateProcessor($userEstimateFile);
            $estimate->setValue('companyLegalName', htmlspecialchars($lead_legal_name, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('companyLegalName', htmlspecialchars($lead_legal_name, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('companyAddress', htmlspecialchars($lead_address, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('companyAddress', htmlspecialchars($lead_address, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('contactName', htmlspecialchars($contact_name, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('contactName', htmlspecialchars($contact_name, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('contactEmail', htmlspecialchars($contact_email, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('contactEmail', htmlspecialchars($contact_email, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('contactPhone', htmlspecialchars($contact_phone, ENT_COMPAT, 'UTF-8'));
            $estimate->setValue('contactPhone', htmlspecialchars($contact_phone, ENT_COMPAT, 'UTF-8'));

            $estimate->saveAs($userEstimateFile);

            $description = new \PhpOffice\PhpWord\TemplateProcessor($userDescriptionFile);
            $description->saveAs($userDescriptionFile);

            ob_clean();

            return ['clientAgreement.docx' => $userAgreementFile, 'caseDescription.docx' => $userDescriptionFile, 'estimateForm.docx' => $userEstimateFile];
        } else {
            return false;
        }

    }

    public function get_summary_text()
    {
        return "$this->name";
    }

    public function create_export_query($order_by, $where, $relate_link_join = '')
    {
        $custom_join = $this->getCustomJoin(true, true, $where);
        $custom_join['join'] .= $relate_link_join;
        $contact_required = stristr($where, "contacts");
        if ($contact_required) {
            $query = "SELECT tasks.*, contacts.first_name, contacts.last_name, users.user_name as assigned_user_name ";
            $query .= $custom_join['select'];
            $query .= " FROM contacts, tasks ";
            $where_auto = "tasks.contact_id = contacts.id AND tasks.deleted=0 AND contacts.deleted=0";
        } else {
            $query = 'SELECT tasks.*, users.user_name as assigned_user_name ';
            $query .= $custom_join['select'];
            $query .= ' FROM tasks ';
            $where_auto = "tasks.deleted=0";
        }

        $query .= $custom_join['join'];
        $query .= "  LEFT JOIN users ON tasks.assigned_user_id=users.id ";

        if ($where != "") {
            $query .= "where $where AND " . $where_auto;
        } else {
            $query .= "where " . $where_auto;
        }

        $order_by = $this->process_order_by($order_by);
        if (empty($order_by)) {
            $order_by = 'tasks.name';
        }
        $query .= ' ORDER BY ' . $order_by;

        return $query;
    }

    public function fill_in_additional_detail_fields()
    {
        parent::fill_in_additional_detail_fields();
        global $app_strings;

        if (isset($this->contact_id)) {
            $contact = new Contact();
            $contact->retrieve($this->contact_id);

            if ($contact->id != "") {
                $this->contact_name = $contact->full_name;
                $this->contact_name_owner = $contact->assigned_user_id;
                $this->contact_name_mod = 'Contacts';
                $this->contact_phone = $contact->phone_work;
                $this->contact_email = $contact->emailAddress->getPrimaryAddress($contact);
            } else {
                $this->contact_name_mod = '';
                $this->contact_name_owner = '';
                $this->contact_name = '';
                $this->contact_email = '';
                $this->contact_id = '';
            }
        }

        //set lead values
        $this->setLeadValues();

        $this->fill_in_additional_parent_fields();
    }

    public function fill_in_additional_parent_fields()
    {
        $this->parent_name = '';
        global $app_strings, $beanFiles, $beanList, $locale;
        if (!isset($beanList[$this->parent_type])) {
            $this->parent_name = '';
            return;
        }

        $beanType = $beanList[$this->parent_type];
        require_once $beanFiles[$beanType];
        $parent = new $beanType();

        if (is_subclass_of($parent, 'Person')) {
            $query = "SELECT first_name, last_name, assigned_user_id parent_name_owner from $parent->table_name where id = '$this->parent_id'";
        } else {
            if (is_subclass_of($parent, 'File')) {
                $query = "SELECT document_name, assigned_user_id parent_name_owner from $parent->table_name where id = '$this->parent_id'";
            } else {
                $query = "SELECT name ";
                if (isset($parent->field_defs['assigned_user_id'])) {
                    $query .= " , assigned_user_id parent_name_owner ";
                } else {
                    $query .= " , created_by parent_name_owner ";
                }
                $query .= " from $parent->table_name where id = '$this->parent_id'";
            }
        }
        $result = $this->db->query($query, true, " Error filling in additional detail fields: ");

        // Get the id and the name.
        $row = $this->db->fetchByAssoc($result);

        if ($row && !empty($row['parent_name_owner'])) {
            $this->parent_name_owner = $row['parent_name_owner'];
            $this->parent_name_mod = $this->parent_type;
        }
        if (is_subclass_of($parent, 'Person') and $row != null) {
            $this->parent_name = $locale->getLocaleFormattedName(stripslashes($row['first_name']), stripslashes($row['last_name']));
        } else {
            if (is_subclass_of($parent, 'File') && $row != null) {
                $this->parent_name = $row['document_name'];
            } elseif ($row != null) {
                $this->parent_name = stripslashes($row['name']);
            } else {
                $this->parent_name = '';
            }
        }
    }

    protected function formatStartAndDueDates(&$task_fields, $dbtime, $override_date_for_subpanel)
    {
        global $timedate;

        if (empty($dbtime)) {
            return;
        }

        $today = $timedate->nowDbDate();

        $task_fields['TIME_DUE'] = $timedate->to_display_time($dbtime);
        $task_fields['DATE_DUE'] = $timedate->to_display_date($dbtime);

        $date_due = $task_fields['DATE_DUE'];

        $dd = $timedate->to_db_date($date_due, false);
        $taskClass = 'futureTask';
        if ($dd < $today) {
            if ($task_fields['STATUS'] == 'Completed' || $task_fields['STATUS'] == 'Deferred') {
                $taskClass = '';
            } else {
                $taskClass = 'overdueTask';
            }
        } else {
            if ($dd == $today) {
                $taskClass = 'todaysTask';
            }
        }
        $task_fields['DATE_DUE'] = "<font class='$taskClass'>$date_due</font>";
        if ($override_date_for_subpanel) {
            $task_fields['DATE_START'] = "<font class='$taskClass'>$date_due</font>";
        }
    }

    public function get_list_view_data()
    {
        global $action, $currentModule, $focus, $current_module_strings, $app_list_strings, $timedate;

        $override_date_for_subpanel = false;
        if (!empty($_REQUEST['module']) && $_REQUEST['module'] != 'Calendar' && $_REQUEST['module'] != 'Tasks' && $_REQUEST['module'] != 'Home') {
            //this is a subpanel list view, so override the due date with start date so that collections subpanel works as expected
            $override_date_for_subpanel = true;
        }

        $today = $timedate->nowDb();
        $task_fields = $this->get_list_view_array();

        if (!isset($task_fields['DATE_DUE'])) {
            LoggerManager::getLogger()->warn('Task get_list_view_data: Undefined index: DATE_DUE');
            $taskFieldsDateDue = null;
        } else {
            $taskFieldsDateDue = $task_fields['DATE_DUE'];
        }

        $dbtime = $timedate->to_db($taskFieldsDateDue);
        if ($override_date_for_subpanel) {
            $dbtime = $timedate->to_db($task_fields['DATE_START']);
        }

        if (!empty($dbtime)) {
            $task_fields['TIME_DUE'] = $timedate->to_display_time($dbtime);
            $task_fields['DATE_DUE'] = $timedate->to_display_date($dbtime);
            $this->formatStartAndDueDates($task_fields, $dbtime, $override_date_for_subpanel);
        }

        if (!empty($this->priority)) {
            $task_fields['PRIORITY'] = $app_list_strings['task_priority_dom'][$this->priority];
        }
        if (isset($this->parent_type)) {
            $task_fields['PARENT_MODULE'] = $this->parent_type;
        }
        if ($this->status != "Completed" && $this->status != "Deferred") {
            $setCompleteUrl = "<b><a id='{$this->id}' class='list-view-data-icon' title='" . translate('LBL_LIST_CLOSE', 'Tasks') . "' onclick='SUGAR.util.closeActivityPanel.show(\"{$this->module_dir}\",\"{$this->id}\",\"Completed\",\"listview\",\"1\");'>";
            $task_fields['SET_COMPLETE'] = $setCompleteUrl . "<span class='suitepicon suitepicon-action-clear'></span></a></b>";
        }

        // make sure we grab the localized version of the contact name, if a contact is provided
        if (!empty($this->contact_id)) {
            $contact_temp = BeanFactory::getBean("Contacts", $this->contact_id);
            if (!empty($contact_temp)) {
                // Make first name, last name, salutation and title of Contacts respect field level ACLs
                $contact_temp->_create_proper_name_field();
                $this->contact_name = $contact_temp->full_name;
                $this->contact_phone = $contact_temp->phone_work;
            }
        }

        $task_fields['CONTACT_NAME'] = $this->contact_name;
        $task_fields['CONTACT_PHONE'] = $this->contact_phone;
        $task_fields['TITLE'] = '';
        if (!empty($task_fields['CONTACT_NAME'])) {
            $task_fields['TITLE'] .= $current_module_strings['LBL_LIST_CONTACT'] . ": " . $task_fields['CONTACT_NAME'];
        }
        if (!empty($this->parent_name)) {
            $task_fields['TITLE'] .= "\n" . $app_list_strings['parent_type_display'][$this->parent_type] . ": " . $this->parent_name;
            $task_fields['PARENT_NAME'] = $this->parent_name;
        }

        return $task_fields;
    }

    public function set_notification_body($xtpl, $task)
    {
        global $app_list_strings;
        global $timedate;
        $notifyUser = $task->current_notify_user;
        $prefDate = $notifyUser->getUserDateTimePreferences();
        $xtpl->assign("TASK_SUBJECT", $task->name);
        //MFH #13507
        $xtpl->assign("TASK_PRIORITY", (isset($task->priority) ? $app_list_strings['task_priority_dom'][$task->priority] : ""));

        if (!empty($task->date_due)) {
            $duedate = $timedate->fromDb($task->date_due);
            $xtpl->assign("TASK_DUEDATE", $timedate->asUser($duedate, $notifyUser) . " " . TimeDate::userTimezoneSuffix($duedate, $notifyUser));
        } else {
            $xtpl->assign("TASK_DUEDATE", '');
        }

        $xtpl->assign("TASK_STATUS", (isset($task->status) ? $app_list_strings['task_status_dom'][$task->status] : ""));
        $xtpl->assign("TASK_DESCRIPTION", $task->description);

        return $xtpl;
    }

    public function bean_implements($interface)
    {
        switch ($interface) {
            case 'ACL':return true;
        }
        return false;
    }
    public function listviewACLHelper()
    {
        $array_assign = parent::listviewACLHelper();
        $is_owner = false;
        $in_group = false; //SECURITY GROUPS
        if (!empty($this->parent_name)) {
            if (!empty($this->parent_name_owner)) {
                global $current_user;
                $is_owner = $current_user->id == $this->parent_name_owner;
            }
            /* BEGIN - SECURITY GROUPS */
            //parent_name_owner not being set for whatever reason so we need to figure this out
            else {
                if (!empty($this->parent_type) && !empty($this->parent_id)) {
                    global $current_user;
                    $parent_bean = BeanFactory::getBean($this->parent_type, $this->parent_id);
                    if ($parent_bean !== false) {
                        $is_owner = $current_user->id == $parent_bean->assigned_user_id;
                    }
                }
            }
            require_once "modules/SecurityGroups/SecurityGroup.php";
            $in_group = SecurityGroup::groupHasAccess($this->parent_type, $this->parent_id, 'view');
            /* END - SECURITY GROUPS */
        }

        /* BEGIN - SECURITY GROUPS */
        /**
        if(!ACLController::moduleSupportsACL($this->parent_type) || ACLController::checkAccess($this->parent_type, 'view', $is_owner)){
         */
        if (!ACLController::moduleSupportsACL($this->parent_type) || ACLController::checkAccess($this->parent_type, 'view', $is_owner, 'module', $in_group)) {
            /* END - SECURITY GROUPS */
            $array_assign['PARENT'] = 'a';
        } else {
            $array_assign['PARENT'] = 'span';
        }
        $is_owner = false;
        $in_group = false; //SECURITY GROUPS
        if (!empty($this->contact_name)) {
            if (!empty($this->contact_name_owner)) {
                global $current_user;
                $is_owner = $current_user->id == $this->contact_name_owner;
            }
            /* BEGIN - SECURITY GROUPS */
            //contact_name_owner not being set for whatever reason so we need to figure this out
            else {
                global $current_user;
                $parent_bean = BeanFactory::getBean('Contacts', $this->contact_id);
                if ($parent_bean !== false) {
                    $is_owner = $current_user->id == $parent_bean->assigned_user_id;
                }
            }
            require_once "modules/SecurityGroups/SecurityGroup.php";
            $in_group = SecurityGroup::groupHasAccess('Contacts', $this->contact_id, 'view');
            /* END - SECURITY GROUPS */
        }

        /* BEGIN - SECURITY GROUPS */
        /**
        if( ACLController::checkAccess('Contacts', 'view', $is_owner)){
         */
        if (ACLController::checkAccess('Contacts', 'view', $is_owner, 'module', $in_group)) {
            /* END - SECURITY GROUPS */
            $array_assign['CONTACT'] = 'a';
        } else {
            $array_assign['CONTACT'] = 'span';
        }

        return $array_assign;
    }

    public function getDefaultStatus()
    {
        $def = $this->field_defs['status'];
        if (isset($def['default'])) {
            return $def['default'];
        } else {
            $app = return_app_list_strings_language($GLOBALS['current_language']);
            if (isset($def['options']) && isset($app[$def['options']])) {
                $keys = array_keys($app[$def['options']]);
                return $keys[0];
            }
        }

        return '';
    }
}
