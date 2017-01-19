<?php /* Smarty version 3.1.27, created on 2016-06-10 14:41:17
         compiled from "C:\Users\Stafeta\Downloads\Stafeta_Muntilor_Software\Stafeta Muntilor Software\www\stafeta\templates\organizer\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25682575aa75d8dea58_23282888%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8771755cc10f5977befd7945b9a4b6c9a4931037' => 
    array (
      0 => 'C:\\Users\\Stafeta\\Downloads\\Stafeta_Muntilor_Software\\Stafeta Muntilor Software\\www\\stafeta\\templates\\organizer\\update.tpl',
      1 => 1459360684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25682575aa75d8dea58_23282888',
  'variables' => 
  array (
    'knowledge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575aa75dadf7c9_37842565',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575aa75dadf7c9_37842565')) {
function content_575aa75dadf7c9_37842565 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25682575aa75d8dea58_23282888';
?>
			<p class="home"><strong>Configureaza numele organizatorul</strong></p>
			<div class="total-continut">
			                  <div id="formular">
                        <div id="formular-continut" class="animate form">
							<form action="/stafeta/?page=organizer/update&id_organizer=1" method="POST" autocomplete="off">
                                <p> 
                                    <label for="name_trophy" class="name-trophy"> Numele Etapei </label>
                                    <input type="text" name="name_trophy" id="name-trophy" value="<?php if ($_smarty_tpl->tpl_vars['knowledge']->value) {
echo $_smarty_tpl->tpl_vars['knowledge']->value['name_trophy'];
}?>" size="50" required oninvalid="this.setCustomValidity('Introduceti numele etapei')" oninput="setCustomValidity('')" >
                                </p>
								<br />
                                <p> 
                                    <label for="name_organizer" class="name-organizer"> Numele Organizatorului</label>
                                    <input type="text" name="name_organizer" id="name_organizer" value="<?php if ($_smarty_tpl->tpl_vars['knowledge']->value) {
echo $_smarty_tpl->tpl_vars['knowledge']->value['name_organizer'];
}?>" size="50" required oninvalid="this.setCustomValidity('Introduceti numele organizatorului')" oninput="setCustomValidity('')" >
                                </p>
								<br />
								<p>
									<label for="phase_trophy" class="phase-trophy"> Etapa este de tip: </label>
								<select name="phase_trophy" class="phase-trophy">
								<option value="Master" <?php if (($_smarty_tpl->tpl_vars['knowledge']->value['phase_trophy'] == 'Master')) {?>selected<?php }?>>Master </option>
								<option value="Challenge" <?php if ($_smarty_tpl->tpl_vars['knowledge']->value['phase_trophy'] == 'Challenge') {?>selected<?php }?>>Challenge</option>
								<option value="Amical" <?php if ($_smarty_tpl->tpl_vars['knowledge']->value['phase_trophy'] == 'Amical') {?>selected<?php }?>>Amical</option>
							</select>
							<p class="formular-continut button"> 
						<input type="submit" name="Trimite" id="Trimite" value="Trimite" class="btn btn-primary clone">
						<input type="reset" name="reset" id="reset" value="Reset!" class="btn btn-primary clone">
							</p>
							</form>
							</div>
						</div>
			
			</div> 
<?php }
}
?>