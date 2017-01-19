<?php /* Smarty version 3.1.27, created on 2016-06-12 09:34:37
         compiled from "C:\Users\Stafeta\Downloads\Stafeta_Muntilor_Software\Stafeta Muntilor Software\www\stafeta\templates\cultural\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19845575d027d61ab48_70663436%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad6f70963636c85942131501513bc6dd73b08d1' => 
    array (
      0 => 'C:\\Users\\Stafeta\\Downloads\\Stafeta_Muntilor_Software\\Stafeta Muntilor Software\\www\\stafeta\\templates\\cultural\\update.tpl',
      1 => 1435967598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19845575d027d61ab48_70663436',
  'variables' => 
  array (
    'club' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575d027d69ead7_50560503',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575d027d69ead7_50560503')) {
function content_575d027d69ead7_50560503 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19845575d027d61ab48_70663436';
?>
			<p class="home"><strong><?php echo $_smarty_tpl->tpl_vars['club']->value['club_name'];?>
 - Proba Culturala</strong></p>
			<div class="total-continut">
			                  <div id="formular">
                        <div id="formular-continut" class="animate form">
		
			<form action="/stafeta/?page=cultural/update&club_id=<?php echo $_smarty_tpl->tpl_vars['club']->value['club_id'];?>
" method="POST" autocomplete="off">
    
			<p>
					<label for="scor_cultural" class="scor-cultural"> Scor Cultural </label>
					<input type="number" name="scor_cultural" id="scor_cultural" value="<?php if ($_smarty_tpl->tpl_vars['club']->value) {
echo $_smarty_tpl->tpl_vars['club']->value['scor_cultural'];
}?>" size="50" required placeholder="introduceti punctajul"  oninvalid="this.setCustomValidity('Camp obligatoiu')" oninput="setCustomValidity('')" >
			</p>
			<p class="formular-continut button"> 
				<input type="submit" name="submit" id="submit" value="Update">
			</p>
			</form>
							</div>
						</div>
			</div>
			<a href="/stafeta/?page=cultural/lists" class="btn btn-primary clone">INAPOI</a><?php }
}
?>