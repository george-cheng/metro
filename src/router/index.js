import Vue from 'vue'
import Router from 'vue-router'
import home from '@/components/home'

Vue.use(Router);

import Axios from 'axios'
import $ from 'jquery'

Axios.defaults.baseURL = 'http://www.berrylollipop.com/metro/php/';
Vue.prototype.$ajax = Axios;
Vue.prototype.dataURL = function (file,title,id) {
  // id = (id == undefined) ? '' : id;
  return file + '?title' + title + id;
};

Vue.prototype.$jq = $;

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: home
    }
  ]
})
