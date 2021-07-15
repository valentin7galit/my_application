<template>
    <div class="container py-3 bg-white">
        <h1>Your Cart ({{ cartCount }})</h1>
        <div v-if="cartCount === 0">
            <h3 class="border-top border-secondary py-2">No Products in the Cart</h3>
        </div>
        <div v-else>
            <div class="row">
                <div class="col-md-8 col-12">
                    <!-- <p>{{ cartObjects }}</p> -->
                    <h3 class="border-top border-secondary py-2">Products</h3>
                    <div v-for="(element, index) in cartObjects" :key="element.id">
                        <div class="row pb-4">
                            <div class="col-2">
                                <a :href="'/products/' + element.id">
                                    <img :src="element.images" :alt="element.images_name" class=" w-100">
                                </a>
                            </div>
                            <div class="col-2">
                                <p class="py-1">
                                    <a :href="'/products/' + element.id" class="products-link">{{ element.name }}</a>
                                </p>
                            </div>
                            <div class="col-2">
                                <p>{{ element.size }}</p>
                            </div>
                            <div class="col-2">
                                <p>{{ element.quantity }}</p>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-secondary w-100 p-1" @click="deleteProduct(index)">remove</button>
                            </div>
                            <div class="col-2 text-right">
                                <p class="py-1">${{ productPrice[index] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="border-top border-secondary"></div>
                    <div class="row">
                        <div class="col-7">
                            <h3 class="py-2">Subtotal</h3>
                        </div>
                        <div class="col-5 text-right">
                            <h3 class="py-2">${{ subtotalPrice }}</h3>
                        </div>
                        <div class="col-7">
                            <h5 class="py-2">Standard Delivery</h5>
                        </div>
                        <div class="col-5 text-right">
                            <h5 class="py-2">$5.00</h5>
                        </div>
                    </div>
                    <div class="border-top border-secondary"></div>
                    <div class="row">
                        <div class="col-7">
                            <h3 class="py-2">Total<br>
                                <span class="h6">(22% TVA included)</span></h3>
                        </div>
                        <div class="col-5 text-right">
                            <h3 class="py-2">${{ totalePrice }}</h3>
                        </div>
                    </div>
                    <button class="btn btn-secondary w-100">Proceed to purchase</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ShowCartComponent",
    data() {
        return {
            deliveryPrice: 5
        }
    },
    computed: {
        cartCount() {
            return this.$root.cart.length;
        },
        cartObjects() {
            return this.$root.cart;
        },
        productPrice() {
            let cartPrice = [];
            
            this.cartObjects.forEach(element => {
                cartPrice.push(element.price * element.quantity);
            });
            
            return cartPrice;
        },
        subtotalPrice() {
            const subtotal = this.productPrice.reduce((accumulator, value) => accumulator + value);

            return subtotal.toFixed(2);
        },
        totalePrice() {
            const total = Number(this.subtotalPrice) + this.deliveryPrice;
            
            return total.toFixed(2);
        }
    },
    methods: {
        deleteProduct(productIndex) {
            this.$root.cart.splice(productIndex, 1);
            
            localStorage.setItem('cart', JSON.stringify(this.$root.cart));
        },
        onChange(value) {
            console.log(value)
        }
    }
}
</script>
