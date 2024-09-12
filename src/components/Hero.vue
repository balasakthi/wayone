<template>
  <section class="hero is-link">
    <div class="hero-body">
      <div class="container has-text-centered p-6">
        <figure>
          <img
            ref="image"
            src="../assets/img/slider.svg"
            alt="An illustration of people hiring a taxi."
            class="hero-image mt-6"
          />
        </figure>
        <h1 ref="title" class="title mt-5 is-size-1-mobile">
          Way One Drop Taxi
        </h1>
        <div ref="divider" class="divider">
          <hr class="has-background-white" />
          <span class="divider-icon"><i class="fas fa-star"></i></span>
          <hr class="has-background-white" />
        </div>
        <p ref="subtitle" class="subtitle is-size-4 mt-4">
          We offers convenient and affordable outstation drop services across
          Tamil Nadu, Andra Pradesh, Karnataka, Kerala, and Pondicherry. Travel
          with ease and reliability to your desired location with our reliable
          taxi service.
        </p>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from "vue";
import gsap from "gsap";

const image = ref(null);
const title = ref(null);
const subtitle = ref(null);
const divider = ref(null);

onMounted(() => {
  const tl = gsap.timeline();
  tl.from(image.value, { scale: 0.7, opacity: 0, duration: 0.5 })
    .from(title.value, { y: 50, opacity: 0, duration: 0.5 })
    .from(divider.value, { scale: 0.7, opacity: 0, duration: 0.5 })
    .from(subtitle.value, { y: 50, opacity: 0, duration: 0.5 });
});
</script>

<style scoped>
.hero {
  margin-top: -2rem;
}
.title {
  font-size: 4rem;
  font-weight: bold;
}
</style>
