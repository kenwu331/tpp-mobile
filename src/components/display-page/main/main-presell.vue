<template>
  <div class="main-pre">
      <div class="date">2018-03-01 周四</div>
      <m-item :key="index" v-for="(val,index) in mn" 
      :pic="val[0]" :txtTitle="val[1]" :threeD="val[2]" :IMAX="val[3]"
      :scorePic="val[4]" :score="val[5]" :txtDY="val[6]" :txtZY="val[7]" :txtBtn="val[8]"></m-item>
      <div class="date">2018-03-02 周五</div>
      <m-item :key="index+2" v-for="(val,index) in mn2" 
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
          mn:[['./../../../static/img/m-item/pre/pre1.jpg','翻滚吧姐妹','','','./../../../static/img/m-item/score.png','4732','导演：王钲','主演：冯铭潮 赵多娜 陈美行 厉娜','预售']],
          mn2:[['./../../../static/img/m-item/pre/pre2.jpg','闺蜜2','','','./../../../static/img/m-item/score.png','346852','导演：黄真真','主演：薛凯琪 陈意涵 张钧甯','预售'],['./../../../static/img/m-item/pre/pre3.jpg','比得兔','2D','中国巨幕','./../../../static/img/m-item/score.png','67639','         导演：威尔·古勒       ','         主演：玛歌特·罗比 黛茜·雷德利       ','预售'],['./../../../static/img/m-item/pre/pre4.jpg','三块广告牌','','','./../../../static/img/m-item/score.png','52333','         导演：马丁·麦克唐纳       ','         主演：弗兰西斯·麦克多蒙德 伍迪·哈里森       ','预售'],['./../../../static/img/m-item/pre/pre5.jpg','小萝莉的猴神大叔','','','./../../../static/img/m-item/score.png','33379','         导演：卡比尔·汗       ','         主演：萨尔曼·汗 卡琳娜·卡普       ','预售'],['./../../../static/img/m-item/pre/pre6.jpg','宇宙有爱浪漫同游','','','./../../../static/img/m-item/score.png','33221','         导演：陈思行       ','         主演：胜利 郭碧婷 白冰 李贤宰 张亮       ','预售'],['./../../../static/img/m-item/pre/pre7.jpg','金钱世界','2D','中国巨幕','./../../../static/img/m-item/score.png','26882','         导演：雷德利·斯科特       ','         主演：米歇尔·威廉姆斯       ','预售'],['./../../../static/img/m-item/pre/pre8.jpg','厉害了，我的国','','','./../../../static/img/m-item/score.png','4770','         导演：卫铁       ','  ','预售']]
      }
  }
}
</script>

<style>
    .main-pre{
        width:100%;
    }
    .main-pre .date{
        font-size:3.3vmin;
        padding:2.7vmin 5.4vmin;
        background:#F5F5F5
    }
    .main-pre::after{
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
