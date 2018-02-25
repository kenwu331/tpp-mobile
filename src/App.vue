<template>
  <div id="app">
    <tab-main></tab-main>
    <!-- <router-view></router-view> -->
  </div>
</template>

<script>
import tabMain from '@/components/tab/tab-main'
export default {
  name: 'app',
  components:{
    tabMain
  }
}
</script>

<style>
/* #app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
} */
blockquote, body, button, dd, dl, dt, fieldset, form, h1, h2, h3, h4, h5, h6, hr, input, legend, li, ol, p, pre, td, textarea, th, ul{
    margin: 0;
    padding: 0;
}
</style>
