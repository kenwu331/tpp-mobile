<template>
    <div class="account">
        <mt-cell title="您需要登录才能继续访问"><span @click="closeit">关闭</span></mt-cell>
        <div class="login-logo"></div>
    </div>
</template>

<script>
export default {
    methods:{
        closeit(){
            this.$store.commit('closeAccount')
        }
    },
    data:function(){
        return{
            isShow:true
        }
    }
}
</script>

<style>
    .account{
        width:100%;
        height:100vh;
        background:#fff;
        position:fixed;
        top:0;
        z-index:999;
    }
    .login-logo{
        width:22vmin;
        height:22vmin;
        background:url(./../../../static/img/login.png) no-repeat;
        background-size: contain;
        margin:2vmin auto;
    }
</style>
