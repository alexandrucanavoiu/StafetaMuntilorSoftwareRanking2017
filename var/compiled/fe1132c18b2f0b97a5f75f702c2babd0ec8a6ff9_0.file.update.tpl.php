<?php /* Smarty version 3.1.27, created on 2016-07-19 17:19:47
         compiled from "D:\Stafeta Muntilor Software\www\stafeta\templates\cultural\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15820578e37031cab57_35447826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe1132c18b2f0b97a5f75f702c2babd0ec8a6ff9' => 
    array (
      0 => 'D:\\Stafeta Muntilor Software\\www\\stafeta\\templates\\cultural\\update.tpl',
      1 => 1435967598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15820578e37031cab57_35447826',
  'variables' => 
  array (
    'club' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578e37032f1df2_71410413',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578e37032f1df2_71410413')) {
function content_578e37032f1df2_71410413 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15820578e37031cab57_35447826';
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