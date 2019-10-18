<?php
/* Smarty version 3.1.33, created on 2019-10-08 20:10:24
  from 'C:\wamp64\www\appli\templates\meridien.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9ced305761e3_80701189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d832d6cfc01d954f55dacabd6a5e53c53c0fd99' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\meridien.tpl',
      1 => 1570187009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ced305761e3_80701189 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="inputMer">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayMeridien']->value, 'meridien');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['meridien']->value) {
?>
            <li><input type="checkbox" name="f<?php echo $_smarty_tpl->tpl_vars['meridien']->value['code'];?>
" id="f<?php echo $_smarty_tpl->tpl_vars['meridien']->value['code'];?>
" checked="checked"/><label for="f<?php echo $_smarty_tpl->tpl_vars['meridien']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['meridien']->value['nom'];?>
</label></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div><?php }
}
