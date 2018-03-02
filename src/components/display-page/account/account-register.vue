<template>
    <transition name="move">
        <div class="account">
            <mt-cell title=""><span @click="closeit">关闭</span></mt-cell>
            <div class="login-logo"></div>
            <div class="msg">
                <mt-field label="用户名" placeholder="手机号/邮箱/会员名" v-model="uname"></mt-field>
                <mt-field label="密码" type="password" placeholder="请输入密码" v-model="upwd"></mt-field>
                <mt-field label="确认密码" type="password" placeholder="请再次输入密码" v-model="upwd2"></mt-field>
                <mt-field label="昵称" placeholder="请输入昵称" v-model="user_name"></mt-field>
            </div>
            <div class="login account-button" @click="register">注 册</div>
        </div>
    </transition>
</template>

<script>
import { Toast,Indicator } from 'mint-ui';
export default {
    methods:{
        closeit(){
            this.$store.commit('registerState')
        },
        instance(msg){ 
            Toast({
                message: msg,
                iconClass: 'icon icon-success',
                position: 'middle',
                duration: 1500
            });
        },
        register(){
            var _this=this;
            this.uname==''?this.instance("用户名不能为空"):
            this.upwd==''?this.instance("密码不能为空"):
            this.upwd2==''?this.instance("确认密码不能为空"):
            this.upwd!=this.upwd2?this.instance("两次密码必须一致"):
            this.user_name==''?this.instance("昵称不能为空"):
            Indicator.open({
                text: '加载钟...',
                spinnerType: 'fading-circle'
            }),
            this.$http.post('http://127.0.0.1/php/register.php',{uname:this.uname,upwd:this.upwd,user_name:this.user_name},{credentials: true,emulateJSON: true})
            .then(function(res){
                setTimeout(() => {  
                    Indicator.close();   
                }, 100);
                if(res.data['uname']!="用户已存在"){
                    _this.instance("注册成功")
                    _this.$store.commit('accountMsg',res.data)
                    _this.$store.commit('isLogin',true)
                    _this.$store.commit('registerState')
                    _this.$router.push('/account/listed')
                }else{
                    _this.instance("用户已存在")
                }
            })
        }
    },
    data:function(){
        return{
            uname:'',
            upwd:'',
            upwd2:'',
            user_name:''
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
        /* z-index:999; */
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
