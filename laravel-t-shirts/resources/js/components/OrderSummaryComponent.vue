<template>
    <div class="col-md-4 col-12">
        <div class="border-top border-secondary"></div>
        <h3 class="py-2">Order Summary</h3>
        <div class="pb-4 row" v-for="(element, index) in cartArray" :key="element.id">
            <div class="col-4">
                <a :href="'/products/' + element.id">
                    <img :src="element.images" :alt="element.images_name" class=" w-100">
                </a>
            </div>
            <div class="col-8">
                <span class="font-weight-bold">
                    <a :href="'/products/' + element.id" class="products-link">{{ element.name }}</a>
                </span><br>
                <span>Size: {{ element.size }}</span><br>
                <span>Quantity: {{ element.quantity }}</span><br>
                <span>Price: ${{ productPrice[index] }}</span>
            </div>
        </div>
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
                    <span class="h6">(22% TVA included)</span>
                </h3>
            </div>
            <div class="col-5 text-right">
                <h3 name="name" class="py-2">${{ totalePrice }}</h3>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "OrderSummaryComponent",
    data() {
        return {
            deliveryPrice: 5
        }
    },
    computed: {
        cartArray() {
            return this.$root.cart;
        },
        productPrice() {
            let cartPrice = [];
            
            this.cartArray.forEach(element => {
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
    }
}
</script>
