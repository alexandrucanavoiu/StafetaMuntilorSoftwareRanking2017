<?php /* Smarty version 3.1.27, created on 2016-04-03 23:15:16
         compiled from "templates\challenges\components\raid.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31588570179d4127ab5_12708863%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4d1b53d446b8f7ee4e3df2aa676d966574214e8' => 
    array (
      0 => 'templates\\challenges\\components\\raid.tpl',
      1 => 1436051492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31588570179d4127ab5_12708863',
  'variables' => 
  array (
    'stations' => 0,
    'station' => 0,
    'types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_570179d41ac0a6_41221627',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_570179d41ac0a6_41221627')) {
function content_570179d41ac0a6_41221627 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31588570179d4127ab5_12708863';
?>
<div class="col-sm-12">
    <div class="stations cloneable">
        <?php if (empty($_smarty_tpl->tpl_vars['stations']->value)) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("challenges/components/raid_station.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>0,'types'=>array(0)), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("challenges/components/raid_station.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>1,'types'=>array(1,2),'index'=>1), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("challenges/components/raid_station.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>3,'types'=>array(3)), 0);
?>

        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->tpl_vars['stations']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars["station"] = new Smarty_Variable;
$_smarty_tpl->tpl_vars["station"]->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars["station"]->value) {
$_smarty_tpl->tpl_vars["station"]->_loop = true;
$foreach_station_Sav = $_smarty_tpl->tpl_vars["station"];
?>
                <?php if ($_smarty_tpl->tpl_vars['station']->value['station_type'] == 1) {?>
                    <?php $_smarty_tpl->tpl_vars['types'] = new Smarty_Variable(array(1,2), null, 0);?>
                <?php } elseif ($_smarty_tpl->tpl_vars['station']->value['station_type'] == 2) {?>
                    <?php $_smarty_tpl->tpl_vars['types'] = new Smarty_Variable(array(1,2), null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['types'] = new Smarty_Variable(array($_smarty_tpl->tpl_vars['station']->value['station_type']), null, 0);?>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("challenges/components/raid_station.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['station']->value['station_type'],'types'=>$_smarty_tpl->tpl_vars['types']->value,'station'=>$_smarty_tpl->tpl_vars['station']->value), 0);
?>

            <?php
$_smarty_tpl->tpl_vars["station"] = $foreach_station_Sav;
}
?>
        <?php }?>
    </div>
</div><?php }
}
?>