<?php /* Smarty version 3.1.27, created on 2016-04-03 23:00:41
         compiled from "templates\common\top-dreapta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24408570176698f5fa2_37873018%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11f5dd698f0ce247494b9c444adbace097cc2630' => 
    array (
      0 => 'templates\\common\\top-dreapta.tpl',
      1 => 1434904312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24408570176698f5fa2_37873018',
  'variables' => 
  array (
    'clubs' => 0,
    'teams' => 0,
    'organizer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5701766990f017_74898037',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5701766990f017_74898037')) {
function content_5701766990f017_74898037 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24408570176698f5fa2_37873018';
?>
<div class="lista-cluburi-top">
    <div class="icon">
        <i class="lista-cluburi-top-img"></i>
    </div>
    <div class="icon-text">
        <h3><?php echo $_smarty_tpl->tpl_vars['clubs']->value;?>
</h3>
        <p>Cluburi inscrise</p>
    </div>
    <div class="clearfix"></div>
</div>
<div class="lista-echipei-top">
    <div class="icon">
        <i class="lista-echipei-top-img"></i>
    </div>
    <div class="icon-text">
        <h3><?php echo $_smarty_tpl->tpl_vars['teams']->value;?>
</h3>
        <p>Echipe inscrise</p>
    </div>
    <div class="clearfix"></div>
</div>
<div class="nume-organizatori-top">
    <div class="nume-organizatori-top-text">
        <div class="nume-organizator">Nume Etapa: <span><?php echo $_smarty_tpl->tpl_vars['organizer']->value['name_trophy'];?>
</span></div>
		<div class="nume-1-organizator">Organizator: <span><?php echo $_smarty_tpl->tpl_vars['organizer']->value['name_organizer'];?>
</span></div>
		<div class="nume-etapa-organizator">Etapa: <span><?php echo $_smarty_tpl->tpl_vars['organizer']->value['phase_trophy'];?>
</span></div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div><?php }
}
?>