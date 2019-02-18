<template>
  <div id="app">

    <div class="banner">
      <el-carousel height="150px" indicator-position="outside">
        <el-carousel-item v-for="item in imgList" :key="item.id">
          <img class="home_img" :src="item.picUrl" alt="" width="100%" height="100%">
        </el-carousel-item>
      </el-carousel>
    </div>

    <div class="grid">
      <ul class="mui-table-view mui-grid-view mui-grid-9">
        <li v-for="item in menu" :key="item.id" class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
          <a href="#"><img class="grid_img" :src="item.picUrl" alt=""></a>
        </li>
      </ul>
    </div>

    <div class="recommend">
      <ul>
        <li v-for="item in recommend" :key="item.id">
          <a href="#"><img :src="item.picUrl" alt=""></a>
        </li>
      </ul>
    </div>

    <div class="near">
      <p>附近站点</p>
      <div class="n_content">

        <div class="top_loc">
          <div class="t_lft"><p class="map_ico"><img src="../../static/icon/map.png" alt=""></p><p class="road_name">江宁路</p></div>
          <div class="t_rgt">
            <p class="p1"><img src="../../static/icon/transform.png" alt=""></p>
            <p class="p2"><img src="../../static/icon/qrcode.png" alt=""></p>
          </div>
        </div>

        <div class="mid_line">
          <div class="line_lft location">
            <p class="tit">开往</p>
            <p class="place">世博大道</p>
          </div>
          <div class="line_mid">
              <p>13号线</p>
          </div>
          <div class="line_rgt location">
            <p class="tit">开往</p>
            <p class="place">金运路</p>
          </div>
        </div>

        <div class="btm_status">
          <div class="line_lft location">
            <p class="tit">列车到达</p>
            <p class="place">调试中</p>
          </div>
          <div class="line_mid">
            <p>13</p>
          </div>
          <div class="line_rgt location">
            <p class="tit">列车到达</p>
            <p class="place">调试中</p>
          </div>
        </div>

        <div class="near_info">
          <div class="info_lft"><img src="../../static/icon/clock.png" alt=""><span>时刻表</span></div>
          <div class="info_mid"><img src="../../static/icon/tool.png" alt=""><span>站点设施</span></div>
          <div class="info_rgt"><img src="../../static/icon/exit.png" alt=""><span>出站信息</span></div>
        </div>
      </div>
    </div>

    <div class="b_banner">
      <el-carousel height="70px" indicator-position="none">
        <el-carousel-item v-for="item in imgList" :key="item.id">
          <img class="home_img" :src="item.picUrl" alt="" width="100%" height="100%">
        </el-carousel-item>
      </el-carousel>
    </div>

    <div class="metro_info">
      <div class="m_in_tit">
        <p class="">地铁资讯</p>
        <p class="more">查看更多 &nbsp;></p>
      </div>
      <div class="m_in_con">
        <div v-for="item in info" :key="item.id">
          <img :src="item.picUrl" alt="">
          <p class="info_txt">{{item.info_txt}}</p>
          <p class="info_tit">{{item.info_tit }}</p>
        </div>
      </div>
    </div>

  </div>
</template>

<script>

  export default {
    name: 'home',
    data() {
      return {
        imgList: [],
        menu: [],
        recommend: [],
        info: []
      }
    },
    created() {
      this.$ajax.get(this.dataURL('home.php', 'banner'))
        .then((res) => {
          this.imgList = res.data;
        });
      this.$ajax.get(this.dataURL('home.php', 'menu'))
        .then((res) => {
          this.menu = res.data;
        });
      this.$ajax.get(this.dataURL('home.php', 'recommend'))
        .then((res) => {
          this.recommend = res.data;
        });
      this.$ajax.get(this.dataURL('home.php', 'info'))
        .then((res) => {
          this.info = res.data;
          console.log(this.info);
        });
    }
  }
</script>

