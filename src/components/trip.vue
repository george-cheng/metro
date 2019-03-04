<template>
  <div id="app">
    <div class="amap-container">
      <el-amap ref="map" vid="amapDemo" :amap-manager="amapManager" :center="center" :zoom="zoom" :plugin="plugin"
               :events="events" class="amap-demo"></el-amap>
    </div>
    <div class="remind">
      <div class="re_txt">
        <p>出行提醒</p>
      </div>
      <div class="re_count">
        <img src="../../static/icon/trip/count.png" alt="">
      </div>
    </div>
    <div class="my_pos">
      <div class="my_pos_box">
        <div class="my_pos_box_ipt">
          <div class="my_position position">
            <label for="">
              <span class="spot" style="background-color: #17be6c;"></span>
              <input type="text" placeholder="我的位置">
            </label>
          </div>
          <div class="set_position position">
            <label for="">
              <span class="spot" style="background-color: #f02830;"></span>
              <input type="text" placeholder="设置终点">
            </label>
          </div>
        </div>
        <div class="my_pos_box_tran">
          <img src="../../static/icon/trip/transform.png" alt="">
        </div>
      </div>
      <div class="my_pos_btm">
        <ul>
          <li>
            <img src="../../static/icon/trip/home.png" alt="">
            <span>家</span>
          </li>
          <li>
            <img src="../../static/icon/trip/company.png" alt="">
            <span>去公司</span>
          </li>
          <li>
            <div class="search" >
              <a href="#">搜索</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="my_pos_btm_info">
      <ul>
        <li v-for="item in trip_icon" :key="item.id">
          <img :src="item.picUrl" alt="">
          <p>{{item.trip_tit}}</p>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
  import VueAMap from 'vue-amap'

  let amapManager = new VueAMap.AMapManager();
  export default {
    name: "trip",
    data() {
      let self = this;
      return {
        trip_icon:[],

        amapManager,
        position: {
          lng: '',
          lat: '',
          address: '',
          loaded: false
        },
        zoom: 14,
        count: 1,
        touchZoom: true,
        slotStyle: {
          padding: '2px 8px',
          background: '#eee',
          color: '#333',
          border: '1px solid #aaa'
        },
        events: {
          zoomEnable: true,
          scrollWheel: true,
          'zoomchange': () => {
            console.log(1);
          }

        },
        plugin: ['ToolBar', {
          defaultType: 0,
          events: {
            init(instance) {
            },
            init(o) {

            }
          }
        }],
        scrollWheel: true,
        zoomEnable: true,
        dragEnable: true,
        // zoom:14,
        center: [113.631766, 34.740485],
      }
    },
    created() {
      this.$ajax.get(this.dataURL('home.php','trip_icon'))
        .then((res)=>{
          this.trip_icon = res.data;
          console.log(res.data);
        })
    }
  }
</script>

<style lang="less" scoped>
  @rem: 750/10rem;
  #app {
    margin: 0 auto;
    width: 750/@rem;
    height: 1500/@rem;
    overflow: hidden;
    position: relative;

    .amap-demo {
      margin: 0 auto;
      width: 750/@rem;
      height: 1500/@rem;
      position: fixed;
      z-index: -7;
    }

    .remind {
      width: 210/@rem;
      height: 70/@rem;
      position: fixed;
      bottom: 590/@rem;
      margin-left: 510/@rem;
      margin-right: 50/@rem;
      border-radius: 10/@rem;

      .re_txt {
        display: inline-block;
        margin: 15/@rem 0;
        float: left;
        width: 150/@rem;
        height: 40/@rem;
        line-height: 70/@rem;
        background-color: #eec1bc;
        text-align: center;
        border-radius: 30/@rem;

        p {
          font-size: 24/@rem;
          color: #b44c4d;
          text-align: center;
          line-height: 50/@rem;
        }
      }

      .re_count {
        display: inline-block;
        float: right;
        width: 70/@rem;
        height: 70/@rem;
        border-radius: 50%;
        text-align: center;
        line-height: 70/@rem;
        background-color: #fff;
        position: absolute;
        z-index: 999;
        right: 5/@rem;

        img {
          width: 40/@rem;
          height: 40/@rem;
        }
      }
    }

    .my_pos {
      width: 690/@rem;
      height: 270/@rem;
      background-color: #ffffff;
      position: fixed;
      right: 25/@rem;
      left: 25/@rem;
      margin: auto;
      bottom: 300/@rem;
      border-radius: 15/@rem;

      .my_pos_box {
        margin: 40/@rem 0 0 50/@rem;

        .my_pos_box_ipt {
          .position {
            height: 70/@rem;

            label {
              span.spot {
                display: inline-block;
                width: 18/@rem;
                height: 18/@rem;
                border-radius: 50%;
                margin-right: 30/@rem;
              }

              input {
                margin-bottom: 0;
                padding: 0;
                border: none;
                border-radius: 0;
                display: inline-block;
                height: 70/@rem;
                width: 405/@rem;
                border-bottom: 1px solid #dcdcdc;
              }
            }
          }
        }

        .my_pos_box_tran {
          float: right;
          width: 165/@rem;
          height: 140/@rem;
          margin-top: -135/@rem;
          text-align: center;
          line-height: 140/@rem;

          img {
            width: 50%;
            height: 50%;
          }
        }
      }
      .my_pos_btm{
        height: 88/@rem;
        width: 100%;
        line-height: 88/@rem;
        ul{
          width: 100%;
          display: flex;
          justify-content: space-around;
          -webkit-justify-content: space-around;
          margin: 0;
          padding: 0;
          li{
            img{
              width: 32/@rem;
              height: 32/@rem;
              vertical-align: middle;
            }
            span{
              font-size: 24/@rem;
              line-height: 24/@rem;
            }
            .search{
              width: 160/@rem;
              height: 55/@rem;
              background-color: #565da5;
              border-radius: 40/@rem;
              line-height: 45/@rem;
              text-align: center;
              margin: 15/@rem 0;
              a{
                color: #ffffff;
                font-size: 34/@rem;
                line-height: 34/@rem;
              }
            }
          }
        }
      }

    }
    .my_pos_btm_info{
      width: 690/@rem;
      background-color: #ffffff;
      position: fixed;
      right: 25/@rem;
      left: 25/@rem;
      margin: auto;
      bottom: 120/@rem;
      border-radius: 15/@rem;
      ul{
        margin: 0;
        padding: 0;
        display: flex;
        flex: 1;
        justify-content: space-around;
        -webkit-justify-content: space-around;
        margin: 10/@rem 0;
        li{
          text-align: center;
          img{
            width: 50%;
            height: auto;
          }
          p{
            margin-top: 20/@rem;
            font-size: 24/@rem;
            line-height: 24/@rem;
            color: #000;
            text-align: center;
          }
        }
      }
    }
  }
</style>
