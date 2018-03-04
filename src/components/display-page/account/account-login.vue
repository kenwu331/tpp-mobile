<template>
    <transition name="move">
        <div class="account">
            <mt-cell title="您需要登录才能继续访问"><span @click="closeit">关闭</span></mt-cell>
            <div class="login-logo"></div>
            <div class="msg">
                <mt-field label="用户名" placeholder="手机号/邮箱/会员名" v-model="uname"></mt-field>
                <mt-field label="密码" type="password" placeholder="请输入密码" v-model="upwd"></mt-field>
            </div>
            <div class="login account-button" @click="login">登 录</div>
            <div class="register account-button" @click="gotoregister">注 册</div>
        </div>
    </transition>
</template>

<script>
import { Toast,Indicator } from 'mint-ui';
export default {
    methods:{
        closeit(){
            this.$store.commit('loginState')
        },
        gotoregister(){
            this.$store.commit('loginState')
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
        login(){
            var _this=this;
            if(this.uname==''||this.upwd==''){this.instance("用户名或密码不能为空")}
            else{
                Indicator.open({
                    text: '加载钟...',
                    spinnerType: 'fading-circle'
                });
                this.$http.post('http://www.wuhaijun.com.cn/php/login.php',{uname:this.uname,upwd:this.upwd},{credentials: true,emulateJSON: true}).then(function(res){
                    setTimeout(() => {  
                        Indicator.close();   
                    }, 100); 
                    if(res.data["uname"]!=""){
                        _this.instance("登录成功!")
                        _this.$store.commit('accountMsg',res.data)
                        // console.log(_this.$store.state.accountMsg["uname"])
                        _this.$store.commit('isLogin',true)
                        console.log(res.data)
                        console.log(res)
                        _this.$store.commit('loginState')
                        _this.$router.push('/account/listed')
                    }else{
                        _this.instance("密码错误或用户不存在!")
                        this.upwd='';
                    }
                })
            }            
        }
    },
    data:function(){
        return{
            uname:'',
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
        background:linear-gradient(45deg,#ff9000,#ff5000);
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
