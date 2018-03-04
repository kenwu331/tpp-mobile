<template>
    <div class="account-listed">
        <h1>欢迎回来 <span>{{$store.state.accountMsg["user_name"]}}</span></h1>
        <p>用户信息</p>
        <div class="account-msg">
            <p>账户名：{{$store.state.accountMsg['uname']}}</p>
            <p>昵称：{{$store.state.accountMsg['user_name']}}</p>
            <p>手机号：{{$store.state.accountMsg['phone']}}</p>
            <p>持有电影票：</p>
            <p :key="index" v-for="(val,index) in JSON.parse($store.state.accountMsg['piao'])"><span>{{val[0]+''+val[1]}}</span><span :key="index2" v-for="(val2,index2) in val[2]" class="fr">{{(val2[0]+1)+'排'+val2[1]+'号座'}}</span></p> 
        </div>
          
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
                this.$http.post('http://localhost/php/checkout.php',{uname:"asd",upwd:"dsa"},{ credentials: true,emulateJSON: true }).then(function(res){
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
        position:fixed;
        bottom:20vmin;
    }
    .account-msg{
        width:80vmin;
        height:60vh;
        margin:5vh auto;
    }
    .account-msg p{
        text-align: left;
        margin:2vh 0;
        display:block;
        padding:1vmin;
    }
    .account-msg .fr{
        float: right;
        clear:both
    }
</style>