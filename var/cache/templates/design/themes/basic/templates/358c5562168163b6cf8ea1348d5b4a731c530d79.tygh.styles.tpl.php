<?php /* Smarty version Smarty-3.1.13, created on 2013-08-31 11:03:39
         compiled from "C:\Dropbox\www\favishop\design\themes\basic\templates\common\styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171695221954bdee112-78728284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358c5562168163b6cf8ea1348d5b4a731c530d79' => 
    array (
      0 => 'C:\\Dropbox\\www\\favishop\\design\\themes\\basic\\templates\\common\\styles.tpl',
      1 => 1377345941,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '171695221954bdee112-78728284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'include_dropdown' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5221954beddb84_08438722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5221954beddb84_08438722')) {function content_5221954beddb84_08438722($_smarty_tpl) {?><?php if (!is_callable('smarty_block_styles')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\block.styles.php';
if (!is_callable('smarty_block_hook')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_style')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_function_set_id')) include 'C:/Dropbox/www/favishop/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C"){?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array('use_scheme'=>true)); $_block_repeat=true; echo smarty_block_styles(array('use_scheme'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_style(array('src'=>"reset.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/bootstrap/bootstrap_grid_16.min.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/ui/jqueryui.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"base.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"glyphs.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"styles.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"print.css",'media'=>"print"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['translation']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']){?>
    <?php echo smarty_function_style(array('src'=>"design_mode.css"),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['include_dropdown']->value){?>
    <?php echo smarty_function_style(array('src'=>"dropdown.css"),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_style(array('src'=>"scheme.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"retina.less"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array('use_scheme'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])){?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A"){?><span class="cm-template-box" data-ca-te-template="common/styles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/styles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php }else{ ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array('use_scheme'=>true)); $_block_repeat=true; echo smarty_block_styles(array('use_scheme'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_style(array('src'=>"reset.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/bootstrap/bootstrap_grid_16.min.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/ui/jqueryui.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"base.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"glyphs.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"styles.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"print.css",'media'=>"print"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['translation']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']){?>
    <?php echo smarty_function_style(array('src'=>"design_mode.css"),$_smarty_tpl);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['include_dropdown']->value){?>
    <?php echo smarty_function_style(array('src'=>"dropdown.css"),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_style(array('src'=>"scheme.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"retina.less"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array('use_scheme'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>