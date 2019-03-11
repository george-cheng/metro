<template>
  <div id="app">
    <div class="top_txt">
      <span>发现</span>
    </div>
    <div class="top_swiper">

    </div>
  </div>
</template>

<script>
    export default {
        name: "find"
    }
</script>

<style scoped lang="less">
  @rem: 750/10rem;
  body{
    background-color: #fff;
  }
.top_txt{
  margin-top: 40/@rem;
  span{
    margin: 0 0 0 35/@rem;
    font-size: 48/@rem;
    line-height: 48/@rem;
  }
}
</style>
