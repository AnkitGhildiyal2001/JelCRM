<?php /* Smarty version 2.6.31, created on 2021-08-12 09:00:04
         compiled from C:%5Cxampp%5Chtdocs%5Cpublic_jel%5Ccrm%5Cinclude%5Cutils/recaptcha_disabled.tpl */ ?>
<?php echo '
<script>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById(\'username_password\').value = document.getElementById(\'new_password\').value;
      document.getElementById(\'ChangePasswordForm\').submit();
    }
</script>
'; ?>