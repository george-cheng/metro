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
    <div class="mui-content">
      <ul class="mui-table-view mui-grid-view mui-grid-9">
        <li v-for="item in menu" :key="item.id" class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
          <a href="#">
            <img :src="item.picUrl" alt="">
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
</template>

<script>

export default {
  name: 'home',
  data () {
    return {
      imgList:[],
      menu:[]
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
    height: 230/@rem;
    .home_img{
      width: 100%;
      height: 100%;
    }
  }
  .grid{
    margin: 50/@rem auto 0;
    width: 590/@rem;
    height: 325/@rem;
    background-color: #ffffff;
    .mui-grid-view.mui-grid-9{
      background-color: #ffffff;
    }
    .mui-grid-view.mui-grid-9 .mui-table-view-cell{
      border: none;
    }
  }
</style>
<!-- Add "scoped" attribute to limit CSS to this component only -->
