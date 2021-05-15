@include('navbar')
<style>

.form-control {
  float: right;
  padding: 6px;
  margin-top: 10px;
  font-size: 17px;
}

</style>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel" data-bs-interval="10">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

<!--Daftar Produk-->
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12 section-heading">
            <div class="row">
              <div class="col-md-8">
                <div class="">
                  <h2>Latest Products</h2>
                </div>
              </div>
              <div class="col-md-4">
                <form class="d-flex" method="GET" action="/produk">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari" >
                  <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </form>
              </div>
            </div>
          </div>
          @foreach($produk as $produks)
          <div class="col-md-4 card-produk">
            <div class="product-item">
             <img src="imgproduk/{{$produks->gambar}}" alt=""width="80px" height="250px" >
              <div class="down-content">
                <h4>{{$produks->nama}}</h4>
                <h6>@currency($produks->harga)</h6>
                  <a href="pesanan/{{$produks->produk_id}}" class="btn btn-success">Beli</a>
              </div>

            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
        <div class="container">

        </div>
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4><em>SOPANAGAMAN</em> &amp; <em>SIPALBAB</em> Products</h4>
                  <p>This Website was created for Apotek LASROHA</p>
                </div>
                <div class="col-md-4">
                  <a href="/home" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('footer')
