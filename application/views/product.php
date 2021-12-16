
    <section id="item-page-main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="product-page-design-list89798" style="font-size:80px">{build_name}</h1>
                    <h5 class="product-series-gen-model">{cpu_brand} {cpu_name} {cpu_value} | {ram_value} {ssd_value} | {gpu_name} {gpu_value}</h5>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-12 col-mg-7 col-lg-7 col-xl-7">
                    <div class="area-sectoin-rpdouct-imgaes-tab">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab-147" role="tablist">
                                <?php for ($i=1; $i < $imglength+1; $i++) { ?>
                                    <a class="nav-link<?php echo $i==1?' active':''?>" id="nav-home-tab-123" data-toggle="tab" href="#nav-contact-<?php echo $i ?>" role="tab" aria-controls="nav-contact-<?php echo $i ?>" aria-selected="true">
                                        <img src="<?php echo base_url() ?>../assets/img/builds/{pad}/<?php echo $i ?>_thumb.png" alt="Custom Gaming Computers" class="list-select-images564">
                                    </a>
                                <?php }?>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent-41">
                                <?php for ($i=1; $i < $imglength+1; $i++) { ?>
                                    <div class="tab-pane fade<?php echo $i==1?' show active':'' ?>" id="nav-contact-<?php echo $i?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <img src="<?php echo base_url() ?>../assets/img/builds/{pad}/<?php echo $i?>.png" alt="Custom Gaming Computers" class="main-item-full-image">
                                    </div>
                                <?php }?>
                        </div>    

                    </div>

                </div>

                <div class="col-sm-12 col-mg-5 col-lg-5 col-xl-5">
                    <div class="product-content-right-area8979">

                        <h2 class="title-item-girh-con101"> 
                            <span class="list-color-c-1">{build_name}</span>
                        </h2>

                        <div class="area-section-graph-list-section987">
                            <div class="row">

                                <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">

                                    <ul class="list-side-brightness-list8798" id="mobile-bluetooth-1">
                                        <li class="option[fill-build_isRGB]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isRGB == 1?'o1':'o1_off' ?>.png" alt="01"> RGB LIGHTING </li>
                                        <li class="option[fill-build_isWifi]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isWifi == 1?'o2':'o2_off' ?>.png" alt="02"> WIFI </li>
                                        <li class="option[fill-build_isBluetooth]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isBluetooth == 1?'o3':'o3_off' ?>.png" alt="03"> BLUETOOTH </li>
                                        <li class="option[fill-build_isUSBC]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isUSBC == 1?'o4':'o4_off' ?>.png" alt="04"> USB-C </li>
                                        <li class="option[fill-build_isVRReady]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isVRReady == 1?'o5':'o5_off' ?>.png" alt="05"> VR READY </li>
                                        <li class="option[fill-build_isStreamReady]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isStreamReady == 1?'o6':'o6_off' ?>.png" alt="06"> STREAM READY </li>
                                    </ul>

                                    <div class="graph-main123">

                                        <ul class="cpu-coder-list-sectoi798 tab-item">
                                            <li class="tablinks-item active">  CPU <br><span>{cpu_brand} {cpu_name} {cpu_value}</span></li>
                                            <li class="tablinks-item">  Case <br><span>{case_brand} {case_name} {case_value}<span></li>
                                            <li class="tablinks-item">  Graphics <br><span>{gpu_brand} {gpu_name} {gpu_value}<span></li>
                                            <li class="tablinks-item">  Motherboard <br><span>{mother_brand} {mother_name} {mother_value}<span></li>
                                            <li class="tablinks-item">  RAM <br><span>{ram_brand} {ram_name} {ram_value}<span></li>
                                            <li class="tablinks-item active">  CPU Cooling <br><span><span></li>
                                            <li class="tablinks-item">  Storage <br><span>{ssd_value}<span></li>
                                            <li class="tablinks-item">  Power Supply <br><span>{psu_brand} {psu_name} {psu_value}<span></li>
                                            <li class="tablinks-item">  Accessories <br><span><span></li>
                                            <li class="tablinks-item">  Software <br><span>{case_brand} {case_name} {case_value}<span></li>
                                            <li class="tablinks-item">  Warranty <br><span>{warranty_brand} {warranty_name} {warranty_value}<span></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3" id="list-4575">
                                    <ul class="list-side-brightness-list8798" id="desk-bluetooth-1">
                                        <li class="option[fill-build_isRGB]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isRGB == 1?'o1':'o1_off' ?>.png" alt="01"> RGB LIGHTING </li>
                                        <li class="option[fill-build_isWifi]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isWifi == 1?'o2':'o2_off' ?>.png" alt="02"> WIFI </li>
                                        <li class="option[fill-build_isBluetooth]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isBluetooth == 1?'o3':'o3_off' ?>.png" alt="03"> BLUETOOTH </li>
                                        <li class="option[fill-build_isUSBC]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isUSBC == 1?'o4':'o4_off' ?>.png" alt="04"> USB-C </li>
                                        <li class="option[fill-build_isVRReady]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isVRReady == 1?'o5':'o5_off' ?>.png" alt="05"> VR READY </li>
                                        <li class="option[fill-build_isStreamReady]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $build_isStreamReady == 1?'o6':'o6_off' ?>.png" alt="06"> STREAM READY </li>
                                    </ul>
                                </div>

                            </div> 
                            
                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="list-item-80890-item-656" id="for-desk78">
                                        <h3 class="prices-setting-item-5"> <sup> $ </sup>{build_price}</h3>
                                        
										<a class="cart-btn-list-89798764" onclick="addCart()" style="text-decoration:none;cursor:pointer;"> Add to Cart </a>
                                        
                                        <p class="finance-list-89798654313-056"> <a href="<?php echo base_url() ?>admin/cart" class="avail-finance1250"> Financing Available </a>
										</p>                                     
                                    </div>
                                </div>

                            </div>
                            
                            
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <section id="game-section-for-desktop">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="desk-game-name-ing654654">
                        <img src="<?php echo base_url() ?>../assets/img/item/d/1.png" alt="d1">
                        <h5> {build_fortnitefps} FPS @ 1080p </h5>
                        <h5> {build_fortnitefps} FPS @ 1440p </h5>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="desk-game-name-ing654654">
                        <img src="<?php echo base_url() ?>../assets/img/item/d/2.png" alt="d1">
                        <h5> {build_csfps} FPS @ 1080p </h5>
                        <h5> {build_csfps} FPS @ 1440p </h5>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="desk-game-name-ing654654">
                        <img src="<?php echo base_url() ?>../assets/img/item/d/3.png" alt="d1">
                        <h5> {build_lolfps} FPS @ 1080p </h5>
                        <h5> {build_lolfps} FPS @ 1440p </h5>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="games-sectoin-for-mobile-list997">
        
        <div class="list-1-mob-g-1">
            <div class="container">
                <div class="row">
                    <div class="col"> <img src="<?php echo base_url() ?>../assets/img/item/m/1.png" alt="m1"> </div>
                    <div class="col"> <h5> 101 FPS @ 1080p <br> 64 FPS @ 1440p </h5> </div>
                </div>
            </div>
        </div>

        <div class="list-2-mob-g-2">
            <div class="container">
                <div class="row">
                    <div class="col"> <img src="<?php echo base_url() ?>../assets/img/item/m/2.png" alt="m2"> </div>
                    <div class="col"> <h5> 217 FPS @ 1080p <br> 196 FPS @ 1440p </h5> </div>
                </div>
            </div>
        </div>

        <div class="list-1-mob-g-1">
            <div class="container">
                <div class="row">
                    <div class="col"> <img src="<?php echo base_url() ?>../assets/img/item/m/3.png" alt="m3"> </div>
                    <div class="col"> <h5> 184 FPS @ 1080p <br> 176 FPS @ 1440p </h5> </div>
                </div>
            </div>
        </div>

    </section>

