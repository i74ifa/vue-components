import Vue from 'vue';
import button from './components/button';
import modal from './components/modal';

new Vue({
    el: "#app",
    components: {
        "x-button": button,
        "x-modal": modal
    }
})