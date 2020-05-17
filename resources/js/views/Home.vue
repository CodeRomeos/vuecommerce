<template>
    <div id="home">
        <div class="container">
            <products :products="products" />

        </div>
    </div>
</template>

<script>
import Products from '../components/Products'

export default {
    name: 'home',
    components: {
        Products
    },
    data() {
        return {
            products: [
                {id: 1, title: 'Laptop', description: "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, magnam!", price: 40000},
                {id: 2, title: 'Mobile Phone', description: "Lorem ipsum dolor sit amet.", price: 9000},
                {id: 3, title: 'Table Lamp', description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis inventore quis consequuntur?", price: 250},
                {id: 4, title: 'Flower Vase', description: "Lorem ipsum dolor sit amet consectetur adipisicing elit.", price: 300},
                {id: 5, title: 'Pepsi', description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, minus consectetur.", price: 70},
            ]
        }
    }
}
</script>
