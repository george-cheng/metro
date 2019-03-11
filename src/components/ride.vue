<template>
  <div id="app">
    <div class="top"></div>
    <div class="btm"></div>
    <div class="ride_box">
      <div class="r_box_txt">
        <p class="tit">上海地铁乘车码</p>
        <p class="tit_en">(Shanghai Metro QR Code)</p>
        <p class="intro">对准闸机扫描口 高度5cm刷码进站</p>
      </div>
      <div class="r_box_qrcode">
        <img src="../../static/ride/qrcode.png" alt="">
      </div>
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
    height: 900/@rem;
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
    border-radius: 20/@rem;
    .r_box_txt{
      margin: 0 auto;
      width: 626/@rem;
      height: 150/@rem;
      .tit{
        margin-top: 70/@rem;
        line-height: 40/@rem;
        text-align: center;
        font-size: 30/@rem;
        color: #000;
      }
      .tit_en{
        margin-top: 25/@rem;
        color: #000;
        font-size: 24/@rem;
        text-align: center;
        line-height: 24/@rem;
      }
      .intro{
        margin-top: 25/@rem;
        font-size: 20/@rem;
        color: #ff4a63;
        text-align: center;
        line-height: 20/@rem;
      }
    }
    .r_box_qrcode{
      margin: 50/@rem auto;
      width: 400/@rem;
      height: 400/@rem;
      img{
        width: 100%;
        height: 100%;
      }
    }
  }
</style>
