<template>
    <div class="cart">
        <ul>
            <li v-for='(item, index) in items' :key="index">{{ item.title }} <button @click="$emit('remove-cart-item', item)">Remove</button></li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'cart',
    props: ['items']
}
</script>