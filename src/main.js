// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'

import '../static/mui/js/mui'
import '../static/mui/css/mui.css'

import Element from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'

import less from 'less'

import '../static/js/fontSize'

import VueAMap from 'vue-amap'

Vue.use(VueAMap);
VueAMap.initAMapApiLoader({
  key: 'ef032521d06f45eb6a771e328f3559d6',
  plugin: ['AMap.Autocomplete','AMap.PlaceSearch', 'AMap.Scale', 'AMap.OverView', 'AMap.ToolBar', 'AMap.MapType', 'AMap.PolyEditor', 'AMap.CircleEditor'],
  // 默认高德 sdk 版本为 1.4.4
  v: '1.4.4'
});


Vue.use(Element);

Vue.use(less);

Vue.config.productionTip = false;

new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
});
