<template>
    <div class="product-card">
        <div class="card">
            <img src="https://via.placeholder.com/350x250?text=Product%20Image" class="card-img-top" alt="product image">
            <div class="card-body">
                <h5 class="card-title">{{ product.title }}</h5>
                <p class="card-text">{{ product.description }}</p>
                <p class="card-text">Rs. {{ product.price }}/-</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <button @click="$emit('add-to-cart', product)">Add to cart</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'product-card',
    props: ['product']
}
</script>
