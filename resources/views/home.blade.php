@extends('layout')
@section('content')
<div class="container">
    <div class="block-group-banner-top">
        <div class="row">
            <div class="col-sm-4">
                <div class="item banner-img">
                    <a href="#"><img src="{{ asset('asset/data/option14/b1.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item banner-img">
                    <a href="#"><img src="{{ asset('asset/data/option14/b2.jpg') }}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item banner-img">
                    <a href="#"><img src="{{ asset('asset/data/option14/b3.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="block-tab-category14">
        <div class="head">
            <span class="bar"><i class="fa fa-bars"></i></span>
            <ul class="box-tabs nav-tab">   
                <li class="active"><a data-toggle="tab"><a href="">Sản phẩm mới</a></li></a>
                <li ><a data-toggle="tab"><a href="">Đang giảm giá</a></a></li>
                <li ><a data-toggle="tab"> <a href="">Mua Nhiều</a></li></a>
            </ul>
            <a class="link-all" href="all.html">Xem tất cả</a>
        </div>
        <div class="tab-container">
            <div id="tab-1" class="tab-panel active">
                <div class="row">
                    @foreach ($product as $key => $product) 
                    <div class="col-md-3">
                        <div class="product-style4">
                            <div class="product-thumb">
                                <a href="#">
                                    <img href="/product/{{$product->product_id}}" class="primary_image" src="{{ asset('asset/images/{{$product->image}}') }}" alt="">
                                    <!-- <img class="secondary_image" src="{{ asset('asset/data/option14/p12.jpg" alt=""> -->
                                </a>
                                <a href="/product/{{$product->product_id}}" class="btn-add-to-cart">Xem</a>
                            </div>
                            <div class="product-info">
                                <h4 class="product-name"><a href="/product/{{$product->product_id}}" >{{$product->product_name}}</a></h4>
                                <span class="price">
                                    <ins>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</ins>
                                    <?php 
                                    $total = ($product->product_price * $product->discount)/100;
                                    $discount = $product->product_price - $total ;
                                    ?>
                                    <del>{{number_format($discount,0,',','.').' '.'VNĐ'}}</del>
                                    
                                </span>
                            </div>
                            @if ($product->status)
                            <span class="status sale">{{$product->status}}</span>
                            @endif
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


<div class="container">
    <div class="block-top-brands2">
        <h2 class="title">Sản phẩm bán chạy</h2>
        <div class="tab-container brand-products">
            <div id="brand1" class="tab-panel active">
                <ul class="list-bran-product">
                    <li class="product-style4 col-md-3">
                        <div class="product-thumb">
                            <a href="#">
                                <img class="primary_image" src="{{ asset('asset/data/option14/p1.jpg') }}" alt="">
                                <!-- <img class="secondary_image" src="{{ asset('asset/data/option14/p12.jpg" alt=""> -->
                            </a>
                            <a href="#" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="#">Áo Thun Cigu</a></h4>
                            <span class="price">
                                <ins>500.000 đ</ins>
                                <del>501.000 đ</del>
                            </span>
                        </div>
                        <span class="status sale">Sale</span>
                    </li>
                    <li class="product-style4 col-md-3">
                        <div class="product-thumb">
                            <a href="#">
                                <img class="primary_image" src="{{ asset('asset/data/option14/p2.jpg') }}" alt="">
                                <!-- <img class="secondary_image" src="{{ asset('asset/data/option14/p11.jpg" alt=""> -->
                            </a>
                           
                            <a href="#" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="#">Đồng Hồ OV</a></h4>
                            <span class="price">
                                <ins>10.693.000 đ</ins>
                                <del>11.000.000 đ</del>
                            </span>
                        </div>
                        <span class="status sale">Sale</span>
                    </li>
                    <li class="product-style4 col-md-3">
                        <div class="product-thumb">
                            <a href="#">
                                <img class="primary_image" src="{{ asset('asset/data/option14/p3.jpg') }}" alt="">
                                <!-- <img class="secondary_image" src="{{ asset('asset/data/option14/p10.jpg" alt=""> -->
                            </a>
                           
                            <a href="#" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="#">Mũ Zalo</a></h4>
                            <span class="price">
                                <ins>100.000 đ</ins>
                                <del>120.000 đ</del>
                            </span>
                        </div>
                    </li>
                    <li class="product-style4  col-md-3">
                        <div class="product-thumb">
                            <a href="#">
                                <img class="primary_image" src="{{ asset('asset/data/option14/p4.jpg') }}" alt="">
                                
                            </a>
                           
                            <a href="#" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="#">Áo Sọc</a></h4>
                            <span class="price">
                               <ins>1.000 đ</ins>
                                <del>1.200 đ</del>
                            </span>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
        <br/>
    </div>
    
</div>


<div class="container">
    <div class="block-top-brands2">
        <h2 class="title">Sản phẩm bán chạy</h2>
        <div class="tab-container brand-products">
            <div id="brand1" class="tab-panel active">
                <ul class="list-bran-product">
                    <li class="product-style4 col-md-3">
                        <div class="product-thumb">
                            <a href="#">
                                <img class="primary_image" src="{{ asset('asset/data/option14/p1.jpg') }}" alt="">
                                <!-- <img class="secondary_image" src="{{ asset('asset/data/option14/p12.jpg" alt=""> -->
                            </a>
                            <a href="#" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="#">Áo Thun Cigu</a></h4>
                            <span class="price">
                                <ins>500.000 đ</ins>
                                <del>501.000 đ</del>
                            </span>
                        </div>
                        <span class="status sale">Sale</span>
                    </li>
                    <li class="product-style4 col-md-3">
                        <div class="product-thumb">
                            <a href="#">
                                <img class="primary_image" src="{{ asset('asset/data/option14/p2.jpg') }}" alt="">
                                <!-- <img class="secondary_image" src="{{ asset('asset/data/option14/p11.jpg" alt=""> -->
                            </a>
                           
                            <a href="#" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="#">Đồng Hồ OV</a></h4>
                            <span class="price">
                                <ins>10.693.000 đ</ins>
                                <del>11.000.000 đ</del>
                            </span>
                        </div>
                        <span class="status sale">Sale</span>
                    </li>
                    <li class="product-style4 col-md-3">
                        <div class="product-thumb">
                            <a href="#">
                                <img class="primary_image" src="{{ asset('asset/data/option14/p3.jpg') }}" alt="">
                                <!-- <img class="secondary_image" src="{{ asset('asset/data/option14/p10.jpg" alt=""> -->
                            </a>
                           
                            <a href="#" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="#">Mũ Zalo</a></h4>
                            <span class="price">
                                <ins>100.000 đ</ins>
                                <del>120.000 đ</del>
                            </span>
                        </div>
                    </li>
                    <li class="product-style4  col-md-3">
                        <div class="product-thumb">
                            <a href="#">
                                <img class="primary_image" src="{{ asset('asset/data/option14/p4.jpg') }}" alt="">
                                
                            </a>
                           
                            <a href="#" class="btn-add-to-cart">Xem</a>
                        </div>
                        <div class="product-info">
                            <h4 class="product-name"><a href="#">Áo Sọc</a></h4>
                            <span class="price">
                               <ins>1.000 đ</ins>
                                <del>1.200 đ</del>
                            </span>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>
        <br/>
    </div>
    
</div>

@endsection
