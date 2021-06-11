import Vue from 'vue';
import button from './components/button';
import modal from './components/modal';
import navbar from './components/navbar';

new Vue({
    el: "#app",
    components: {
        "x-button": button,
        "x-modal": modal,
        "x-navbar": navbar
    }
})