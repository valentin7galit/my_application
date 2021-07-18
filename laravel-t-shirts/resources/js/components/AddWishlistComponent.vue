<template>
    <a href="javascript:void(0)" @click="addToWishlist()" :disabled="isProductAddedToWishlist()" class="btn btn-secondary btn-block">
        {{ isProductAddedToWishlist() ? 'Added to wishlist' : 'Add to wishlist'}}
    </a>
</template>

<script>
    export default {
        name: "AddWishlistComponent",
        props: [
            'product_id', 
            'product_img', 
            'product_img_name', 
            'product_name', 
            'product_price'
        ],
        methods: {
            addToWishlist() {
                this.$root.addToWishlist({
                    id: this.product_id,
                    images: this.product_img,
                    images_name: this.product_img_name,
                    name: this.product_name,
                    price: this.product_price
                });
            },
            isProductAddedToWishlist() {
                return this.$root.isProductAddedToWishlist({
                    id: this.product_id,
                    images: this.product_img,
                    images_name: this.product_img_name,
                    name: this.product_name,
                    price: this.product_price
                });
            }
        }
    }
</script>
