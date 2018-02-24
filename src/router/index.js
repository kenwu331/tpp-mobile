import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
import first from '@/components/1'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'first',
      component: first
    }
  ]
})
