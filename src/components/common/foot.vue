<template>
  <div id="app">
    <nav class="mui-bar mui-bar-tab">
      <router-link :to="{name:'home'}" class="mui-tab-item ">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/1.jpg" alt=""></span>
      </router-link>
      <router-link :to="{name:'trip'}" class="mui-tab-item">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/2.jpg" alt=""></span>
      </router-link>
      <router-link :to="{name:'ride'}" class="mui-tab-item">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/5.jpg" alt=""></span>
      </router-link>
      <router-link :to="{name:'find'}" class="mui-tab-item">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/3.jpg" alt=""></span>
      </router-link>
      <router-link :to="{name:'my'}" class="mui-tab-item">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/4.jpg" alt=""></span>
      </router-link>
    </nav>
  </div>
</template>

<script>
  export default {
    name: "foot",

  }

</script>

<style lang="less" scoped>
  @rem: 640/10rem;
  * { touch-action: none; }
  nav {
    background-color: #fff;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    position: fixed;
    z-index: 9999999999;

    .mui-tab-item {
      .mui-icon {
        width: 80/@rem;
        height: 80/@rem;

        img {
          width: 100%;
          height: 100%;
        }
      }

      .mui-tab-label {
        color: #000000;
      }
    }
  }
</style>
