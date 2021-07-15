<template>
    <span class="number-cart badge badge-pill badge-secondary">{{cartCount}}</span>
</template>

<script>
export default {
    name: "CartComponent",
    computed: {
        cartCount() {
            return this.$root.cart.length;
        }
    }
}
</script>
