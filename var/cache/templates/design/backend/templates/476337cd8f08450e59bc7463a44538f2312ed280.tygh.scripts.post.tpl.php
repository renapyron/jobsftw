<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:23:38
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\addons\twigmo\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5160522199fa7b3d80-67135553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '476337cd8f08450e59bc7463a44538f2312ed280' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\addons\\twigmo\\hooks\\index\\scripts.post.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5160522199fa7b3d80-67135553',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522199fa7faa77_72734880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522199fa7faa77_72734880')) {function content_522199fa7faa77_72734880($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('checkout_terms_n_conditions_alert'));
?>
<script>
    //<![CDATA[
    
    Tygh.$(function (_, $) {
        _.tr("checkout_terms_n_conditions_alert", "<?php echo $_smarty_tpl->__("checkout_terms_n_conditions_alert");?>
");
        
        $.ceFormValidator('registerValidator', {
            class: 'cm-check-agreement',
            message: _.tr("checkout_terms_n_conditions_alert"),
            func: function(id) {
                return $('#' + id).prop('checked');
            }
        });
        
        function fn_tw_copy_email() {
            var tw_email = $('#elm_tw_email').val();
            $('#elm_reset_tw_password').attr(
                'href', 
                'http://twigmo.com/svc/reset_password.php?email=' + tw_email
            );
        }
        
        
        function fn_tw_check_agreement() {
            if (!$('#id_accept_terms').attr('checked')) {
                return false;
            }
            return true;
        }
        
    }(Tygh, Tygh.$));
    
    //]]>
</script><?php }} ?>