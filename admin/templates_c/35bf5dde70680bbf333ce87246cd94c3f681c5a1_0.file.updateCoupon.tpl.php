<?php
/* Smarty version 3.1.30, created on 2017-11-01 05:06:32
  from "C:\xampp\htdocs\Coupon_new\admin\templates\updateCoupon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f948487229b9_68917718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35bf5dde70680bbf333ce87246cd94c3f681c5a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Coupon_new\\admin\\templates\\updateCoupon.tpl',
      1 => 1509463508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:master.tpl' => 1,
  ),
),false)) {
function content_59f948487229b9_68917718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_898759f94848717292_66155604', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:master.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_898759f94848717292_66155604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
        <div class="women_main">
            <!-- start content -->
            <div class="catalog">
                <div id="tabs" class="tabs">

                    <div class="graph">
                        <nav>
                            <ul>
                                <li class="tab-current"><a href="#section-1" class="icon-shop"><span>Update Coupon</span></a></li>
                            </ul>
                        </nav>
                        <div class="content tab">
                            <section id="section-1">
                                <form action="admin.php?c=coupon&a=update&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" method="post">
                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Code</label>
                                            <div class="col-sm-8 ctl">
                                                <input name="code" type="text" class="form-control1" id="focusedinput" value=<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Type Coupon</label>
                                            <div class="col-sm-8 ctl">
                                                <select name="type_coupon" id="field-2" required="true" class="form-control">
                                                    <?php if ($_smarty_tpl->tpl_vars['data']->value['type_coupon'] == 0) {?>
                                                    <option value=0 selected>Phần trăm</option>
                                                    <option value=1>Giá trị mặc định</option>
                                                    <?php } else { ?>
                                                    <option value=0 >Phần trăm</option>
                                                    <option value=1 selected>Giá trị mặc định</option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Value</label>
                                            <div class="col-sm-8 ctl">
                                                <input name="value" type="text" class="form-control1" id="focusedinput" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Start Date</label>
                                            <div class="col-sm-8 ctl">
                                                 <input name="start_date" type="date" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['start_date'];?>
" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
                                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">End Date</label>
                                            <div class="col-sm-8 ctl">
                                                <input name="end_date" type="date" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['end_date'];?>
"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
                                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="btn-1" align="center">
                                        <input type="submit" name="submit" value="Accept">
                                        <input type="reset" value="Cancel">
                                    </div>
                                </form>
                            </section>
                        </div><!-- /content -->
                    </div>
                    <!-- /tabs -->
                </div>
                <?php echo '<script'; ?>
 src="public/js/cbpFWTabs.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
>
                    new CBPFWTabs( document.getElementById( 'tabs' ) );
                <?php echo '</script'; ?>
>

            </div>

            <!-- end content -->
            <div class="foot-top">

                <div class="col-md-6 s-c">
                    <li>
                        <div class="fooll">
                            <h1>follow us on</h1>
                        </div>
                    </li>
                    <li>
                        <div class="social-ic">
                            <ul>
                                <li><a href="#"><i class="facebok"> </i></a></li>
                                <li><a href="#"><i class="twiter"> </i></a></li>
                                <li><a href="#"><i class="goog"> </i></a></li>
                                <li><a href="#"><i class="be"> </i></a></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                    </li>
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="footer">
                <div class="col-md-3 cust">
                    <h4>CUSTOMER CARE</h4>
                    <li><a href="contact.html">Help Center</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="details.html">How To Buy</a></li>
                    <li><a href="checkout.html">Delivery</a></li>
                </div>
                <div class="col-md-2 abt">
                    <h4>ABOUT US</h4>
                    <li><a href="products.html">Our Stories</a></li>
                    <li><a href="products.html">Press</a></li>
                    <li><a href="faq.html">Career</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </div>
                <div class="col-md-2 myac">
                    <h4>MY ACCOUNT</h4>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="checkout.html">My Cart</a></li>
                    <li><a href="checkout.html">Order History</a></li>
                    <li><a href="details.html">Payment</a></li>
                </div>
                <div class="col-md-5 our-st">
                    <div class="our-left">
                        <h4>OUR STORES</h4>
                    </div>

                    <li><i class="add"> </i>Mark peter</li>
                    <li><i class="phone"> </i>012-586987</li>
                    <li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
                </div>
                <div class="clearfix"> </div>
                <p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
}
