import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);
const state={
    tabActive:0,
    city:'广州',
    cityOpen:false,
    isShow:false,
    isRegisterShow:false,
    isLogin:false,
    accountMsg:[],
    choiceCinema:'',
    choiceMoive:['红海行动','9.3','138分钟 | 动作 | 张译 黄景瑜 海清',0],
    moiveMsg:'',
    choiceTime:'',
    choiceSeat:[],
    seatList:[]
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
    },
    cinemaMsg(state,n){
        state.choiceCinema=n
    },
    moiveMsg(state,n){
        state.choiceMoive=n
    },
    allMoiveMsg(state,n){
        state.moiveMsg=n
    },
    accountMsg(state,n){
        state.accountMsg=n
    },
    isLogin(state,n){
        state.isLogin=n
    },
    choiceTime(state,n){
        state.choiceTime=n
    },
    choiceSeat(state,n){
        state.choiceSeat.push(n)
    },
    unchoiceSeat(state,n){
        state.choiceSeat.splice(n,1)
    },
    addPiao(state,n){
        state.accountMsg['piao']=n
    },
};

let store=new Vuex.Store({
    state,
    mutations
})

export default store