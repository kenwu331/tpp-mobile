<template>
  <div class="account-main">
    <router-view></router-view>
  </div>
</template>

<script>
import { Indicator } from 'mint-ui';
export default {
  created:function(){
    Indicator.open({
      text: '加载钟...',
      spinnerType: 'double-bounce'
    });
    var _this=this;
    this.$store.commit('currentTab',2);
    if(this.$store.state.isLogin==true){
      console.log(this.$store.state.accountMsg)
      this.$router.push('/account/listed')
      setTimeout(() => {  
                Indicator.close();   
            }, 500);     
    }else{
      this.$http.post('http://127.0.0.1/php/islogin.php',{uname:"asd",upwd:"dsa"},{ credentials: true,emulateJSON: true })
      .then(function(res){
        if(res.data["uname"]==''){
          _this.$router.push('/account/');
          setTimeout(() => {  
                Indicator.close();   
            }, 500); 
        }else{
          _this.$store.commit('isLogin',true)
          _this.$store.commit('accountMsg',res.data)
          _this.$router.push('/account/listed')
          setTimeout(() => {  
                Indicator.close();   
            }, 500); 
        }
      })
    } 
  }
}
</script>

<style>
  .account-main{
    width:100%;
    height:100vh;
    overflow: hidden;
  }
</style>
