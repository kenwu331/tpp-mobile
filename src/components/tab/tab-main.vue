<template>
    <div class="tab">
        <tabItem :key="index" 
        :img="$store.state.tabActive==index?imgurl2[index]:imgurl[index]"
        :fontcolor="$store.state.tabActive==index?'#ff4d64':'#777'"
        :txt="txt[index]"
        :i="index"
        v-for="(val,index) in imgurl"
        ></tabItem>
    </div>    
</template>

<script>
    import tabItem from '@/components/tab/tab-item';
    export default {
        components:{
            tabItem
        },
        data:function(){
            return{
                imgurl:['./../../../static/img/tab1.png','./../../../static/img/tab2.png','./../../../static/img/tab3.png'],
                imgurl2:['./../../../static/img/tab1_red.png','./../../../static/img/tab2_red.png','./../../../static/img/tab2_red.png'],
                txt:['热映','影院','我的']    
            }
        },
        methods:{
            current(i){
                console.log("asd");
                this.$store.commit("currentTab",i);  
            }
        }
    }
</script>

<style>
    .tab{
        background:rgb(254,253,252);
        height:13vmin;
        width:100%;
        position:fixed;
        bottom:0;
        display:flex;
    }
    .tab1{
        flex:1;
    }
</style>
