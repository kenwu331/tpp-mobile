<template>
  <div class="account-main">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  created:function(){
    this.$store.commit('currentTab',2),
    this.$store.state.isLogin?this.$router.push('/account/listed'):this.$router.push('/account/')
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
