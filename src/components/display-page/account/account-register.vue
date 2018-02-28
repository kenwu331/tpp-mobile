<template>
    <transition name="move">
        <div class="account">
            <mt-cell title=""><span @click="closeit">关闭</span></mt-cell>
            <div class="login-logo"></div>
            <div class="msg">
                <mt-field label="用户名" placeholder="手机号/邮箱/会员名" v-model="username"></mt-field>
                <mt-field label="密码" placeholder="请输入密码" v-model="upwd"></mt-field>
            </div>
            <div class="login account-button">注 册</div>
        </div>
    </transition>
</template>

<script>
export default {
    methods:{
        closeit(){
            this.$store.commit('registerState')
        }
    },
    data:function(){
        return{
            username:'',
            upwd:''
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
        background:url(./../../../../static/img/login.png) no-repeat;
        background-size: contain;
        margin:2vmin auto;
    }
    .account .msg{
        padding: 10vmin 0;
    }
    .account .account-button{
        width:90vmin;
        margin:6vmin auto;
        line-height: 13vmin;
        text-align:center;
        box-shadow: 0.5vmin 0.5vmin #f7c7b1;
        border-radius:6vmin;
        border: 1px solid #ff5000;
    }
    .account .login{
        background:linear-gradient(left,#ff9000,#ff5000) no-repeat;
        color:#fff;
    }
    .account .register{
        color:#ff5000;
    }
    .move-enter{
        transform:translateY(100%);
    }
    .move-enter-active{
        transition:transform 0.3s ease-out;
    }
</style>
