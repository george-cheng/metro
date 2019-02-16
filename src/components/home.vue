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
          <a href="#">
            <img class="grid_img" :src="item.picUrl" alt="">
          </a>
        </li>
      </ul>
  </div>
  <div class="recommend">
    <ul>
      <li v-for="item in recommend" :key="item.id">
        <img :src="item.picUrl" alt="">
      </li>
    </ul>
  </div>
</div>
</template>

<script>

export default {
  name: 'home',
  data () {
    return {
      imgList:[],
      menu:[],
      recommend:[]
    }
  },
  created() {
    this.$ajax.get(this.dataURL('home.php','banner'))
      .then((res)=>{
        this.imgList = res.data;
      });
    this.$ajax.get(this.dataURL('home.php','menu'))
      .then((res)=>{
        this.menu = res.data;
      });
    this.$ajax.get(this.dataURL('home.php','recommend'))
      .then((res)=>{
        this.recommend = res.data;
        console.log(this.recommend);
      });

  }
}
</script>



<style lang="less" scoped>
  @rem : 640/10rem;
  #app{
    width: 590/@rem;
    /*height: 230/@rem;*/
    margin: 0 auto;
  }
  .banner{
    margin: 20/@rem auto 0;
    width: 590/@rem;
    .home_img{
      width: 100%;
      height: 100%;
    }
  }
  .grid{
    margin: 0/@rem auto;
    width: 590/@rem;
    background-color: #ffffff;
    ul{
      li{
        width: 120/@rem;
        height: 120/@rem;
        a{
          img{
            width: 100%;
            height: 100%;
          }
        }
      }
    }
    .mui-grid-view.mui-grid-9{
      background-color: #ffffff;
      border-radius: 10/@rem;
    }
    .mui-grid-view.mui-grid-9 .mui-table-view-cell{
      border: none;
      margin-right: 26/@rem;
    }
  }
  .recommend{
    margin-top: 35/@rem;
    width: 100%;
    height: 120/@rem;
    border: 1px solid #000000;
    ul{
      padding-left: 0;
      margin-top: 0;
      margin-bottom: 0;
      height: 120/@rem;
      li{
        display: inline-block;
        width: 210/@rem;
        height: 120/@rem;
        img{
          width: 100%;
          height: 100%;
        }
      }
    }
  }
</style>
