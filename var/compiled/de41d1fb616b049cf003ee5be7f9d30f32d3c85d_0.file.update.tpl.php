<?php /* Smarty version 3.1.27, created on 2016-06-11 11:39:56
         compiled from "C:\Users\Stafeta\Downloads\Stafeta_Muntilor_Software\Stafeta Muntilor Software\www\stafeta\templates\clubs\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26777575bce5cc35292_53608047%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de41d1fb616b049cf003ee5be7f9d30f32d3c85d' => 
    array (
      0 => 'C:\\Users\\Stafeta\\Downloads\\Stafeta_Muntilor_Software\\Stafeta Muntilor Software\\www\\stafeta\\templates\\clubs\\update.tpl',
      1 => 1435967994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26777575bce5cc35292_53608047',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575bce5ccca014_48622476',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575bce5ccca014_48622476')) {
function content_575bce5ccca014_48622476 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26777575bce5cc35292_53608047';
?>
			<p class="home"><strong>Editare - Nume Club - Participare - Stafeta Muntilor</strong></p>
			<div class="total-continut">
			                  <div id="formular">
                        <div id="formular-continut" class="animate form">
						
			<form action="/stafeta/?page=clubs/update&club_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['club_id'];?>
" method="POST" autocomplete="off">
 
				<p>
				<label for="club_name" class="club-name"> Nume Club :</label>
				<input type="text" name="club_name" id="club-name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['club_name'];?>
" size="50" required   oninvalid="this.setCustomValidity('Introduceti numele clubului')" oninput="setCustomValidity('')" >
				</p>
					
				<p class="formular-continut button"> 
					<input type="hidden" name="club_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['club_id'];?>
">
					<input type="submit" name="submit" id="submit" value="Update">
				</p>
					

			</div>
			</form>
			</div>
			</div>
			</div>
			<a href="/stafeta/?page=clubs/lists" class="btn btn-primary clone">INAPOI</a><?php }
}
?>