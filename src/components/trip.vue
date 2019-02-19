<template>
  <div class="amap-container">
    <el-amap ref="map" vid="amapDemo" :amap-manager="amapManager" :center="center" :zoom="zoom" :plugin="plugin" :events="events" class="amap-demo">
    </el-amap>

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
        position:{
          lng:'',
          lat:'',
          address:'',
          loaded:false
        },
        amapManager,
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
          },

        },
        plugin: ['ToolBar',{
          defaultType: 0,
          events: {
            init(instance){
              instance.log
            },
            init(o) {

            }
          }
        }],
        scrollWheel:true,
        zoomEnable:true,
        // zoom:14,
        center: [113.631766,34.740485],
      }

    },
    methods: {

    }
  }
</script>

<style lang="less" scoped>
  @rem :640/10rem;
  .amap-demo {
    height: 300px;
  }
</style>
