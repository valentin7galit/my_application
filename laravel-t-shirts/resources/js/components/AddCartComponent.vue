<template>
    <div class="py-2 border-bottom border-secondary">
        <h5 class="">Size</h5>
        <div class="radio-size row">
            <div v-for="element_size in product_size" :key="element_size.id" class="col-2">
                <input v-model="selectedSize" @change="onChange(element_size.id)" type="radio" :id="element_size.name.toLowerCase()" name="Size" :value="element_size.name">
                <label :for="element_size.name.toLowerCase()" class="btn btn-outline-secondary size-product p-2">{{ element_size.name }}</label>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <select v-model="selectedQuantity" class="form-control p-2 btn btn-outline-secondary">
                        <option v-for="number in totalStock" :key="number.id" :value="number">{{ number }}</option>
                    </select>
                </div>
            </div>
            <div class="col-10">
                <button  @click="addToCart()" :disabled="isSizeSelected(selectedSize) || isProductAdded()" class="btn btn-secondary btn-block">
                    {{ isProductAdded() ? 'Added to cart' : 'Add to cart'}}
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddCartComponent",
        props: [
            'product_id', 
            'product_img', 
            'product_img_name', 
            'product_name', 
            'product_price',
            'product_size',
            'product_size_stock'
        ],
        data() {
            return {
                selectedSize: null,
                selectedQuantity: 1,
                totalStock: 1
            }
        },
        methods: {
            addToCart() {
                this.$root.addToCart({
                    id: this.product_id,
                    images: this.product_img,
                    images_name: this.product_img_name,
                    name: this.product_name,
                    price: this.product_price,
                    size: this.selectedSize,
                    quantity: this.selectedQuantity
                });
            },
            isProductAdded() {
                return this.$root.isProductAdded({
                    id: this.product_id,
                    images: this.product_img,
                    images_name: this.product_img_name,
                    name: this.product_name,
                    price: this.product_price,
                    size: this.selectedSize,
                    quantity: this.selectedQuantity
                });
            },
            onChange(sizeId) {
                this.product_size_stock.forEach(element => {
                    if (element.size_id === sizeId) {
                        this.totalStock = element.total_stock;
                    }
                });
            },
            isSizeSelected(valueSize) {
                if (valueSize === null) {
                    return true;
                }

                return false;
            }
        }
    }
</script>
