{products}
    <section id="p1-latest5" class="product_limited product-{index} product-limited-{limited_id}">
        <div class="container">
        
            <div class="row {reverse}">
                <div class="col-md-6 {index}-top">
                    <div class="product-img-area product_limited">
                        <a href="<?php echo base_url().'products/getDetail'.'?id=' ?>{build_id}" ><img src="<?php echo base_url() ?>../assets/img/builds/{pad}/1.png" alt="CGC {build_name}"></a>
                    </div>
                </div>
                <div class="col-md-6 {index}-bottom">
                    <div class="content-list-{index}-area product_limited">
                        <h5 class="list-{index}-top-title" >{pid}</h5>
                        <h2 class="{responsivefont}"> {build_name} </h2>
                        <h4> {cpu_brand} {cpu_name} {cpu_value} | {ram_value} <br> {ssd_value} SSD | {gpu_name} {gpu_value}</h4>
                        <p> Reclaim your Birthright with the MSTR by your side. Due to post-apocalyptic production difficulties, only 1000 pieces of the MSTR will be produced; each with a unique-numbered, product-edition plaque and your very own Fallout Puck </p>
                        <p>starting at <span style="font-size:24px;font-weight: bold;">${build_price}</span></p>
                        <a href="<?php echo base_url().'products/getDetail'.'?id='?>{build_id}" class="list-btn-list-latest-45"> Learn More </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
{/products}