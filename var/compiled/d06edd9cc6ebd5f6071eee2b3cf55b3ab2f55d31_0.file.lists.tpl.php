<?php /* Smarty version 3.1.27, created on 2016-06-09 19:24:32
         compiled from "C:\Users\Stafeta\Downloads\Stafeta_Muntilor_Software\Stafeta Muntilor Software\www\stafeta\templates\ranking\lists.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:141345759984014b1f1_02747231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd06edd9cc6ebd5f6071eee2b3cf55b3ab2f55d31' => 
    array (
      0 => 'C:\\Users\\Stafeta\\Downloads\\Stafeta_Muntilor_Software\\Stafeta Muntilor Software\\www\\stafeta\\templates\\ranking\\lists.tpl',
      1 => 1436095346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141345759984014b1f1_02747231',
  'variables' => 
  array (
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575998401a74f0_09420472',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575998401a74f0_09420472')) {
function content_575998401a74f0_09420472 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141345759984014b1f1_02747231';
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