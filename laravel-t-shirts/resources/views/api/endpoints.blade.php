@extends('layouts')

@section('title')
    Api
@endsection

@section('content')
    <div class="container py-3 bg-white">
        <h1 class="py-2">Rest API</h1>
    </div>
    <div class="container py-3 bg-white">
        <h2 class="py-2 border-bottom border-secondary">Blog:</h2>
        <h4>Articles</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of articles</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-warning btn-block text-white">POST</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog</p>
            </div>
            <div class="col-3">
                <p class="p-2">Create a new article</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/articles/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a article by its ID</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-success btn-block">PUT</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/articles/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Update an existing article</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-danger btn-block">DELETE</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/articles/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Delete an existing article</p>
            </div>
        </div>
        <h4>Authors</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/authors/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a author by its ID</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-danger btn-block">DELETE</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/authors/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Delete an existing author</p>
            </div>
        </div>
        <h4>Categories</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/categories/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a category by its ID</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-danger btn-block">DELETE</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/categories/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Delete an existing category</p>
            </div>
        </div>
        <h4>Tags</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/tags/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a tag by its ID</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-danger btn-block">DELETE</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/tags/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Delete an existing tag</p>
            </div>
        </div>
        <h4>Images</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/images/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a image by its ID</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-danger btn-block">DELETE</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/images/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Delete an existing image</p>
            </div>
        </div>
        <h4>Galleries</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/galleries/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a gallery by its ID</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-danger btn-block">DELETE</p>
            </div>
            <div class="col-7">
                <p class="p-2">/blog/galleries/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Delete an existing gallery</p>
            </div>
        </div>
        <h2 class="py-2 border-bottom border-secondary">Products:</h2>
        <h4>All</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of products</p>
            </div>
        </div>
        <h4>Mens</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/mens</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of products mens</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-warning btn-block text-white">POST</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/mens</p>
            </div>
            <div class="col-3">
                <p class="p-2">Create a new product men</p>
            </div>
        </div>
        <h4>Women</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/women</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of products women</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-warning btn-block text-white">POST</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/women</p>
            </div>
            <div class="col-3">
                <p class="p-2">Create a new product woman</p>
            </div>
        </div>
        <h4>Kids</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/kids</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of products kids</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-warning btn-block text-white">POST</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/kids</p>
            </div>
            <div class="col-3">
                <p class="p-2">Create a new product kid</p>
            </div>
        </div>
        <h4>Products</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a product by its ID</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-success btn-block">PUT</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Update an existing product</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-danger btn-block">DELETE</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Delete an existing product</p>
            </div>
        </div>
        <h4>Colours</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/colours/all</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of colours</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/colours/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a colour by its ID</p>
            </div>
        </div>
        <h4>Galleries</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/galleries/all</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of galleries</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/galleries/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a gallery by its ID</p>
            </div>
        </div>
        <h4>Images</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/images/all</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of images</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/images/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a image by its ID</p>
            </div>
        </div>
        <h4>Sizes</h4>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/sizes/all</p>
            </div>
            <div class="col-3">
                <p class="p-2">Get list of sizes</p>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p class="p-2 btn btn-primary btn-block">GET</p>
            </div>
            <div class="col-7">
                <p class="p-2">/products/sizes/{id}</p>
            </div>
            <div class="col-3">
                <p class="p-2">Find a size by its ID</p>
            </div>
        </div>
    </div>
@endsection
