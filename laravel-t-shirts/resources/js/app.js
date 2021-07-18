import Vue from "vue";

/* Package Vuelidate */
import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);

import AddCartComponent from "./components/AddCartComponent.vue";
import CartComponent from "./components/CartComponent";
import ShowCartComponent from "./components/ShowCartComponent";

import AddWishlistComponent from "./components/AddWishlistComponent";
import WishlistComponent from "./components/WishlistComponent";
import ShowWishlistComponent from "./components/ShowWishlistComponent";

import OrderSummaryComponent from "./components/OrderSummaryComponent";
import DeliveryDetailsComponent from "./components/DeliveryDetailsComponent";

require('./bootstrap');

Vue.component('add-cart', AddCartComponent);
Vue.component('cart-count', CartComponent);
Vue.component('show-cart', ShowCartComponent);

Vue.component('add-wishlist', AddWishlistComponent);
Vue.component('wishlist-count', WishlistComponent);
Vue.component('show-wishlist', ShowWishlistComponent);

Vue.component('order-summary', OrderSummaryComponent);
Vue.component('delivery-details', DeliveryDetailsComponent);

const app = new Vue({
    el: '#app',
    data() {
        return {
            /* Homework page refresh saving count cart */
            cart: JSON.parse(localStorage.getItem('cart')) || [],
            wishlist: JSON.parse(localStorage.getItem('wishlist')) || []
        }
    },
    methods: {
        addToCart(productId) {
            if (!this.isProductAdded(productId)) {
                this.cart.push(productId);

                /* Homework add localStorage */
                localStorage.setItem('cart', JSON.stringify(this.cart));
            }
        },
        isProductAdded(productId) {
            if (this.cart.length === 0) {
                return false;
            }

            /* Homework add one product unique */
            const productIndex = this.cart.findIndex(product => product.id === productId.id);
        
            return productIndex !== -1;
        },
        addToWishlist(productId) {
            if (!this.isProductAddedToWishlist(productId)) {
                this.wishlist.push(productId);

                localStorage.setItem('wishlist', JSON.stringify(this.wishlist));
            }
        },
        isProductAddedToWishlist(productId) {
            if (this.wishlist.length === 0) {
                return false;
            }

            const productIndex = this.wishlist.findIndex(product => product.id === productId.id);
        
            return productIndex !== -1;
        }
    }
});
