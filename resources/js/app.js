/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });
$(function() {
    $('.file_upload_button').on('click', function() {
        $('.file_upload_input').click();
    });

    $('.file_upload_input').on('change', function() {

        var count = $('.file_upload_input')[0].files.length <= 30 ? $('.file_upload_input')[0].files.length : 30;
        var file = '';

        if(count > 0) {
            for (var i = 0; i < count; i++) {
                file += $('.file_upload_input')[0]['files'][i]['name'];
                if(i + 1 != count) {
                    file += ', ';
                }
            }
        }

        if(count >= 30) {
            file += '...';
        }

        $('.file_upload_label').text(file);
    });

});