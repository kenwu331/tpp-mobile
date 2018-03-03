<template>
    <div class="seat">
        <div class="seat-movie">
            <div class="title">{{$store.state.choiceMoive[0]}}</div>
            <div class="msg">03-01 {{$store.state.choiceTime[0]}}开始 ( {{$store.state.choiceTime[1]}} )</div>
        </div>
        <div class="seat-prompt">
            <div>
                <div>
                    <div class="seat-icon"><div></div></div>可选
                </div>
                <div>
                    <div class="seat-icon sold"><div class="sold"></div></div>已售
                </div>
                <div>
                    <div class="seat-icon selected"><div class="selected"></div></div>已选
                </div>
            </div>
        </div>
        <div class="seat-choice">
            <div class="seat-place">{{$store.state.choiceTime[2]}}</div>
            <div class="seat-state">
                <div class="row">
                    <div class="row-num" :key="index" v-for="(val,index) in rowNum">{{val}}</div>
                </div>
                <div class="seat-view" ref="vw" id="sv">
                    <div class="seat-main">
                        <div class="row-icon" :key="index" v-for="(val,index) in icon">
                            <div :key="index3" v-for="(val3,index3) in val"><div class="seat-icon-empty" v-if="val3==0"></div></div>
                            <div :key="index2+100" v-for="(val2,index2) in val" @click="iconClick(index,val2,index2)"><div class="seat-icon" :class="{'icon-selected':val2!=parseInt(val2)}" v-if="val2!=0"><div :class="{'icon-selected':val2!=parseInt(val2)}">{{parseInt(val2)}}</div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <mt-button size="large" type="danger" class="seat-confirm">确认选座</mt-button>
        <div class="seat-price">
            <div class="phone">
                <p class="phone-msg">购票成功后将发送取票码到</p>
                <p class="phone-num">15820258055</p>
            </div>
            <div class="price">
                <p>票价 <span>35.9元</span></p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted(){
            this.aaa();
        },
    methods:{
        aaa(){
            let vww=this.$refs.vw.offsetWidth;          
            sv.scrollLeft=0.5*vww; 
        },
        iconClick(msg,msg2,msg3){
            let arr=[msg,parseInt(msg2)];
            var _this=this;
            _this.ik=arr;
            let vuex=this.$store.state.choiceSeat;
            if(vuex.length==0){
                _this.$store.commit('choiceSeat',_this.ik);
                _this.icon[msg].splice(msg3, 1,msg2+"已选");
            }else{
                for(var i=0;i<vuex.length;i++){
                    if(i==(vuex.length-1) && _this.ik.join(';')!=vuex[i].join(';')){
                        _this.$store.commit('choiceSeat',_this.ik);
                        _this.icon[msg].splice(msg3, 1,msg2+"已选");
                        break;
                    }
                    if(_this.ik.join(';')==vuex[i].join(';')){
                        _this.$store.commit('unchoiceSeat',i);
                        _this.icon[msg].splice(msg3, 1,parseInt(msg2));
                        break;
                    }
                }
            }
        }
    },
    data:function(){
        return{
            icon:[[0,0,1,2,3,4,5,6],[0,1,2,3,4,5,6,7],[0,1,2,3,4,5,6,7],[0,1,2,3,4,5,6,7],[1,2,3,4,5,6,7,8]],
            ik:[],
            is:[],
            rowNum:[1,2,3,4,5]
        }
    }
    
}
</script>

