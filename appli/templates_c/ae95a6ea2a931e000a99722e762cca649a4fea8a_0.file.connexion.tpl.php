<?php
/* Smarty version 3.1.33, created on 2019-10-11 15:32:54
  from 'C:\wamp64\www\appli\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da0a0a6185824_20166143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae95a6ea2a931e000a99722e762cca649a4fea8a' => 
    array (
      0 => 'C:\\wamp64\\www\\appli\\templates\\connexion.tpl',
      1 => 1570807518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da0a0a6185824_20166143 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="loginList">
       <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayLogin']->value, 'login');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['login']->value) {
?>
            <p> <?php echo $_smarty_tpl->tpl_vars['login']->value['prenom'];?>
 <?php echo $_smarty_tpl->tpl_vars['login']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['login']->value['pseudo'];?>
  </p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
