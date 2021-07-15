<template>
    <span>{{ wishlistCount }}</span>
</template>

<script>
export default {
    name: "WishlistComponent",
    computed: {
        wishlistCount() {
            return this.$root.wishlist.length;
        }
    }
}
</script>
