<template>
    <div class="cinema">
        <navMain :disable1="db"></navMain>
        <cinemaItem :key="index" v-for="(val,index) in cinema"
        :title="val[0]" :price="val[1]" :address="val[2]" :ps="val[3]" :hui="val[4]"
        ></cinemaItem>
    </div>
</template>

<script>
import navMain from '@/components/nav/nav-main'
import cinemaItem from '@/components/cinema-item/cinema-item'
export default {
    components:{
        navMain,
        cinemaItem
    },
    data:function(){
        return{
            db:'guan',
            cinema:[['华影星美国际影城','34','荔湾区环市西路133号华南影都D区二楼',['退票','改签','观影小食','4K厅'],'红海行动等3部影片特惠'],['华影青宫电影城','30','越秀区北京路312号青年文化宫二楼（晚上22点后请由青宫南门入）',['改签','观影小食','4K厅'],'捉妖记2等2部影片特惠'],['广州五月花电影城','36','越秀区中山五路68号五月花商业广场6楼全层',['改签','观影小食'],'唐人街探案2等3部影片特惠'],['广州飞扬影城-天河城店','36','天河区天河路208号天河城广场内西北塔四楼',['改签','观影小食','4D厅'],'红海行动等3部影片特惠'],['广州飞扬影城-正佳IMAX店','36','天河区天河路228号正佳广场七楼',['改签','观影小食','IMAX厅'],'捉妖记2等3部影片特惠'],['中华广场电影城','40','越秀区中山三路33号中华广场8楼',['改签','观影小食','巨幕厅'],'唐人街探案2等2部影片特惠'],['喜洋时代影城（花都星光汇店）','29','花都区建设北路72号星光汇商厦八楼',['改签','观影小食'],'红海行动等2部影片特惠']]
        }
    },
    created:function(){
        this.$store.commit('currentTab',1)
    }
}
</script>

<style>
    .cinema::before{
        content:'';
        clear: both;
        display:block;
        width:100%;
        height:11vmin;
    }
    .cinema::after{
        content:'已到底部';
        clear: both;
        display:block;
        width:100%;
        height:30vmin;
        text-align: center;
        font-size: 3vmin;
    }
</style>
