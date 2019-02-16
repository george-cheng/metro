<template>
  <div id="app">
    <metor_header></metor_header>
      <router-view></router-view>
    <foot></foot>
  </div>
</template>

<script>

  import foot from './components/common/foot'
  import metor_header from './components/common/metro_header'

  export default {
    name: 'App',
    components: {
      'foot': foot,
      'metor_header':metor_header
    }
  }
</script>

<style lang="less">
  @rem: 640/10rem;
  body{
    width: 100%;
    background-color: #EFEFF4;
  }
  ul li{
    list-style: none;
  }
</style>
