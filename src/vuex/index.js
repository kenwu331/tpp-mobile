import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);
const state={
    tabActive:0
};
const mutations={
    currentTab(state,n){
        state.tabActive=n
    }
};

let store=new Vuex.Store({
    state,
    mutations
})

export default store