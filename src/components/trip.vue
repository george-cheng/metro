<template>
  <div id="app">
    <div class="amap-container">
      <el-amap ref="map" vid="amapDemo" :amap-manager="amapManager" :center="center" :zoom="zoom" :plugin="plugin" :events="events" class="amap-demo"></el-amap>
    </div>
  </div>
</template>

<script>
  import VueAMap from 'vue-amap'
  let amapManager = new VueAMap.AMapManager();
  export default {
    name: "trip",
    data(){
      let self = this;
      return{

        amapManager,
        position:{
          lng:'',
          lat:'',
          address:'',
          loaded:false
        },
        zoom: 14,
        count:1,
        touchZoom:true,
        slotStyle: {
          padding: '2px 8px',
          background: '#eee',
          color: '#333',
          border: '1px solid #aaa'
        },
        events: {
          zoomEnable:true,
          scrollWheel:true,
          'zoomchange': () => {
            console.log(1);
          }

        },
        plugin: ['ToolBar',{
          defaultType: 0,
          events: {
            init(instance){
            },
            init(o) {

            }
          }
        }],
        scrollWheel:true,
        zoomEnable:true,
        dragEnable:true,
        // zoom:14,
        center: [113.631766,34.740485],
      }
    }
  }
</script>

<style lang="less" scoped>
  @rem :640/10rem;
  #app{
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  .amap-demo {
    margin: 0 auto;
    width: 640/@rem;
    height: 1280/@rem;
  }
</style>
