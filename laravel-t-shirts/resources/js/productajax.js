const xhr = new XMLHttpRequest();
        
xhr.onload = function() {
    let object = JSON.parse(this.response).sort((a, b) => b.rating - a.rating);

    for (const element in object) {
        const elementRating = object[element].rating;
        let ratingStar;

        if (elementRating === 1) {
            ratingStar = `
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>`;
        } else if (elementRating === 2) {
            ratingStar = `
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>`;
        } else if (elementRating === 3) {
            ratingStar = `
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>`;
        } else if (elementRating === 4) {
            ratingStar = `
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>`;
        } else if (elementRating === 5) {
            ratingStar = `
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>`;
        }

        const cardContent = `
            <a href="/products/` + object[element].id + `">
                <div class="img-cart">
                    <img src="` + object[element].product_images.path + `" alt="` + object[element].product_images.name + `" class="w-100 products-img">
                    <div class="p-2 block-cart">
                        <a href="#" class="btn btn-secondary btn-block">Add to Cart</a>
                    </div>
                </div>
            </a>
            <div class="row py-2">
                <div class="col-sm-8 col-7">
                    <h5>
                        <a href="/products/` + object[element].id + `" class="products-link">` + object[element].name + `</a>
                    </h5>
                </div>
                <div class="col-sm-4 col-5">
                    <h5 class="text-right">` +  object[element].currency +  object[element].price + `</h5>
                </div>
            </div>
            <div class="border-top border-dark">
                <p class="text-secondary m-0 py-2">` +  object[element].short_description + `</p>
            </div>
            <div class="row">
                <div class="col-sm-7 col-12">
                    ` + ratingStar + `
                </div>
                <div class="col-sm-5 col-12">
                    <p class="text-secondary font-italic product-text">` +  object[element].published_at + `</p>
                </div>
            </div>`;
        const cardWrapperVisible = `
            <div class="col-lg-3 col-6 py-3">
                ` + cardContent + `
            </div>`;
        const cardWrapperHidden = `
            <div class="col-lg-3 col-6 py-3 product-none-carousel">
                ` + cardContent + `
            </div>`;
        
        if (element < 2) {
            document.getElementById('item-1').innerHTML += cardWrapperVisible;
        } else if (element >= 2 && element < 4) {
            document.getElementById('item-1').innerHTML += cardWrapperHidden;
        } else if (element >= 4 && element < 6) {
            document.getElementById('item-2').innerHTML += cardWrapperVisible;
        } else if (element >= 6 && element < 8) {
            document.getElementById('item-2').innerHTML += cardWrapperHidden;
        }
    }
}

xhr.open("GET", "http://localhost:88/api/products", true);

xhr.send();
