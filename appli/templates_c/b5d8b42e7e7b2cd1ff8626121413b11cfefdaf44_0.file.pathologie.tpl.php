<?php
/* Smarty version 3.1.33, created on 2019-10-08 20:10:24
  from 'C:\wamp64\www\appli\templates\pathologie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9ced305a6c27_00826915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5d8b42e7e7b2cd1ff8626121413b11cfefdaf44' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\pathologie.tpl',
      1 => 1570382083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ced305a6c27_00826915 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset id="fs_patho" class="inputPatho">
    <legend>Pathologies</legend>
    <div class="inputPatho">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayPatho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
           <input type="checkbox" name="fp_<?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
" id=fp_<?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
"/><label for=fp_<?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['patho']->value['nom'];?>
</label>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</fieldset>






<?php }
}
