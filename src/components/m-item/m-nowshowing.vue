<template>
  <div class="m-nowshowing">
      <m-item :key="index" v-for="(val,index) in mn" 
      :pic="val[0]" :txtTitle="val[1]" :threeD="val[2]" :IMAX="val[3]"
      :scorePic="val[4]" :score="val[5]" :txtDY="val[6]" :txtZY="val[7]" :txtBtn="val[8]"></m-item>
  </div>
</template>

<script>
import mItem from '@/components/m-item/m-item'
export default {
  components:{
      mItem
  },
  data:function(){
      return{
          mn:[['./../../../static/img/m-item/m-item1.jpg','红海行动','3D','IMAX','./../../../static/img/m-item/score2.png','9.3','导演：林超贤','主演：张译 黄景瑜 海清 杜江 蒋璐霞','购票'],['./../../../static/img/m-item/m-item2.jpg','唐人街探案2','2D','IMAX','./../../../static/img/m-item/score2.png','8.9','         导演：陈思诚       ','         主演：王宝强 刘昊然 肖央 王迅       ','购票'],['./../../../static/img/m-item/m-item3.jpg','捉妖记2','2D','IMAX','./../../../static/img/m-item/score.png','7.7','         导演：许诚毅       ','         主演：梁朝伟 白百何 井柏然 李宇春       ','购票'],['./../../../static/img/m-item/m-item4.jpg','西游记女儿国','3D','','./../../../static/img/m-item/score.png','7.8','         导演：郑保瑞       ','         主演：郭富城 冯绍峰 赵丽颖 小沈阳       ','购票'],['./../../../static/img/m-item/m-item5.jpg','熊出没·变形记','3D','','./../../../static/img/m-item/score2.png','8.7','         导演：丁亮  林汇达       ','         主演：张伟 张秉君 谭笑 贝丝·比尔斯       ','购票'],['./../../../static/img/m-item/m-item6.jpg','祖宗十九代','2D','中国巨幕','./../../../static/img/m-item/score.png','7.7','         导演：郭德纲       ','         主演：岳云鹏 吴京 吴秀波 井柏然       ','购票'],['./../../../static/img/m-item/m-item7.jpg','爱在记忆消逝前','','','./../../../static/img/m-item/score2.png','8.8','         导演：保罗·维尔奇       ','         主演：海伦·米伦 唐纳德·萨瑟兰       ','购票'],['./../../../static/img/m-item/m-item8.jpg','马戏之王','2D','IMAX','./../../../static/img/m-item/score2.png','8.8','         导演：迈克尔·格雷西       ','         主演：休·杰克曼 扎克·埃夫隆       ','购票']]
      }
  }
}
</script>

<style>
    .m-nowshowing{
        width:92vmin;
    }
    .m-nowshowing::after{
        content:'已到底部';
        display:block;
        text-align: center;
        clear:both;
        width:100%;
        height:25vmin;
        font-size:3vmin;
        float: left;
    }
</style>
