import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);
const state={
    tabActive:0,
    city:'广州',
    cityOpen:false,
    isShow:false,
    isRegisterShow:false,
    isLogin:false
};
const mutations={
    currentTab(state,n){
        state.tabActive=n
    },
    choiceCity(state,n){
        state.city=n,
        state.cityOpen=false
    },
    cityOpen(state){
        state.cityOpen=true
    },
    closeCity(state){
        state.cityOpen=false
    },
    loginState(state){
        state.isShow=!state.isShow
    },
    registerState(state){
        state.isRegisterShow=!state.isRegisterShow
    }
};

let store=new Vuex.Store({
    state,
    mutations
})

export default store