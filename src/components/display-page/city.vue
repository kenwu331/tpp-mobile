<template>
    <div class="cityUl">
        <h2>选择城市<span class="x" @click="closeCity">X</span></h2>
        <mt-index-list>
            <mt-index-section index="B">
            <span @click="choiceCity('北京')"><mt-cell title="北京"></mt-cell></span>
            </mt-index-section>
            <mt-index-section index="G">
            <span @click="choiceCity('广州')"><mt-cell title="广州"></mt-cell></span>
            </mt-index-section>
            <mt-index-section index="S">
            <span @click="choiceCity('上海')"><mt-cell title="上海"></mt-cell></span>
            </mt-index-section>
        </mt-index-list>
    </div>
</template>

<script>
export default {
    methods:{
        choiceCity(val){
            this.$store.commit('choiceCity',val)
        },
        closeCity(){
            this.$store.commit('closeCity')
        }
    }
}
</script>

<style>
    .cityUl{
        position:fixed;
        width:100vw;
        height:100vh;
        top:0;
        z-index:999;
        background: #fff;
    }
    .cityUl h2{
        text-align: center;
    }
    .cityUl .x{
        float:right;
        font-size: 5vmin;
        font-weight: 300;
        padding:1vmin 3vmin;
    }
</style>
