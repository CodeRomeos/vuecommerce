<template>
    <div class="app">
        <app-header>Header</app-header>
        <router-view></router-view>
        <app-footer>footer</app-footer>
    </div>
</template>

<script>
import AppHeader from '../components/AppHeader'
import AppFooter from '../components/AppFooter'

export default {
    name: 'app',
    components: {
        AppHeader,
        AppFooter
    }

}
</script>
