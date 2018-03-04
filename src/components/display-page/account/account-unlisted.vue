<template>
    <div class="account-unlisted">
        <h1>您还未登录</h1>
        <h3 @click="loginState">去登录</h3>
        <h3 @click="registerState">去注册</h3>
    </div>
</template>

<script>
export default {
    methods:{
        loginState(){
            this.$store.commit('loginState')
        },
        registerState(){
            this.$store.commit('registerState')
        }
    }
  
}
</script>

<style>
    .account-unlisted{
        margin:0 auto;
        margin-top:40vh;
        transform:translateY(-50%);
        text-align: center;
    }
    .account-unlisted h3{
        margin:10vmin 0;
        width:90vmin;
        margin:6vmin auto;
        line-height: 13vmin;
        text-align:center;
        box-shadow: 0.5vmin 0.5vmin #f7c7b1;
        border-radius:6vmin;
        border: 1px solid #ff5000;
        display:block;
    }
</style>
