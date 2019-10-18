<?php
/* Smarty version 3.1.33, created on 2019-10-04 07:43:27
  from 'C:\wamp64\www\appli\templates\recherche.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d96f81fe87dd3_04623305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47360edf1006cbf9cdc14b54a1516494449d23e' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\recherche.tpl',
      1 => 1570171747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d96f81fe87dd3_04623305 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset id="fs_patho" class="inputPatho">
    <legend>Pathologies</legend>
    <input list=patho-list id="patho-choice"/>
    <div class="inputPatho">
    <datalist id=patho-list>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayPatho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
           <option value="<?php echo $_smarty_tpl->tpl_vars['patho']->value['desc'];?>
"/>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </datalist>
        
    </div>
</fieldset>






<?php }
}
