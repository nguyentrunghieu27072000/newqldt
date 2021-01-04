<section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Blog</span>
          <h2 class="mb-4">{$loaitin.ten_loaitin}</h2>
        </div>
      </div>
      <div class="row">
        {foreach $ds_tin as $tin}
            <div class="col-md-3 ftco-animate">
              <div class="blog-entry">
                <a href="{$url}tintucchitiet?id={$tin.ma_tin}" class="block-20" style="background-image: url('images/{$tin.hinhanh}');">
                </a>
                <div class="text">
                  <h3 class="heading"><a href="{$url}tintucchitiet?id={$tin.ma_tin}">{$tin.tieude}</a></h3>
                </div>
              </div>
            </div>
        {/foreach}
      </div>
    </div>
  </section>

  <style type="text/css">
  .blog-entry .text{
    padding: 2px;
    height: 80px;
  }
  .blog-entry .text .heading {
    font-size: 16px;
  }
</style>