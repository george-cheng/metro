<template>
  <div id="app">
    <div class="top"></div>
    <div class="btm"></div>
    <div class="ride_box">

    </div>
  </div>
</template>

<script>
    export default {
        name: "ride"
    }
</script>

<style lang="less" scoped>
  @rem: 750/10rem;
  #app{
    background-color: transparent;
  }
  .top{
    width: 100%;
    height: 400/@rem;
    background-color: #636bfe;
  }
  .btm{
    width: 100%;
    height: 1000/@rem;
    background-color: #c4c9cf;
  }
  .ride_box{
    left: 50/@rem;
    right: 50/@rem;
    margin: auto;
    width: 650/@rem;
    height: 790/@rem;
    background-color: #fff;
    position: fixed;
    top: 360/@rem;
    z-index: 999;
  }
</style>
