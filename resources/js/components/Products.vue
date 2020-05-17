<template>
    <div class='products row'>
        <product-card class="col-md-3 mb-4" v-for='(product, index) in products' :key='index' :product='product' />
    </div>
</template>

<script>
import ProductCard from './ProductCard'

export default {
    name: 'products',
    components: {
        ProductCard
    },
    props: ['products']
}
</script>
