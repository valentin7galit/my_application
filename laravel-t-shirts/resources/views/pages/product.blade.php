@extends('layouts')

@section('title')
    Blog
@endsection

@section('content')
    <div class="container">
        <div class="row product-position">
            <div class="col-lg-7 border border-danger bbb">
                <img src="../img/products/men-01.jpg" alt="Produs One" class="w-100">
                <div class="py-2">
                    <img src="../img/products/men-01-0.jpg" alt="Produs One" class="w-100 img-product-secund">
                </div>
                <div>
                    <img src="../img/products/men-01-1.jpg" alt="Produs One" class="w-100 img-product-secund">
                </div>
                <div class="py-2">
                    <img src="../img/products/men-01-2.jpg" alt="Produs One" class="w-100 img-product-secund">
                </div>
            </div>
            <div class="col-lg-5 border border-danger product-sticky">
                <h2>SQL Database</h2>
                <div class="row">
                    <div class="col-6">
                        <h5 class="">$16.95</h5>
                    </div>
                    <div class="col-6 text-right">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div>
                    <img src="../img/products/men-01.jpg" alt="Produs One" class="sing-product-img">
                </div>
                <div>
                    <h5 class="border-top border-secondary">Size</h5>
                    <div class="radio-size row">
                        <div class="col-2">
                            <input type="radio" id="xs" name="Size" value="xs">
                            <label for="xs" class="btn btn-outline-secondary size-product p-2">XS</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="s" name="Size" value="s">
                            <label for="s" class="btn btn-outline-secondary size-product p-2">S</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="m" name="Size" value="m">
                            <label for="m" class="btn btn-outline-secondary size-product p-2">M</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="l" name="Size" value="l">
                            <label for="l" class="btn btn-outline-secondary size-product p-2">L</label>
                        </div>
                        <div class="col-2">
                            <input type="radio" id="xl" name="Size" value="xl">
                            <label for="xl" class="btn btn-outline-secondary size-product p-2">XL</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <select class="form-control p-2 btn btn-outline-secondary">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-10">
                        <button type="button" class="btn btn-secondary btn-block">Add to Cart</button>
                    </div>
                </div>
                <div>
                    <h5 class="border-top border-secondary">Description</h5>
                    <p>Graphic T-Shirt, designed by OoyootBespredel</p>
                    <p><span class="font-weight-bold">Code: </span>0A2BPR433</p>
                    <p><span class="font-weight-bold">Colour: </span>White</p>
                    <p><span class="font-weight-bold">Product Date: </span>20.04.2021</p>
                </div>
            </div>
        </div>
        <div class="">
            <h2>Features</h2>
            <ul>
                <li>Just your everyday smooth, comfy tee, a wardrobe staple</li>
                <li>Slim fit, so size up if you prefer a looser fit, or check out the Classic T-Shirt</li>
                <li>Male model shown is 6'0" / 183 cm tall and wearing size Large</li>
                <li>Female model shown is 5'8" / 173 cm tall and wearing size Small</li>
                <li>Midweight 4.2 oz. / 145 gsm fabric, solid color t-shirts are 100% cotton, heather grey t-shirts are 90% cotton/10% polyester charcoal heather t-shirts are 52% cotton/48% polyester</li>
            </ul>
        </div>
@endsection