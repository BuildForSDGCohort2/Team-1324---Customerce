
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// import Axios from 'axios'

window.Vue = require('vue');
// window.axios = Axios

import VueTimeago from 'vue-timeago';

Vue.use(VueTimeago, {
    name: 'timeago', // component name, `timeago` by default
    locale: 'en-US',
    locales: {
        // you will need json-loader in webpack 1
        'en-US': require('vue-timeago/locales/en-US.json')
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

Vue.component(
    'notification',
    require('./components/notifications/Notification.vue')
);

const app = new Vue({
    //el: '#app'
    el: '#invoice',
    data: {
        isProcessing: false,
        form: {},
        errors: {}
    },
    created: function () {
        Vue.set(this.$data, 'form', _form);
    },
    methods: {
        addLine: function() {
            this.form.products.push({name: '', price: 0, qty: 1});
        },
        remove: function(product) {
            this.form.products.$remove(product);
        },
        create: function() {
            this.isProcessing = true;
            this.$http.post('/invoices', this.form)
                .then(function(response) {
                    if(response.data.created) {
                        window.location = '/invoices/' + response.data.id;
                    } else {
                        this.isProcessing = false;
                    }
                })
                .catch(function(response) {
                    this.isProcessing = false;
                    Vue.set(this.$data, 'errors', response.data);
                })
        },
        update: function() {
            this.isProcessing = true;
            this.$http.put('/invoices/' + this.form.id, this.form)
                .then(function(response) {
                    if(response.data.updated) {
                        window.location = '/invoices/' + response.data.id;
                    } else {
                        this.isProcessing = false;
                    }
                })
                .catch(function(response) {
                    this.isProcessing = false;
                    Vue.set(this.$data, 'errors', response.data);
                })
        }
    },
    computed: {
        subTotal: function() {
            return this.form.products.reduce(function(carry, product) {
                return carry + (parseFloat(product.qty) * parseFloat(product.price));
            }, 0);
        },
        grandTotal: function() {
            return this.subTotal - parseFloat(this.form.discount);
        }
    }
});
