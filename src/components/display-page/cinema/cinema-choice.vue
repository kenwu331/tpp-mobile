<template>
    <div style="width:100%">
        <div class="empty"></div>
        <div class="cinema-choice">
            <div class="cinema-msg">
                <div class="cinema-title">华影星美国际影城</div>
                <div class="cinema-address">荔湾区环市西路133号华南影都D区二楼</div>
                <div class="cinema-ps">
                    <div>退票</div>
                    <div>退票</div>
                </div>
                <div class="rechoice">重选</div>
            </div>
            <div class="cinema-hui">
                光大银行卡新春活动 满11减10元
                <div class="icon"></div>
            </div>
            <div class="movie" id="movieLeft" @touchend="moveConfirm">
                <div class="movie-item">
                    <div class="current"><img src="./../../../../static/img/m-item/m-item1.jpg" width="100%"></div>
                    <div><img src="./../../../../static/img/m-item/m-item2.jpg" width="100%"></div>
                    <div><img src="./../../../../static/img/m-item/m-item3.jpg" width="100%"></div>
                    <div><img src="./../../../../static/img/m-item/m-item4.jpg" width="100%"></div>
                    <div><img src="./../../../../static/img/m-item/m-item5.jpg" width="100%"></div>
                    <div><img src="./../../../../static/img/m-item/m-item6.jpg" width="100%"></div>
                    <div><img src="./../../../../static/img/m-item/m-item7.jpg" width="100%"></div>
                    <div><img src="./../../../../static/img/m-item/m-item8.jpg" width="100%"></div>
                    <div ref="MIW"></div>
                </div>
            </div>
            <div class="movie-msg">
                <div class="title">红海行动<span class="score">9.3分</span></div>
                <div>138分钟 | 动作 | 张译 黄景瑜 海清</div>
            </div>
            <div class="movie-date">
                <div class="current">今天03-01</div>
                <div>明天03-02</div>
            </div>
            <div class="movie-time" :key="index" v-for="index in gg">
                <div class="time">
                    <div class="time-start">20:40</div>
                    <div class="ps">22:58散场</div>
                </div>
                <div class="place">
                    <div class="place-type">国语 3D</div>
                    <div class="ps">2号厅</div>
                </div>
                <div class="buy-btn">购票</div>
                <div class="price">
                    <div class="price-hui">36<span>元</span></div>
                    <div class="ps">70元<div></div></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data:function(){
        return{
            gg:[1,2,3,4,5,6,7,8]
        }
    },
    mounted () {
        movieLeft.addEventListener('scroll', this.ML);
    },
    methods:{
        ML(){
            var scrollLeft = movieLeft.pageXOffset || movieLeft.scrollLeft
        },
        moveConfirm(){
            var scrollLeft = movieLeft.pageXOffset || movieLeft.scrollLeft
            // console.log(scrollLeft);
            var mw=1.294*this.$refs.MIW.offsetWidth;
            var nowMwCount=parseInt((scrollLeft-0.5*mw)/mw);
            nowMwCount>7?nowMwCount=7:true;
            nowMwCount>=0?movieLeft.scrollLeft=nowMwCount*mw:movieLeft.scrollLeft=0
            
        }
    }
  
}
</script>

