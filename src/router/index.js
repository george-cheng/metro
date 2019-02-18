import Vue from 'vue'
import Router from 'vue-router'
import home from '@/components/home'

import trip from '../components/trip'
import ride from '../components/ride'
import find from '../components/find'
import my from '../components/my'

Vue.use(Router);

import Axios from 'axios'
import $ from 'jquery'
import mui from '../../static/mui/js/mui'

Axios.defaults.baseURL = 'http://www.berrylollipop.com/metro/php/';
Vue.prototype.$ajax = Axios;
Vue.prototype.dataURL = function (file,title,id) {
  id = (id === undefined) ? '' : id;
  return file + '?title=' + title + id;
};

Vue.prototype.$jq = $;

Vue.prototype.mui = mui;
new(mui);
mui('body').on('tap','a',function(){
  window.top.location.href=this.href;
});

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: home
    },
    {
      path: '/trip',
      name: 'trip',
      component: trip
    },
    {
      path: '/ride',
      name: 'ride',
      component: ride
    },
    {
      path: '/find',
      name: 'find',
      component: find
    },
    {
      path: '/my',
      name: 'my',
      component: my
    }
  ]
})
