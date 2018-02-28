import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
import first from '@/components/1'
import main from '@/components/display-page/main/main'
import mainHot from '@/components/display-page/main/main-hot'
import four from '@/components/404'
import mainPresell from '@/components/display-page/main/main-presell'
import cinema from '@/components/display-page/cinema/cinema'
import account from '@/components/display-page/account/account'
import accountUnlisted from '@/components/display-page/account/account-unlisted'
import accountListed from '@/components/display-page/account/account-listed'
import cinemaChoice from '@/components/display-page/cinema/cinema-choice'

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
    {path:'/404',component:four},
    {path:'/cinema',component:cinema},
    {path:'/account',name:'account',component:account,children:[
      {path:'/account/',component:accountUnlisted},
      {path:'/account/listed',component:accountListed}
    ]},
    {path:'/cinemaChoice',component:cinemaChoice}
  ]
})
