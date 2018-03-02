<template>
  <div class="account-main">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  created:function(){
    this.$store.commit('currentTab',2);
    // var _this=this;
    if(this.$store.state.isLogin==true){
      this.$router.push('/account/listed')
    }else{
      this.$router.push('/account/');
      this.$http.post('http://localhost/php/islogin.php',{},{emulateJSON: true})
      .then(function(res){
        // console.log(res.data["uname"])
        if(res.data["uname"]==''){
          console.log("未登录")
        }else{
          // this.$store.commit('loginState')
          this.$router.push('/account/listed')
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
