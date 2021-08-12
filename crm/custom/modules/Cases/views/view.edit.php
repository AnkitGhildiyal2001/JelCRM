 <?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class CasesViewEdit extends ViewEdit {
    function preDisplay() {
        parent::preDisplay();
        
        
            $this->ev->focus->assigned_user_id = 'ab10078a-6547-d854-f271-54196664153a';
       
    }
}
?> 