<style lang="less" scoped>
  @rem: 640/10rem;
  #app {
    width: 590/@rem;
    /*height: 230/@rem;*/
    margin: 0 auto;
  }
  .banner {
    margin: 20/@rem auto 0;
    width: 590/@rem;
    .home_img {
      width: 100%;
      height: 100%;
    }
  }
  .grid {
    margin: 0/@rem auto;
    width: 590/@rem;
    background-color: #ffffff;
    ul {
      li {
        width: 120/@rem;
        height: 120/@rem;
        a {
          img {
            width: 100%;
            height: 100%;
          }
        }
      }
    }
    .mui-grid-view.mui-grid-9 {
      background-color: #ffffff;
      border-radius: 10/@rem;
    }
    .mui-grid-view.mui-grid-9 .mui-table-view-cell {
      border: none;
      margin-right: 26/@rem;
      padding: 5px 10px;
    }
  }
  .recommend {
    margin-top: 35/@rem;
    height: 120/@rem;
    overflow: hidden;

    ul {
      width: 500%;
      padding-left: 0;
      margin-top: 0;
      margin-bottom: 0;
      height: 120/@rem;
      li {
        float: left;
        margin-right: 30/@rem;
        width: 210/@rem;
        height: 120/@rem;

        img {
          width: 100%;
          height: 100%;
        }
      }
    }
  }
  .near {
    margin-top: 65/@rem;
    p {
      font-size: 30/@rem;
      color: #000;
      line-height: 30/@rem;
    }
    .n_content {
      margin: 20/@rem auto 0;
      width: 590/@rem;
      background-color: #fff;
      border-radius: 5/@rem;
      .top_loc {
        margin: 20/@rem auto 0;
        width: 550/@rem;
        height: 60/@rem;
        .t_lft {
          float: left;
          .map_ico {
            display: inline-block;
            width: 50/@rem;
            height: 50/@rem;
            margin-bottom: 0;
            line-height: 60/@rem;
            img{
              width: 100%;
              height: 100%;
            }
          }
          .road_name {
            display: inline-block;
            font-size: 36/@rem;
            color: #000;
            font-weight: bold;
            margin-left: 20/@rem;
            vertical-align: super;
            line-height: 60/@rem;
            margin-bottom: 0;
          }
        }
        .t_rgt {
          float: right;
          width: 75/@rem;
          display: flex;
          justify-content: space-between;
          p {
            margin-bottom: 0;
            margin-top: 15/@rem;
            img{
              width: 100%;
              height: 100%;
            }
          }
          .p1 {
            display: inline-block;
            width: 30/@rem;
            height: 30/@rem;
            background-color: #8add58;
          }
          .p2 {
            display: inline-block;
            width: 30/@rem;
            height: 30/@rem;
            background-color: #4365f0;
          }
        }
      }
      .mid_line{
        margin: 20/@rem auto 0;
        width: 550/@rem;
        display: flex;
        justify-content: space-between;
        .line_lft{
        }
        .line_mid{
          margin-top: 25/@rem;
          width: 100/@rem;
          height: 35/@rem;
          background-color: #ec91cc;
          border-radius: 30/@rem;
          vertical-align: middle;
          p{
            text-align: center;
            line-height: 36/@rem;
            font-size: 18/@rem;
            color: #ffffff;
          }
        }
        .line_rgt{
        }
        .location{
          height: 100%;
          .tit{
            font-size: 18/@rem;
            color: #aeaeae;
          }
          .place{
            font-size: 26/@rem;
            color: #000;
          }
        }
      }
      .btm_status{
        margin: 20/@rem auto 0;
        width: 550/@rem;
        display: flex;
        justify-content: space-between;
        .line_lft{
        }
        .line_mid{
          margin-top: 25/@rem;
          width: 45/@rem;
          height: 45/@rem;
          background-color: #ec91cc;
          border-radius: 50%;
          vertical-align: middle;
          p{
            text-align: center;
            line-height: 45/@rem;
            font-size: 18/@rem;
            color: #ffffff;
          }
        }
        .line_rgt{
        }
        .location{
          height: 100%;
          .tit{
            font-size: 18/@rem;
            color: #aeaeae;
          }
          .place{
            font-size: 26/@rem;
            color: #000;
          }
        }
      }
      .near_info{
        margin: 20/@rem auto 30/@rem;
        width: 550/@rem;
        height: 50/@rem;
        display: flex;
        justify-content: space-around;
        div{
          img{
            width: 25/@rem;
            height: 25/@rem;
            vertical-align: middle;
          }
          span{
            font-size: 24/@rem;
            color: #000;
            margin-left: 20/@rem;
            line-height: 24/@rem;
            vertical-align: middle;
          }
        }
      }
    }
  }
  .b_banner{
    margin: 20/@rem auto 0;
    width: 590/@rem;
    .el-carousel{
      border-radius: 100/@rem;
    }
    .home_img {
      width: 100%;
      height: 100%;
    }
  }
  .metro_info{
    margin-top: 20/@rem;
    width: 590/@rem;
    height: 300/@rem;
    .m_in_tit{
      display: flex;
      justify-content: space-between;
      p{
        font-size: 24/@rem;
        color: #60605f;
        line-height: 24/@rem;
        font-weight: bold;
      }
      p.more{
        color: #8b8b8b;
        font-weight: normal;
      }
    }
    .m_in_con{
      margin-top: 35/@rem;
      margin-bottom: 120/@rem;
      div{
        img{
          width: 100%;
          height: 100%;
        }
        .info_txt{
          margin-top: 18/@rem;
          font-size: 30/@rem;
          line-height: 30/@rem;
          color: #000;
        }
        .info_tit{
          margin-top: 20/@rem;
          margin-bottom: 60/@rem;
          width: 120/@rem;
          height: 30/@rem;
          background-color: #ef9692;
          border-radius: 30/@rem;
          text-align: center;
          line-height: 30/@rem;
          color: #ffffff;
        }
      }
    }
  }

</style>
