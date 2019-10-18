<?php
/* Smarty version 3.1.33, created on 2019-10-04 07:55:52
  from 'C:\wamp64\www\appli\templates\symptome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96fb08180188_26856317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41b8ad134f5f81871ac74d37664ee1de895ed6cb' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\symptome.tpl',
      1 => 1570175735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d96fb08180188_26856317 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="">
       <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arraySymptome']->value, 'symptome');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['symptome']->value) {
?>
            <li><input type="checkbox"checked="checked"/><label><?php echo $_smarty_tpl->tpl_vars['symptome']->value['desc'];?>
</label></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div><?php }
}
