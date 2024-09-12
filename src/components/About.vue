<template>
  <section id="about" class="section has-background-link">
    <div class="container has-text-white p-6">
      <h2 ref="title" class="title is-2 has-text-centered has-text-white">
        Trusted Taxi Services in TamilNadu
      </h2>
      <div ref="divider" class="divider">
        <hr class="has-background-white" />
        <span class="divider-icon"><i class="fas fa-star"></i></span>
        <hr class="has-background-white" />
      </div>
      <div ref="columns" class="columns is-centered mt-3">
        <article class="column">
          <p class="is-size-5">
            At Way One Drop Taxi, we are committed to providing the best taxi
            booking experience for our customers. Our team is passionate about
            delivering reliable, safe, and affordable transportation services to
            help you get to your destination on time and hassle-free.
          </p>
        </article>
        <article class="column">
          <p class="is-size-5">
            Our team of experienced drivers and customer service representatives
            are dedicated to ensuring that your ride with us is comfortable,
            convenient, and stress-free. We work hard to meet all of your
            transportation needs, from airport transfers to city tours, and
            everything in between.
          </p>
        </article>
        <article class="column">
          <p class="is-size-5">
            Way One Drop Taxi is more than just a taxi service – we are your
            partners in travel. We believe that everyone deserves to have access
            to reliable and affordable transportation, and we are committed to
            making that a reality for our customers.
          </p>
        </article>
      </div>
      <div class="has-text-centered">
        <a
          class="button is-inverted is-primary is-medium is-outlined"
          href="tel:+91 6374053738"
          >Book now</a
        >
      </div>
    </div>
    -
  </section>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { gsap } from "gsap";

const title = ref(null);
const divider = ref(null);
const columns = ref(null);

onMounted(() => {
  const titleTimeline = gsap.timeline({
    scrollTrigger: {
      trigger: title.value,
      start: "top 75%",
      end: "bottom 25%",
    },
  });

  titleTimeline.fromTo(
    title.value,
    { y: 50, opacity: 0 },
    { y: 0, opacity: 1 }
  );

  const dividerTimeline = gsap.timeline({
    scrollTrigger: {
      trigger: divider.value,
      start: "top 75%",
      end: "bottom 25%",
    },
  });

  dividerTimeline.fromTo(
    divider.value,
    { scale: 0 },
    { scale: 1, transformOrigin: "center" }
  );

  const columnTimeline = gsap.timeline({
    scrollTrigger: {
      trigger: columns.value,
      start: "top 75%",
      end: "bottom 25%",
    },
  });

  columnTimeline
    .addLabel("start")
    .fromTo(
      columns.value.children[0],
      { y: 50, opacity: 0 },
      { y: 0, opacity: 1, delay: 0.3 }
    )
    .fromTo(
      columns.value.children[1],
      { y: 50, opacity: 0 },
      { y: 0, opacity: 1 }
    )
    .fromTo(
      columns.value.children[2],
      { y: 50, opacity: 0 },
      { y: 0, opacity: 1 }
    )
    .addLabel("end");
});
</script>

<style scoped>
.title {
  font-weight: bold;
}
</style>
