<template>
  <div id="app">
    <div class="top">
      <div class="lft">
        <div class="lft_con">
          <span class="lft_con_txt">上海</span>
          <span class="mui-icon mui-icon-arrowdown"></span>
        </div>
      </div>
      <div class="mid">
        <img src="http://www.berrylollipop.com/metro/meteroimg/home/daduhui.png" alt="">
      </div>
      <div class="rgt">
        <div class="r_rgt">
          <p>多云</p>
          <p>8℃</p>
        </div>
        <div class="r_mid"><img src="../../../static/icon/cloud.png" alt=""></div>
        <div class="r_lft"><img src="../../../static/icon/ling.png" alt=""></div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "metro_header"
  }
</script>

<style lang="less" scoped>
  @rem: 640/10rem;
  #app {
    height: 80/@rem;
    background-color: #ffffff;
    padding-top: 18/@rem;

    .top {
      width: 590/@rem;
      height: 35/@rem;
      margin: 0 auto;

      .lft {
        float: left;

        .lft_con {
          width: 80/@rem;
          height: 35/@rem;
          border-radius: 40/@rem;
          display: flex;
          justify-content: space-around;
          background-color: #eeeeee;

          .lft_con_txt {
            font-size: 14/@rem;
            color: #000000;
            line-height: 35/@rem;
            float: left;
          }

          .mui-icon {
            float: right;
            width: 15/@rem;
            line-height: 35/@rem;
            margin-right: 10/@rem;
            font-size: 20/@rem;
          }
        }
      }

      .mid {
        float: left;
        margin-left: 115/@rem;
        width: 200/@rem;
        height: 35/@rem;
        line-height: 35/@rem;

        img {
          width: 100%;
          height: 100%;
        }
      }

      .rgt {
        float: right;
        width: 118/@rem;
        line-height: 35/@rem;
        display: flex;
        justify-content: space-around;

        .r_rgt {
          width: 50/@rem;
          height: 35/@rem;

          p {
            font-size: 18/@rem;
            margin-bottom: 0;
            margin-top: 0;
            color: #000;
            line-height: 18/@rem;
            white-space: nowrap;
          }

          p:last-child {
            margin-top: 2/@rem;
          }
        }

        .r_mid {
          width: 35/@rem;
          height: 35/@rem;

          img {
            width: 100%;
            height: 100%;
          }
        }

        .r_lft {
          width: 30/@rem;
          height: 35/@rem;

          img {
            width: 100%;
            height: 100%;
          }
        }
      }
    }
  }

</style>
