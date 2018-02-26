<template>
    <div class="banner1">
        <mt-swipe :auto="4000">
            <mt-swipe-item><img src="./../../../static/img/banner/banner1.jpg" width="100%"></mt-swipe-item>
            <mt-swipe-item><img src="./../../../static/img/banner/banner2.jpg" width="100%"></mt-swipe-item>
            <mt-swipe-item><img src="./../../../static/img/banner/banner3.jpg" width="100%"></mt-swipe-item>
        </mt-swipe>
    </div>
</template>

<script>
export default {
  
}
</script>

<style>
    .banner1{
        width:100%;
        height:40vmin;
        background:#fff;
    }
</style>
