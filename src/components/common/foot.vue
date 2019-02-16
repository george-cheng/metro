<template>
  <div id="app">
    <nav class="mui-bar mui-bar-tab">
      <router-link :to="{}" class="mui-tab-item mui-active" href="#">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/1.jpg" alt=""></span>
      </router-link>
      <router-link :to="{}" class="mui-tab-item" href="#">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/2.jpg" alt=""></span>
      </router-link>
      <router-link :to="{}" class="mui-tab-item" href="#">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/5.jpg" alt=""></span>
      </router-link>
      <router-link :to="{}" class="mui-tab-item" href="#">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/3.jpg" alt=""></span>
      </router-link>
      <router-link :to="{}" class="mui-tab-item" href="#">
        <span class="mui-icon"><img src="http://www.berrylollipop.com/metro/meteroimg/tabbar/4.jpg" alt=""></span>
      </router-link>
    </nav>
  </div>
</template>

<script>
  export default {
    name: "foot"
  }
</script>

<style lang="less" scoped>
  @rem: 640/10rem;
  nav {
    background-color: #fff;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;

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
