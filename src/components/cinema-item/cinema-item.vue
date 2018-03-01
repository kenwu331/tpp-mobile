<template>
    <div class="cinema-item" @click="cinemaChoice">
        <div>
            <span class="title">{{title}}</span>
            <span class="price">{{price}}<span>元起</span></span>
        </div>
        <div>
            <span class="address">{{address}}</span>
        </div>
        <div class="ps">
            <div :key="index" v-for="(val,index) in ps">{{val}}</div>
        </div>
        <div><span class="hui">惠</span> {{hui}}</div>
    </div>
</template>

<script>
export default {
    props:['title','price','address','ps','hui'],
    methods:{
        cinemaChoice(){
            document.body.scrollTop=0;
            this.$store.commit('cinemaMsg',[this.title,this.address,this.ps]);
            this.$router.push('/cinemaChoice')
        }
    }
}
</script>

<style>
    .cinema-item{
        padding:4vmin;
        width:92vmin;
        height:21vmin;
        font-size:0.5rem;
        color:#999;
    }
    .cinema-item>div{
        margin-bottom:1vmin;
    }
    .cinema-item .title{
        font-weight: 600;
        color: #222227;
        font-size:1rem;
    }
    .cinema-item .price{
        font-size:0.5rem;
        color:#ff4d64;
    }
    .cinema-item .price>span{
        color:#999;
    }
    .cinema-item .address{
        display: block;
        color:#777;
        text-overflow: ellipsis;
        width:72vmin;
        height:5vmin;
        overflow: hidden;
        white-space: nowrap;
    }
    .cinema-item .ps>div{
        float: left;
        padding:0 1vmin;
        color:#0ae;
        box-sizing: border-box;
        border:1px #0ae solid;
        margin-right: 1vmin;
        border-radius:4px;
    }
    .cinema-item .ps::after{
        content:'';
        clear: both;
        display:block;
    }
    .cinema-item .hui{
        border-radius: 2px;
        display: inline-block;
        width: 15px;
        height: 15px;
        line-height: 15px;
        text-align: center;
        color: #fff;
        font-size: 12px;
        background-color: #fea54c;
    }
</style>
