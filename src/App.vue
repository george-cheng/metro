<template>
  <div id="app">
      <router-view></router-view>
    <foot></foot>
  </div>
</template>

<script>

  import foot from './components/common/foot'

  export default {
    name: 'App',
    components: {
      'foot': foot,
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
  p{
    margin-bottom: 0;
  }
  input[type='text']{
    margin-bottom: 0;
    padding: 0;
    border: none;
    border-radius: 0;
  }
</style>
