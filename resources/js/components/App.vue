<template>
<div>
    <Navbar :ruta="ruta"> </Navbar>

 
    <Slider :ruta="ruta"></Slider>

    <div class="content-wrapper">
        <transition name="slide-fade" mode="out-in">
            <router-view></router-view>
        </transition>
         
    </div>
   
    <!-- <Section > </Section> -->


    <Footer></Footer>

</div>
    
</template>

<script>

import Navbar from './plantilla/Navbar.vue'
import Slider from './plantilla/Slider.vue'

import Footer from './plantilla/Footer.vue'

export default {
    props: ['ruta'],
    components:{
        Navbar,
        Slider,
        Footer

    }
    
}
</script>

<style scoped>

</style>