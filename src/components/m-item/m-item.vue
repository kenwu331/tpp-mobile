<template>
  <div class="m-item">
      <div class="m-item-pic"><img :src=pic width="100%"></div>
      <div class="m-item-txt">
          <div class="title">
              <span>{{txtTitle}}</span>
              <div class="icon">
                  <div v-if="threeD!=''">{{threeD}}</div>
                  <div class="icon2" v-if="IMAX!=''">{{IMAX}}</div>
              </div>
          </div>
          <div class="score">
              <div class="icon" v-if="parseInt(score)<11"><img :src=scorePic width="100%"></div>
              <div :class="{'txtcolor':parseInt(score)>11}">{{score}}</div>
              <div v-if="parseInt(score)>11">人想看</div>
          </div>
          <div class="txt">{{txtDY}}</div>
          <div class="txt">{{txtZY}}</div>
          <div></div>
      </div>
      <div class="m-item-button">
          <div class="button" :class="txtBtn=='购票'?'pink':'blue'" @click="choiceMoive">{{txtBtn}}</div>
      </div>
  </div>
</template>

<script>
export default {
    props:['pic','txtTitle','threeD','IMAX','scorePic','score','txtDY','txtZY','txtBtn','long','i'],
    methods:{
        choiceMoive(){
            document.body.scrollTop=0;
            this.$store.commit('moiveMsg',[this.txtTitle,this.score,this.long,this.i]);
            this.$router.push('/cinemaChoice');
        }
    }
}
</script>

<style>
    .m-item{
        height:29vmin;
        width:91vmin;
        padding:4vmin;
    }
    .m-item-pic{
        float: left;
        width:18vmin;
    }
    .m-item-txt{
        float: left;
        width:55vmin;
        height:28vmin;
        padding-left:3vmin;
        background:#fff;
        font-size:3vmin;
        color:#777;
    }
    .m-item-txt .title::after{
        content:'';
        clear: both;
        display:block;
    }
    .m-item-txt .title span{
        float: left;
        font-size:4vmin;
        color:#000;
        font-weight: 500;
    }
    .m-item-txt .title .icon div{
        float: left;
        margin:1vmin 0 1vmin 1vmin;
        padding:0 1vmin ;
        font-size:3vmin;
        background:#999;
        color:#fff;
        box-sizing: border-box;
        height: 3.5vmin;
        line-height: 3.5vmin;
    }
    .m-item-txt .title .icon .icon2{
        margin:1vmin 0;
        background:#fff;
        color:#999;
        border:0.1vmin #999 solid;
    }
    .m-item-txt .score div{
        font-size:3vmin;
        float: left;
    }
    .m-item-txt .score{
        padding:2vmin 0;
    }
    .m-item-txt .score .txtcolor{
        color:#fea54c
    }
    .m-item-txt .score::after{
        content:'';
        clear: both;
        display: block;
    }
    .m-item-txt .score .icon{
        width:13vmin;
    }
    .m-item-txt .txt{
        padding:0.5vmin 0;
        font-size: 3.2vmin;
    }
    .m-item-button{
        width:13vmin;
        padding-top:9vmin;
        float: left;
    }
    .m-item-button .button{
        font-size:3.6vmin;
        width:100%;
        height:7vmin;
        line-height: 7vmin;
        text-align: center;
        color:#fff;
        border-radius:4vmin;
    }
    .m-item-button .pink{
        background:linear-gradient(45deg,#ff7ba0,#ff4d64);
    }
    .m-item-button .blue{
        background-image: linear-gradient(45deg,#55c2ff,#349cec);
    }
</style>
