<template>
    <div class="tab-item" @click="currentTab">
        <span class="tab-item-icon" :style="{backgroundImage:'url('+img+')'}"></span>
        <span :style="{color:fontcolor}">{{txt}}</span>
    </div>
</template>

<script>
export default {
    props:['img','fontcolor','txt','i'],
    methods:{
        currentTab(){
            document.body.scrollTop=0;
            this.$store.commit('currentTab',this.i)
            this.$router.push(this.routerLink[this.i])
        }
    },
    data:function(){
        return{
            routerLink:['/main','/cinema','/account']
        }
    }
}
</script>

<style>
    .tab-item{
        flex:1;
        text-align:center;
    }
    .tab-item .tab-item-icon{
        width:100%;
        height:7vmin;
        /* background:url(./../../../static/img/tab3.png); */
        background-size: contain;
        background-repeat: no-repeat;
        background-position: 50%;
    }
    .tab-item span{
        display: block;
        margin:0 auto;
        font-size:4vmin;
    }
</style>