<style>
    .empty{
        width:100vw;
        height:100vh;
        background:#fff;
        position:fixed;
        top:0;
        z-index:100
    }
    .cinema-choice{
        position:relative;
        z-index:101;
        width:100%;
    }
    .cinema-msg{
        padding:4vmin;
        width:92vmin;
        height:21vmin;
        font-size:0.85rem;
        color:#999;
        position: relative;
    }
    .cinema-msg>div{
        margin-bottom:1vmin;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .cinema-msg .cinema-title{
        font-size: 1rem;
        line-height: 1.1875rem;
        margin-bottom: .5625rem;
        font-weight: 700;
        color: #222;
    }
    .cinema-msg .cinema-ps>div{
        float: left;
        padding:0 1vmin;
        color:#0ae;
        box-sizing: border-box;
        border:1px #0ae solid;
        margin-right: 1vmin;
        border-radius:4px;
        font-size:0.5rem;
    }
    .cinema-msg .cinema-ps::after{
        content:'';
        clear: both;
        display:block;
    }
    .cinema-msg .rechoice{
        position:absolute;
        right:8vmin;
        top:50%;
        transform:translateY(-50%);
        background:linear-gradient(45deg,#72e5fa,#4d9aff);
        color:#fff;
        padding:0 4vmin;
        line-height: 7vmin;
        text-align: center;
        border-radius:25px;
    }
    .cinema-hui{
        margin:4vmin;
        padding:4vmin;
        background:#F3F9FD;
        color: #65b1db;
        border:0.3vmin #E4F1F9 solid;
        border-radius:2px;
        position: relative;
    }
    .cinema-hui .icon{
        position:absolute;
        right:5vmin;
        top:50%;
        transform: translateY(-50%) rotate(45deg);
        border-top:0.3vmin #65b1db solid;
        border-right:0.3vmin #65b1db solid;
        width:2vmin;
        height:2vmin;
    }
    /* --------------------------------------------------------------------------------- */
    .movie{
        width:100%;
        height:33vmin;
        background:#333;
        overflow-x:scroll;
    }
    .movie-item{
        width:250vmin;
        height:33vmin;
        background:#999;
        padding-left:39vmin
    }
    .movie-item>div{
        display:flex;
        justify-content:flex-end;
        flex-direction:column;
        width:17vmin;
        height:33vmin;
        margin-right:5vmin;
        float: left;
    }
    .movie-item .current{
        width:21vmin;
    }
    /* ----------------------------------------------------------------------------- */
    .movie::-webkit-scrollbar{
        display:none
    }
    .movie-msg{
        text-align:center;
        font-size:0.85rem;
        color:#999;
    }
    .movie-msg .title{
        font-size: 1rem;
        line-height: 1.1875rem;
        margin: .5625rem;
        font-weight: 700;
        color: #222;
    }
    .movie-msg .score{
        color: #fea54c;
        padding-left:2vmin;
        font-weight: 300;
    }
    .movie-date{
        border-bottom:0.5vmin #F4F4F4 solid;
        box-sizing: border-box;
        font-size: 0.85rem;
        line-height: 0.85rem;
        color: #333;
        padding:0 4vmin;
        height:11.6vmin;
    }
    .movie-date>div{
        padding:4vmin 0;
        text-align: center;
        width:20vmin;
        color:#999;
        float: left;
        margin:0 3vmin;
    }
    .movie-date .current{
        border-bottom:0.5vmin #ff4d64 solid;
        color:#ff4d64;
    }
    .movie-time{
        border-bottom:0.5vmin #EDEDED solid;
        height:10vmin;
        width:95vmin;
        float: left;
        padding:7vmin 0 7vmin 5vmin;
    }
    .movie-time>div{
        float: left;
        height:10vmin;
        margin-right:7vmin;
    }
    .movie-time>div .ps{
        font-size:0.7rem;
        color:#999;
    }
    .movie-time>div>div{
        height:5vmin;
        display: flex;
        justify-content: flex-end;
        flex-direction:  column;
    }
    .movie-time .time-start{
        color: #333;
        font-weight: 700;
        font-size:1.25rem;
    }
    .movie-time .place-type{
        color: #333;
        font-size: 0.75rem;
    }
    .movie-time .price{
        float: right;
        text-align: right;
    }
    .movie-time .price .price-hui{
        font-weight: 700;
        font-size: 1.25rem;
        color: #fd2c32;
        display:flex;
        flex-direction:row;
    }
    .movie-time .price .price-hui>span{
        font-size: .75rem;
        font-weight: 400;
        transform:translateY(0.25rem);
    }
    .movie-time .price .ps>div{
        width:100%;
        border-top:2px #999 solid;
        transform:translateY(-0.5rem) rotate(-8deg) translateX(0.2rem);
    }
    .movie-time .buy-btn{
        float: right;
        margin-top:5vmin;
        transform: translateY(-50%);
        padding:1vmin 2vmin;
        font-size:0.8rem;
        height:5vmin;
        line-height: 5vmin;
        text-align: center;
        border:1px #ff4d64 solid;
        border-radius:15px;
        width:10vmin;
        color: #ff4d64;
        font-weight: 600
    }
</style>
