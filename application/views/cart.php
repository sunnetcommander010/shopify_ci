<section id="cart-main-page-list-area98789798">

    <div class="top-cart-section-list987987654">
        <div class="container">
            <div class="cart_sidebar" role="complementary">
                <div class="sidebar__content">
                    <div id="order-summary" class="order-summary order-summary--is-collapsed" data-order-summary>
                        <h2 class="visually-hidden-if-js"
                            style="    font-family: Open Sans, sans-serif;font-size: 1.2857142857em;line-height: 1.3em;">
                            Order summary</h2>

                        <div class="cart-order-summary__sections">
                            <div class="order-summary__section order-summary__section--product-list">
                                <div class="order-summary__section__content">
                                    {carts}
                                    <table class="product-table">
                                        <tbody data-order-summary-section="line-items">
                                            <tr class="product" data-product-id="3570732236880"
                                                data-variant-id="28211554287696" data-product-type="Cases"
                                                data-customer-ready-visible>
                                                <td width="5%" class="product__image">
                                                    <div class="product-thumbnail ">
                                                        <div class="product-thumbnail__wrapper">
                                                            <img width=55 class="product-thumbnail__image"
                                                                src="<?php echo base_url() ?>../assets/img/builds/{pad}/1_thumb.png" />
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart-product__description" width="50%" scope="row">
                                                    <span class="product__description__name order-summary__emphasis">CGC
                                                        {build_name}</span>
                                                    <span
                                                        class="product__description__variant order-summary__small-text">{cpu_brand}
                                                        {cpu_name} {cpu_value} | {ram_value}
                                                        {ssd_value} SSD | {gpu_brand} {gpu_name} {gpu_value}</span>
                                                </td>
                                                <td class="product__quantity visually-hidden" width="5%">
                                                    <input value="{cart}" style="width:45px;text-align: center;" />
                                                </td>
                                                <td class="product__price" width="15%">
                                                    <span class="order-summary__emphasis" style="padding-right:10px">$
                                                        {build_price}</span><a href="<?php echo base_url() ?>admin/cart/delete?build_id={build_id}&cart={cart}" class="cart-delete-button"
                                                        style="text-decoration:none;">x</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    {/carts}
                                </div>
                            </div>
                            <br />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3" style="text-align:right">Shipping</div>
                        <div class="col-md-3" style="text-align:right">Always Free</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3" style="text-align:right; font-weight:bold; color:#F25E20">Total</div>
                        <div class="col-md-3" style="text-align:right; font-weight:bold; color:#F25E20">$ {total_price}</div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3" style="text-align:right; font-weight:bold; color:#F25E20"></div>
                        <div class="col-md-3" style="text-align:right; font-weight:bold; color:#F25E20">
                            <input type="button" id="checkoutbtn" class="btn btn-primary" value="CHECKOUT"/> 
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="list-purchase-protected-979879">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-protected-listing-are979-cart">
                        <li> Purchase protected by </li>
                        <li> <img src="<?php echo base_url() ?>../assets/img/cart/l1.png" alt="l1"> </li>
                        <li> <a href="#"> Learn More </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <h3 class="but-with-confidence-list-ares979879"> BUY WITH CONFIDENCE </h3>

    <div class="last-privacy-section-protection-area987">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="area-list-number-cart987">
                        <h6> Return Policy </h6>
                        <p>
                            If you’re not happy with your purchase, rest assured, we offer a 30 day return policy that
                            starts from the day you receive your computer. Every desktop ships with a standard 3 year
                            limited warranty backed with lifetime U.S. based toll free technical support.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="area-list-number-cart987">
                        <h6> Secure </h6>
                        <p>
                            All of your information that is submitted over the web to our secure server is protected
                            with a industry safe 128 bit encryption code and backed with $250,000 consumer protection.
                            All of our servers are certified with a SSL (Secure Server Certificate) and scanned and
                            certified daily by McAfee's HackerSafe service.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="area-list-number-cart987">
                        <h6> Privacy </h6>
                        <p>
                            Custom Gaming Computers values your privacy. We will never share, sell, or rent any of your
                            personal information to any outside party. For more information about how we handle your
                            information, please view our <a href="#"> Privacy Policy. </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<script>
    $(function(){
        $('#checkoutbtn').click(function(){



            var param = 'mutation { checkoutCreate(input: { lineItems: [';
            {carts}
                param += '{ variantId: "{front_variant_id}" , quantity: {cart} },'; 
            {/carts}
            param += ' ] }) { checkout { id webUrl lineItems(first: 5) { edges { node { title quantity } } } } } }';

            $.ajax({
                "type": "post",
                "url": "<?php base_url() ?>cart/makecheckout",
                "Content-Type": "application/json",
                "data": {
                    "param": param,
                },
                success: function(data){
                    var result = JSON.parse(data);
                    window.open(result['success']);
                }
            });
        });
    });
</script>