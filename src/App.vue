<script setup>
import { RouterLink, RouterView } from "vue-router";
import { onMounted } from "vue";
import gsap from "gsap";

import NavBar from "./components/NavBar.vue";
import Footer from "./components/Footer.vue";

import ScrollTrigger from "gsap/ScrollTrigger";

onMounted(() => {
  gsap.registerPlugin(ScrollTrigger);
});
</script>
<template>
  <header>
    <NavBar />
  </header>
  <RouterView />
  <Footer />
</template>

<style scoped></style>
