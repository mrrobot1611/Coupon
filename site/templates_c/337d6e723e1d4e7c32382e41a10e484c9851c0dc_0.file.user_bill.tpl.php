<?php
/* Smarty version 3.1.30, created on 2017-11-01 04:25:32
  from "C:\xampp\htdocs\xxx\Coupon\site\templates\user_bill.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f93eac85a413_46421068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '337d6e723e1d4e7c32382e41a10e484c9851c0dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\xxx\\Coupon\\site\\templates\\user_bill.tpl',
      1 => 1509501864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:master.tpl' => 1,
  ),
),false)) {
function content_59f93eac85a413_46421068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1681959f93eac82c7a9_19602920', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_1681959f93eac82c7a9_19602920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid bg-3 text-center">
  <h2><b>HÓA ĐƠN</b></h2>
  <h3><?php echo 'Thành tiền: ';
echo number_format($_smarty_tpl->tpl_vars['tol']->value,0,".",",");
echo 'đ';?>
</h3>
  <h3><?php echo 'Chiết khấu: ';
echo number_format($_smarty_tpl->tpl_vars['dis']->value,0,".",",");
echo 'đ';?>
</h3>
    <h3><?php echo 'Tổng cộng: ';
echo number_format(($_smarty_tpl->tpl_vars['tol']->value-$_smarty_tpl->tpl_vars['dis']->value),0,".",",");
echo 'đ';?>
</h3>
</div>
<?php
}
}
/* {/block "content"} */
}
