/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import GreenAudioPlayer from "green-audio-player/dist/js/green-audio-player";

class GreenAudioPlayerFix extends GreenAudioPlayer {
  constructor(player, options) {
    super(player, options);
    delete this.isDevice;
    this.isDevice =
      (/ipad|iphone|ipod|android/i.test(
        window.navigator.userAgent.toLowerCase()
      ) ||
        (navigator.platform === "MacIntel" && navigator.maxTouchPoints > 1)) &&
      !window.MSStream;
    this.overcomeIosLimitations();
  }
}

export default GreenAudioPlayerFix;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('nav-menu', require('./components/NavComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

new GreenAudioPlayerFix('.player');