<?php /* Smarty version 3.1.27, created on 2016-06-09 19:24:22
         compiled from "C:\Users\Stafeta\Downloads\Stafeta_Muntilor_Software\Stafeta Muntilor Software\www\stafeta\templates\clubs\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2095759983688a866_92009826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ffd4c893c8cba41eb25e2407c87ae1894c562a' => 
    array (
      0 => 'C:\\Users\\Stafeta\\Downloads\\Stafeta_Muntilor_Software\\Stafeta Muntilor Software\\www\\stafeta\\templates\\clubs\\add.tpl',
      1 => 1459635101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2095759983688a866_92009826',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575998368d4370_44948591',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575998368d4370_44948591')) {
function content_575998368d4370_44948591 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2095759983688a866_92009826';
?>
<?php echo '<script'; ?>
 src="../js/main.js"><?php echo '</script'; ?>
> <!-- Resource jQuery -->

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
            //Input fields increment limitation
            var maxField = 20;

            //Add button selector
            var addButton = $('.add_button');

            //Input field wrapper
            var wrapper = $('.club_name1');

            //New input field html
            var fieldHTML = '<div class="club_name2"><strong>Nume Club : </strong><input type="text" name="club_name[]" id="club_name" value="" size="50" required ><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="/stafeta/images/remove-icon.png"/></a> * <div></div></div>';

            //Initial field counter is 1
            var x = 1;
            //Once add button is clicked
            $(addButton).click(function() {

                //Check maximum number of input fields
                if(x < maxField){

                    //Increment field counter
                    x++;

                    // Add field html
                    $(wrapper).append(fieldHTML);
                }
            });
            $(wrapper).on('click', '.remove_button', function(e) {
                //Once remove button is clicked
                e.preventDefault();

                //Remove field html
                $(this).parent('div').remove();

                //Decrement field counter
                x--;
            });
        });
    <?php echo '</script'; ?>
>


			<p class="home"><strong>Adauga Cluburi Participante - Stafeta Muntilor</strong></p>
			<div class="total-continut">

				<form action="/stafeta/?page=clubs/add" method="POST">
					<div id="aduagare-club">
				<?php if (!empty($_smarty_tpl->tpl_vars['message']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

				<?php }?>
						<div id="club_name1" class="club_name1">
							<div class="club_name2"><strong>Nume Club : </strong> <input type="text" name="club_name[]" id="club_name" value="" size="50" required oninvalid="this.setCustomValidity('Introduceti numele Clubului')" oninput="this.setCustomValidity('')" >
								<a href="javascript:void(0);" class="add_button" title="Add field"><img src="/stafeta/images/add-icon.png"/></a> <span class="error"> *</span>
							</div>
						</div>
						<div class="button-add">
						<input type="submit" name="Trimite" id="Trimite" class="btn btn-primary clone" value="Trimite">
						<input type="reset" name="reset" id="reset" class="btn btn-primary clone" value="Reset!">
						</div>
					</div>
				</form>
				
			
			</div> 
<div class="button-inapoi">
<a href="/stafeta/?page=clubs/lists" class="btn btn-primary clone">INAPOI</a>
</div><?php }
}
?>