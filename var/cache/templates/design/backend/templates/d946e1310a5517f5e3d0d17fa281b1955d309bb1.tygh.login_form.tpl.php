<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:23:40
         compiled from "C:\Dropbox\www\favishop\design\backend\templates\views\auth\login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19156522199fc096706-05614487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd946e1310a5517f5e3d0d17fa281b1955d309bb1' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\backend\\templates\\views\\auth\\login_form.tpl',
      1 => 1372247426,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19156522199fc096706-05614487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'stored_user_login' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522199fc1fd040_40548562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522199fc1fd040_40548562')) {function content_522199fc1fd040_40548562($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\Dropbox\\www\\favishop\\app\\lib\\other\\smarty\\plugins\\modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('administration_panel','email','username','password','forgot_password_question'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="main_login_form" class=" cm-skip-check-items cm-check-changes">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_query_remove(fn_url($_REQUEST['return_url'],"A","rel"),"return_url"), ENT_QUOTES, 'UTF-8');?>
">
        <div class="modal-header">
            <h4><a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['settings']->value['Company']['company_name'],40,'...',true), ENT_QUOTES, 'UTF-8');?>
</a></h4>
            <span><?php echo $_smarty_tpl->__("administration_panel");?>
</span>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="username" class="cm-required <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']=="Y"){?>cm-email<?php }?>"><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['use_email_as_login']=="Y"){?><?php echo $_smarty_tpl->__("email");?>
<?php }else{ ?><?php echo $_smarty_tpl->__("username");?>
<?php }?>:</label>
                <input id="username" type="text" name="user_login" size="20" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" class="cm-focus" tabindex="1">
            </div>
            <div class="control-group">
                <label for="password" class="cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
                <input type="password" id="password" name="password" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" tabindex="2" maxlength="32">
            </div>
        </div>
        <div class="modal-footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/sign_in.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"button_main",'tabindex'=>"3"), 0);?>

            <a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="pull-right"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
        </div>
    </form>
</div><?php }} ?>