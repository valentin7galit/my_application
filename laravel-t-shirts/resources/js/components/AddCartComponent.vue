<template>
    <a href="javascript:void(0)" @click="addToCart()" :disabled="isProductAdded()" class="btn btn-secondary btn-block">
        {{ isProductAdded() ? 'Added to cart' : 'Add to cart'}}
    </a>
</template>

<script>
    export default {
        name: "AddCartComponent",
        props: ['product_id', 'product_name', 'product_price'],
        methods: {
            addToCart() {
                this.$root.addToCart({
                    id: this.product_id, 
                    name: this.product_name,
                    price: this.product_price
                });
            },
            isProductAdded() {
                return this.$root.isProductAdded({
                    id: this.product_id, 
                    name: this.product_name,
                    price: this.product_price
                });
            }
        }
    }
</script>
