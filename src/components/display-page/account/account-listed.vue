<template>
    <div class="account-listed">
        <h1>欢迎回来<span>{{$store.state.accountMsg["user_name"]}}</span></h1>       
        <mt-button class="checkout" type="danger" size="large" @click="checkout">登出</mt-button>
    </div>
</template>

<script>
import { MessageBox,Toast,Indicator } from 'mint-ui';
export default {
    methods:{
        instance(msg){ 
            Toast({
                message: msg,
                iconClass: 'icon icon-success',
                position: 'middle',
                duration: 1500
            });
        },
        checkout(){
            MessageBox.confirm('亲爱的 '+this.$store.state.accountMsg["user_name"]+' 您确定要退出吗?').then(action => {
                Indicator.open({
                    text: '加载钟...',
                    spinnerType: 'fading-circle'
                });
                var _this=this;
                this.$http.post('http://127.0.0.1:80/php/checkout.php',{uname:"asd",upwd:"dsa"},{ credentials: true,emulateJSON: true }).then(function(res){
                    setTimeout(() => {  
                        Indicator.close();   
                    }, 100);
                    _this.instance("登出成功")
                    _this.$store.commit('isLogin',false)
                    _this.$store.commit('accountMsg','')
                    _this.$router.push('/account/');
                })
            })
            
        }
    }
  
}
</script>

<style>
    .account-listed{
        margin:0 auto;
        margin-top:10vh;
        height:75vh;
        text-align: center;
        position: relative;
    }
    .account-listed .checkout{
        position:absolute;
        bottom:0
    }
</style>