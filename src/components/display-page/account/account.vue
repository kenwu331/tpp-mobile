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
    this.$store.commit('currentTab',2);
    if(this.$store.state.isLogin==true){
      console.log(this.$store.state.accountMsg)
      this.$router.push('/account/listed')
      setTimeout(() => {  
                Indicator.close();   
            }, 500);     
    }else{
      this.$http.post('http://www.wuhaijun.com.cn/php/islogin.php',{uname:"asd",upwd:"dsa"},{ credentials: true,emulateJSON: true })
      .then(function(res){
        if(res.data["uname"]==''){
          this.$router.push('/account/');
          setTimeout(() => {  
                Indicator.close();   
            }, 500); 
        }else{
          console.log(res)
          this.$store.commit('isLogin',true)
          this.$store.commit('accountMsg',res.data)
          this.$router.push('/account/listed')
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
