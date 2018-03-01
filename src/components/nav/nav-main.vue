<template>
    <div class="nav-main">
        <div class="nav-city" @click="cityOpen">
            <div class="pic"></div>
            <div>{{$store.state.city}}</div>
            <div class="v"></div>
        </div>
        <div class="nav-item" v-if="disable1!='guan'">
            <div class="item" :class="{'current':currentItem==index}" 
            :key="index" v-for="(val,index) in item" 
            @click="choiceNav(index)">{{val}}</div>
        </div>
    </div>
</template>

<script>
export default {
    props:['disable1'],
    data:function(){
        return{
            item:['正在热映','即将上映'],
            currentItem:0,
            itemRouter:['/main/','/main/pre']
        }
    },
    methods:{
        choiceNav(i){
            this.currentItem=i;
            document.body.scrollTop=0;
            this.$router.push(this.itemRouter[i])
        },
        cityOpen(){
            this.$store.commit('cityOpen')
        }
    }
}
</script>

<style>
    .nav-main{
        width:100%;
        position:fixed;
        top:0;
        height:11vmin;
        overflow: hidden;
        color:#999;
        background:#fff;
    }
    .nav-city{
        width:42%;
        height:11vmin;
        line-height: 11vmin;
        box-sizing: border-box;
        padding-left:5vmin;
        float: left;
    }
    .nav-city div{
        float: left;
        position:relative;
        top:50%;
        transform: translateY(-50%);
        margin-right:2vmin;
    }
    .nav-city .pic{
        width:25px;
        height:25px;
        background:url(./../../../static/img/logo.png);
    }
    .nav-city .v{
        width:2vmin;
        height:2vmin;
        border-bottom:0.2vmin #999 solid;
        border-left:0.2vmin #999 solid;
        transform:rotate(-45deg);
        top:30%;
    }
    .nav-item{
        float: left;
        width:40vmin;
        height:11vmin;
        display: flex;
        text-align: center;
        line-height: 11vmin;
        font-size:3.5vmin;
    }
    .nav-item .item{
        flex:1;       
    }
    .nav-item .current{
        border-bottom:0.8vmin #ff4d64 solid;
        color:#ff4d64;
    }
</style>
