import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
import first from '@/components/1'
import main from '@/components/display-page/main'
import mainHot from '@/components/display-page/main-hot'
import four from '@/components/404'
import mainPresell from '@/components/display-page/main-presell'

Vue.use(Router)

export default new Router({
  routes: [
    {path:'/',redirect: '/main'},
    {
      path: '/main',
      name: 'main',
      component: main,
      children:[
        {path:'/main/',component:mainHot},
        {path:'/main/pre',component:mainPresell}
      ]
    },
    {path:'/404',component:four}
  ]
})
