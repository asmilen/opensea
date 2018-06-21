
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('tours', require('./components/Tours.vue'));

// Global methods here
Vue.mixin({
    methods: {
        split: function(list){
            list = list.split("\n");
            return list;
        },
        minPrice: function(priceList){
            var retval = 0;
            priceList = JSON.parse(priceList);
            if(priceList){
                priceList.forEach(function(price){
                    if(price.value && (retval == 0 || price.value < retval)){
                        retval = price.value;
                    }
                })    
            }

            return retval;
        }

    }
})
// End global methods here

const app = new Vue({
    el: '#app'
});
