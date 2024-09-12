<template>
  <section class="section has-background-white-ter" id="tarrif">
    <div class="container mt-6 mb-6">
      <h2
        class="title is-2 has-text-centered"
        v-motion-slide-visible-once-bottom
      >
        Tarrif
      </h2>
      <div class="divider" v-motion-pop-visible-once>
        <hr class="has-background-dark" />
        <span class="divider-icon"><i class="fas fa-star"></i></span>
        <hr class="has-background-dark" />
      </div>

      <div class="tabs is-toggle is-toggle-rounded is-centered mt-6">
        <ul>
          <li
            v-bind:class="{ 'is-active': tabSelected == 'one-way' }"
            @click="tabSelected = 'one-way'"
          >
            <a>
              <span class="icon is-small">
                <i class="fa-solid fa-right-long"></i
              ></span>
              One-Way</a
            >
          </li>
          <li
            v-bind:class="{ 'is-active': tabSelected == 'round-trip' }"
            @click="tabSelected = 'round-trip'"
          >
            <a
              ><span class="icon is-small"
                ><i class="fa-solid fa-arrow-right-arrow-left"></i></span
              >Round-Trip</a
            >
          </li>
        </ul>
      </div>

      <div v-show="tabSelected == 'one-way'">
        <div class="columns is-multiline mt-6">
          <div
            class="column is-one-quarter-desktop is-half-tablet is-full-mobile"
            v-for="tarrif in tarrif"
            :key="tarrif.car"
          >
            <div
              class="card has-text-centered is-shady"
              v-motion-pop-visible-once
            >
              <div class="card-content">
                <h3 class="title is-size-4">{{ tarrif.car }}</h3>
                <p class="subtitle">per km</p>

                <figure>
                  <img :src="tarrif.url" :alt="`${tarrif.car} image`" />
                </figure>

                <p class="is-size-1 has-text-weight-bold price">
                  {{ tarrif.oneWay }}
                </p>
                <hr class="m-3" />
                <div class="content">
                  Additional charges such as toll fees and inter-state permit
                  fees may apply.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div v-show="tabSelected == 'round-trip'">
        <div class="columns is-multiline mt-6">
          <div
            class="column is-one-quarter-desktop is-half-tablet is-full-mobile"
            v-for="tarrif in tarrif"
            :key="tarrif.car"
          >
            <div
              class="card has-text-centered is-shady"
              v-motion-pop-visible-once
            >
              <div class="card-content">
                <h3 class="title is-size-4">{{ tarrif.car }}</h3>
                <p class="subtitle">per km</p>

                <figure>
                  <img :src="tarrif.url" :alt="`${tarrif.car} image`" />
                </figure>
                <p class="is-size-1 has-text-weight-bold price">
                  {{ tarrif.roundTrip }}
                </p>
                <hr class="m-3" />
                <div class="content">
                  Additional charges such as toll fees and inter-state permit
                  fees may apply.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.title,
.subtitle {
  font-weight: bold;
}

.is-shady {
  background: #fff;
  border-radius: 5px;
  position: relative;
  transition: all 0.2s ease-in-out;
}
.is-shady:hover {
  -webkit-transform: scale(1.035) translateY(-2px);
  transform: scale(1.035) translateY(-2px);
  box-shadow: 0 10px 16px rgba(0, 0, 0, 0.13), 0 6px 6px rgba(0, 0, 0, 0.19);
}

.price::first-letter {
  font-size: 1.3rem;
}

.tabs ul {
  border-bottom-color: transparent;
}
.tabs a {
  font-weight: bold;
  text-transform: uppercase;
}
</style>

<script setup>
import { ref, computed } from "vue";
import tarrif1 from "../assets/img/tarrif-1.png";
import tarrif2 from "../assets/img/tarrif-2.png";
import tarrif3 from "../assets/img/tarrif-3.png";
import tarrif4 from "../assets/img/tarrif-4.png";

const tabSelected = ref("one-way");
const tabs = ref([
  { title: "One Way", target: "one-way" },
  { title: "Round Trip", target: "round-trip" },
]);
const isActive = ref(false);

const tarrif = ref([
  {
    car: "Sedan",
    oneWay: "₹13",
    roundTrip: "₹12",
    url: tarrif1,
  },
  {
    car: "Etios",
    oneWay: "₹14",
    roundTrip: "₹12",
    url: tarrif2,
  },
  {
    car: "SUV",
    oneWay: "₹18",
    roundTrip: "₹16",
    url: tarrif3,
  },
  {
    car: "Innova",
    oneWay: "₹19",
    roundTrip: "₹17",
    url: tarrif4,
  },
]);
</script>
