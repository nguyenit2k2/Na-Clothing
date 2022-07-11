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
                    <a href="#"><img src="{{ asset('asset/data/option14/b3.jpg') }}"alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <form action="/checkout/{{product.id}}" method="post">
    @foreach($product as $key => $product)
    <div class="main-products">
        <div class="products">
            <div class="product_img">
            <img src="../assets/images/{{$product->image}}" alt="">
            </div>
            <div class="content">
            <span>{{$product->content}}</span>
            <div class="product_info">
                <div class="price">
                <?php 
                $price = $product->product_price - $product->product_price * ($product->discount/100);
                ?>
                <span>Giá: <ins>{{number_format($price,0,',','.').' '.'VNĐ'}}</ins></span>
                @if($product->discount)
                <del>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</del>
                @endif
                </div>
                <div class="quantity">
                <span>Số lượng: <b>{{$product->quantity}}</b></span>
                </div>
                <div class="status">
                    <span>Trạng thái: {{$product->status}}</span>
                </div>
                <div class="delivery">
                    <span>Vận chuyển: Xử lý hàng bởi Shopee</span>
                </div>
                <div class="number">
                    <span>Số lượng</span><input type="number" name ="quantity" value="1">
                </div>
                <div class="add-cart">
                
                <button type="submit" class="cart" value="0">Thêm vào giỏ hàng</button>
                <button type="submit" class="buy" value="1">Mua ngay</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    </form>
    @endforeach
<div>
    </div>
<style>
    .main-products{
        width : 100%;
        background-color : #fff;
        height: 500px;
        border: 2px;
        
    }
    .products{
        width : 100%;
        height: 100%;
        padding-top: 20px;
        padding-left : 10px;
        display: flex ;
    }
    .product_img{
        width : 40%;
        height: 100%;
    }
    .products .product_img img{
        width : 95%;
        height : 95%;
        border-radius: 5px;
    }
    .content{
        padding-top: 5px;
        width : 55%;
        height: 100%;
        padding-right: 5px;
    }
    .content span{
        font-size: 22px;
        word-wrap: break-word;
        font-weight: 500;
        line-height: 1.5rem;
        font-family: Helvetica, Arial, sans-serif;
    }
    .product_info{
        padding-top: 100px;
        display: block;
    }
    .content .product_info .price ins{
        color: red;
    }
    .price{
        padding-bottom: 20px;
    }
    .quantity b{
        color : red;
    }
    .quantity{
        padding-bottom: 20px;
    }
    .status{
        padding-bottom: 20px;
    }
    .delivery{
        padding-bottom: 20px;
    }
    .number input{
        border : 1px solid #333;
        width: 40px;
    }
    .number span{
        padding-right: 15px;
    }
    .add-cart{
        padding-top: 60px;
    }
    .add-cart .cart{
        width: 200px;
        height: 50px;
        color: red;
        background-color: #f5f5f5;
        border: 1px solid red;
        margin-right: 10px;
    }
    .add-cart .buy{
        width: 200px;
        height: 50px;
        background-color : red;
        color : #fff;
    }
</style>
@endsection
