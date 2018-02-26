<template>
  <div id="app">
    <tab-main></tab-main>
    <router-view></router-view>
    <city v-if="$store.state.cityOpen"></city>
    <login v-if="$store.state.isShow"></login>
  </div>
</template>

<script>
import login from '@/components/display-page/account-login'
import tabMain from '@/components/tab/tab-main'
import city from '@/components/display-page/city'
export default {
  name: 'app',
  components:{
    tabMain,
    city,
    login
  }
}
</script>

<style>
#app {
  font-family: Helvetica Neue,Helvetica,Arial,Hiragino Sans GB,Microsoft Yahei,STXihei,SimHei,WenQuanYi Micro Hei,Droid Sans,sans-serif;
  /* -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px; */
}
blockquote, body, button, dd, dl, dt, fieldset, form, h1, h2, h3, h4, h5, h6, hr, input, legend, li, ol, p, pre, td, textarea, th, ul{
    margin: 0;
    padding: 0;
}
</style>