<script>
    
    function addCart() {

        // alert({build_price});
        // console.log(stored_datas);
        // localStorage.removeItem("cart");
        var carttemp = [];
        if(localStorage['cart'] == null){
            console.log('null');
            carttemp.push(JSON.stringify({"front_variant_id": "{front_variant_id}","build_id": "{build_id}","build_name": "{build_name}","build_price":"{build_price}", "quantity": "1"}));
            localStorage['cart'] = JSON.stringify(carttemp);
        }else{
            carttemp = JSON.parse(localStorage['cart']);
            console.log(carttemp);
            var count = 0;
            for (let i = 0; i < carttemp.length; i++) {
                const element = JSON.parse(carttemp[i]);
                if(element.front_variant_id == '{front_variant_id}'){
                    count++;
                    console.log('==');
                    element.quantity = (parseInt(element.quantity) + 1).toString();
                    carttemp[i] = JSON.stringify(element);
                }
            }
            if (count == 0) {
                carttemp.push(JSON.stringify({front_variant_id: '{front_variant_id}',"build_id": "{build_id}","build_name": "{build_name}","build_price":"{build_price}", "quantity": "1"}));
            }                
        };
        $('#ulcontent').html('');
        for (let i = 0; i < carttemp.length; i++) {
            const element = JSON.parse(carttemp[i]);
            
            $('#ulcontent').append(
                `<li class="py-6" style="border-bottom:1px lightgray solid;">
                    <div class="flex flex-row space-x-4 lg:space-x-8">
                    <div class="w-16 h-16 relative overflow-hidden">
                        <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;">
                        <div style="box-sizing: border-box; display: block; max-width: 100%;">
                            <img alt="" aria-hidden="true" src="<?php echo base_url() ?>../assets/img/builds/`+element.build_id.padStart(4, '0')+`/1.png" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                        </div>
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col text-base" style="margin-left: 7%;">
                        <span class="font-bold mb-5 text-sm md:text-base lg:text-lg text-nzxt-light-grey-800" style="height:50%;margin-bottom: 0px!important;margin-top:10px;">`+element.build_name+`</span>
                        <div class="flex items-center border rounded-lg max-w-min text-nzxt-light-grey-600" style="margin-left: 5%;margin-right: 5%; height: 40px;">
                        <div class="CartItem_counter__G-nyO">
                            <button type="button" aria-label="Decrease quantity by one" onclick="decreaseQuantity('`+element.front_variant_id+`');" id="decrease-starter-pro-white-white-cart" style="letter-spacing: normal;text-indent: 0px;border:0;text-shadow: none;display: inline-block; text-align: center;align-items: flex-start; word-spacing: normal;" class="p-1">-</button>
                            <div class="w-8 relative overflow-hidden">
                            <div class="flex h-full relative w-full CartItem_counterInput__pJCfZ">
                                <input aria-label="Manually enter quantity" id="starter-pro-white-white-cart-amount`+element.front_variant_id+`" type="number" inputmode="numeric" min="1" max="99" class="CartItem_quantity__27UMa" value="`+element.quantity+`">
                            </div>
                            </div>
                            <button type="button" aria-label="Increase quantity by one" onclick="increaseQuantity('`+element.front_variant_id+`');" id="increase-starter-pro-white-white-cart" style="letter-spacing: normal;text-indent: 0px;border:0;text-shadow: none;display: inline-block; text-align: center;align-items: flex-start; word-spacing: normal;"  class="p-1">+</button>
                        </div>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between space-y-2 text-base" style="margin-left: 12%;align-items: flex-end;">
                        <button type="button" class="flex justify-end" onclick="removeCartItem('`+element.front_variant_id+`');$(this).parent().parent().remove();" id="starter-pro-white-white-remove-cart" aria-label="Remove From Cart">
                        <svg viewBox="0 0 64 64" width="1em" height="1em" class="h-6 w-6 text-nzxt-light-grey-800"><path d="M42.4 57H21.6c-2.1 0-3.8-1.6-4-3.6L15 23h34l-2.6 30.4c-.2 2-1.9 3.6-4 3.6zM32 53c1.1 0 2-.9 2-2V29c0-1.1-.9-2-2-2s-2 .9-2 2v22c0 1.1.9 2 2 2zm8 0c1.1 0 2-.9 2-2V29c0-1.1-.9-2-2-2s-2 .9-2 2v22c0 1.1.9 2 2 2zm-16 0c1.1 0 2-.9 2-2V29c0-1.1-.9-2-2-2s-2 .9-2 2v22c0 1.1.9 2 2 2zm27-33H13v-3.7c0-1.3 1-2.3 2.3-2.3h33.4c1.3 0 2.3 1 2.3 2.3V20zm-10.6-2.1H23.6V9.1c0-1.1.9-2 2-2h12.7c1.1 0 2 .9 2 2v8.8h.1zm-13-3.8h9.3v-3.3h-9.3v3.3z" fill="currentColor"></path></svg>
                        </button>
                        <div class="flex flex-col">
                        <span class="text-sm text-nzxt-light-grey-500" id="starter-pro-white-white-cart-price">$`+element.build_price+`</span>
                        <span class="hidden" id="starter-pro-white-white-cart-discount-price">$1,399.00</span>
                        </div>
                    </div>
                    </div>
                </li>`
            );
        }
        $('#rightpanel').attr('style','right:0px');
        $("#displayopacity").attr('style','display:block;');

        localStorage['cart'] = JSON.stringify(carttemp);
        doTotalPrice();
    }
</script>


