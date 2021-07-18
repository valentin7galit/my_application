<template>
    <div class="container py-3 bg-white">
        <h1>Your Wishlist ({{ wishlistCount }})</h1>
        <div v-if="wishlistCount === 0">
            <h3 class="border-top border-secondary py-2">No Products in the Wishlist</h3>
        </div>
        <div v-else class="border-top border-secondary py-2">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 py-2" v-for="(element, index) in wishlistArray" :key="element.id"> 
                    <img :src="element.images" :alt="element.images_name" class=" w-100">
                    <div class="py-1">
                        <p class="text-center">{{ element.name }}</p>
                        <p class="text-center font-weight-bold">${{ element.price }}</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a :href="'/products/' + element.id" class="btn btn-secondary w-100">View the product</a>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-secondary w-100" @click="deleteProduct(index)">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShowWishlistComponent",
    computed: {
        wishlistCount() {
            return this.$root.wishlist.length;
        },
        wishlistArray() {
            return this.$root.wishlist;
        }
    },
    methods: {
        deleteProduct(productIndex) {
            this.$root.wishlist.splice(productIndex, 1);
            
            localStorage.setItem('wishlist', JSON.stringify(this.$root.wishlist));
        }
    }
}
</script>
