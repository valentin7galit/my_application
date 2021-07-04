<template>
    <a href="" class="button-cart btn btn-outline-secondary">
        <i class="fas fa-shopping-cart"></i>
        Cart
        <span class="number-cart badge badge-pill badge-secondary">{{cartCount}}</span>
    </a>
</template>

<script>
export default {
    name: "CartComponent",
    computed: {
        cartCount() {
            return this.$root.cart.length;
            /* const storageData = JSON.parse(localStorage.getItem('cart'));
            return storageData.length */
        }
    }
}
</script>

<style scoped>
.button-cart {
    margin-top: .10rem;
}
.button-cart:hover .number-cart {
  background-color: #fff;
  color: #6c757d;
}
</style>
