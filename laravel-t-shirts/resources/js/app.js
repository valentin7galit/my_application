import Vue from "vue";
import AddCartComponent from "./components/AddCartComponent.vue";
import CartComponent from "./components/CartComponent";
import ShowCartComponent from "./components/ShowCartComponent";

require('./bootstrap');

Vue.component('add-cart', AddCartComponent);
Vue.component('cart-count', CartComponent);
Vue.component('show-cart', ShowCartComponent);

const app = new Vue({
    el: '#app',
    data() {
        return {
            /* Homework page refresh saving count cart */
            cart: JSON.parse(localStorage.getItem('cart')) || []
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
        }
    }
});
