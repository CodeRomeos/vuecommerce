<template>
    <div class='products'>
        <div class="row">
            <div class="col-md-12"><cart @remove-cart-item="removeCartItem" :items="cartItems" /></div>
            <product-card @add-to-cart='cartItems.push($event)' class="col-md-3 mb-4" v-for='(product, index) in products' :key='index' :product='product' />
        </div>
    </div>
</template>

<script>
import ProductCard from './ProductCard'
import Cart from './Cart'
export default {
    name: 'products',
    components: {
        ProductCard,
        Cart
    },
    props: ['products'],
    data() {
        return {
            cartItems: []
        }
    },
    methods: {
        removeCartItem(item) {
            console.log(item)
        }
    }
}
</script>
