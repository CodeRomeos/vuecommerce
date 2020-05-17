<template>
<footer class="page-footer font-small unique-color-dark">
    <div class="container text-center text-md-left mt-5">
        <div class="row mt-3">
            <div class="col-md-4 col-xl-4 mx-auto mb-4">
                <h6 class="font-weight-bold">VueCommerce</h6>
                <hr class="bg-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quisquam esse nemo illum ratione doloremque blanditiis fuga eos? Eius quae cum animi at commodi sit nulla non est? Minus, id!</p>
            </div>

            <div class="col-md-4 col-xl-4 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="bg-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">Your Account</a></p>
                <p><a href="#!">Become an Affiliate</a></p>
                <p><a href="#!">Shipping Rates</a></p>
                <p><a href="#!">Help</a></p>
            </div>

            <div class="col-md-4 col-xl-4 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="bg-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <router-link :to="{name: 'home'}">VueCommerce</router-link>
    </div>

</footer>
</template>

<script>
export default {
    name: 'app-footer'
}
</script>
