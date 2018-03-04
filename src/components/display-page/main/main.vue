<template>
    <div class="main">
        <navMain></navMain>
        <router-view></router-view>
    </div>
</template>

<script>
import navMain from '@/components/nav/nav-main'
export default {
    components:{
        navMain
    },
    created:function(){
        this.$store.commit('currentTab',0)
    }
}
</script>

<style>
    .main::before{
        content:'';
        clear: both;
        display:block;
        width:100%;
        height:11vmin;
    }
</style>
