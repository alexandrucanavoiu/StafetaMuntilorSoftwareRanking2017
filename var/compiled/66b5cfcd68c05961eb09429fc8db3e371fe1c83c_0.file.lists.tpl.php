<?php /* Smarty version 3.1.27, created on 2017-01-17 22:09:57
         compiled from "D:\bkp date\Stafeta Muntilor\Stafeta Muntilor Software\www\stafeta\templates\ranking\lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12519587e7a15d09fb7_69352093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b5cfcd68c05961eb09429fc8db3e371fe1c83c' => 
    array (
      0 => 'D:\\bkp date\\Stafeta Muntilor\\Stafeta Muntilor Software\\www\\stafeta\\templates\\ranking\\lists.tpl',
      1 => 1436095346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12519587e7a15d09fb7_69352093',
  'variables' => 
  array (
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587e7a15d65342_66419933',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587e7a15d65342_66419933')) {
function content_587e7a15d65342_66419933 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12519587e7a15d09fb7_69352093';
?>
<p class="home"><strong>Clasament - Categoria  <?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
 - Stafeta Muntilor</strong></p>
<div class="total-continut">
	<br />	
<div>
Orientare: 
<a href="/stafeta/?page=ranking/orienteering&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" class="btn btn-primary clone">Vezi Clasament Orientare</a>
<a href="/stafeta/?page=ranking/orienteering&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
&pdf=1" target="_blank" class="btn btn-primary clone">Export to PDF</a>
</div>


<br />
<div>
Cunostinte Turistice: 
<a href="/stafeta/?page=ranking/knowledge&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" class="btn btn-primary clone">Vezi Clasament Cunostinte Turistice</a>
<a href="/stafeta/?page=ranking/knowledge&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
&pdf=1" target="_blank" class="btn btn-primary clone">Export to PDF</a>
</div>


<br />
Raid Montan:
<a href="/stafeta/?page=ranking/raid&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" class="btn btn-primary clone">Vezi Clasament Raid Montan</a>
<a href="/stafeta/?page=ranking/raid&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
&pdf=1" target="_blank" class="btn btn-primary clone">Export to PDF</a>
</div>

<br /><br />
<h3>Clasament General</h3><br />
<a href="/stafeta/?page=ranking/generalcategory&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" class="btn btn-primary clone">Vezi Clasament General Categorie</a>
<a href="/stafeta/?page=ranking/generalcategory&category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
&pdf=1" target="_blank" class="btn btn-primary clone">Export to PDF</a>
</div>


</div>
<?php }
}
?>