<style>
    .seat{
        width:100%;
        height:100vh;
        box-sizing: border-box;
        overflow: hidden;
        position: fixed;
        top:0;
        background:#fff;
        font-family: Helvetica Neue,Helvetica,STHeiTi,sans-serif;
    }
    .seat .seat-movie{
        padding:4vmin;
    }
    .seat .seat-movie .title{
        color: #000;
        font-size: 1rem;
        width: auto;
    }
    .seat .seat-movie .msg{
        margin-top: 1.6vmin;
        font-size: .8125rem;
        color: #666;
    }
    .seat .seat-prompt{
        width:100%;
        padding:4vmin auto;
        border-top:0.1vmin #F4F4F7 solid;
        border-bottom:0.1vmin #F4F4F7 solid;
    }
    .seat .seat-prompt>div{
        width:60vmin;
        height:10vmin;
        display:flex;
        margin:0 auto;
    }
    .seat .seat-prompt>div>div{
        width:20vmin;
        height:10vmin;
        line-height: 10vmin;
    }
    .seat .seat-icon{
        width:5vmin;
        height:3.5vmin;
        float: left;
        background:#fff;
        border:0.3vmin rgb(132, 138, 165) solid;
        position: relative;
        box-sizing: border-box;
    }
    .seat .seat-icon>div{
        width:3vmin;
        height:4.5vmin;
        position: absolute;
        bottom:0;
        left:0.6vmin;
        background:#fff;
        border:0.3vmin rgb(132, 138, 165) solid;
        text-align: center;
        /* color:#fff; */
    }
    .seat .seat-prompt .seat-icon{
        margin:2.5vmin;
    }
    .seat .seat-prompt .sold{
        background:#F44336;
    }
    .seat .seat-prompt .selected{
        background:#4CAF50;
    }
    .seat .seat-choice{
        width:100%;
        height:85vh;
        background:#EFEFF4;
    }
    .seat .seat-place{
        width:50vmin;
        height:7vmin;
        margin:0 auto;
        background:#E2E2E2;
        text-align: center;
        line-height: 7vmin;
        font-weight: 400;
        font-size: .75rem;
    }
    .seat .seat-state{
        width:100%;
        height:40vh;
        margin-top:7vmin;
        position: relative;
    }
    .seat .seat-state .row{
        position: absolute;
        left:0;
        top:0;
        background:#78787A;
        width:3vmin;
        height:39vh;
        border-radius:10px;
        overflow: hidden;
        z-index: 10;
    }
    .seat .seat-state .row .row-num{
        height:5vh;
        width:3vmin;
        text-align: center;
        margin:2vh 0;
        font-weight: 400;
        font-size: .75rem;
        color:#fff;
    }
    .seat .seat-state .seat-view{
        width:100%;
        height:39vh;
        overflow-x:scroll;
    }
    .seat .seat-state .seat-view::-webkit-scrollbar{
        display:none
    }
    .seat .seat-state .seat-view .seat-main{
        width:200vmin;
        height:20vh;
        padding-left:50vmin;
    }
    .seat .seat-state .seat-view .row-icon{
        height:5vh;
        padding:1.3vh 0;
    }
    .seat .seat-state .seat-view .row-icon>div>div{
        margin:0 3vmin;
    }
    .seat-icon-empty{
        width:5vmin;
        height:3.5vmin;
        margin:0 3vmin;
        float: left;
    }
    .seat .seat-state .seat-view .row-icon .icon-selected{
        background:#70C972;
        color:#fff;
    }
    .seat-confirm{
        position: fixed;
        bottom:0;
    }
    .seat-price{
        position: fixed;
        bottom:10vmin;
        box-sizing: border-box;
        border-top:.3vmin #DDDDDD solid;
        width:100%;
        height:16vmin;
        padding:4vmin;
    }
    .seat-price .phone-msg{
        font-size: .625rem;
        height:5vmin;
        line-height: 5vmin;
        color: #999;
        width:50vmin;
    }
    .seat-price .phone-num{
        font-size: 1.125rem;
        height:15vmin;
        line-height: 6vmin;
        color: #666;
        width:50vmin;
    }
    .seat-price .phone{
        float: left;
        height: 20vmin;
        width:50vmin;
        padding-left: 5vmin;
    }
    .seat-price .price{
        float: right;
        line-height: 10vmin;
        width:30vmin;
        text-align: right;
        color: #8a869e;
        font-weight: 400;
        font-size: .75rem;
    }
    .seat-price .price span{
        color: #ff4d64;
        font-size: 1.125rem;
        font-weight: bold;
    }
</style>
