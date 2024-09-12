<template>
  <footer class="footer has-background-dark p-0">
    <div class="container p-6">
      <div class="columns is-centered">
        <div class="column is-one-third has-text-centered">
          <h2 class="title is-4 has-text-white">Address</h2>
          <p class="has-text-light">
            Madhu Balan R,<br />
            S1, Blue Bells Apartment,<br />
            V.G.P. Prabhu Nagar 1<sup>st</sup> Street,<br />
            Perumbakkam, <br />Chennai- 600 100.
          </p>
        </div>
        <div class="column is-one-third has-text-centered">
          <h2 class="title is-4 has-text-white">Follow us</h2>
          <a href="#"
            ><i class="fab fa-facebook fa-2x has-text-light p-3"></i
          ></a>
          <a href="#"
            ><i class="fab fa-youtube fa-2x has-text-light p-3"></i
          ></a>
          <a href="#"
            ><i class="fab fa-instagram fa-2x has-text-light p-3"></i
          ></a>
        </div>
        <div class="column is-one-third has-text-centered">
          <h2 class="title is-4 has-text-white">Way one drop taxi</h2>
          <p class="has-text-light">
            Contact us today to learn more about our services and how we can
            help you get where you need to go.
          </p>
        </div>
      </div>
    </div>
    <section class="copyright has-text-centered has-text-light p-5">
      <p>© 2023 Way One Drop Taxi. All rights reserved.</p>
    </section>

    <section class="fixed-bottom-right">
      <a
        href="tel:+91 6374053738"
        class="button is-large mb-2 is-info"
        v-motion-slide-top
      >
        <span class="icon is-medium"
          ><i class="fa fa-phone-alt fa-lg"></i
        ></span>
      </a>
      <a
        href="https://wa.me/6374053738"
        class="button is-large is-success"
        v-motion-slide-bottom
      >
        <span class="icon is-medium"
          ><i class="fa-brands fa-whatsapp fa-lg"></i
        ></span>
      </a>
    </section>
  </footer>
</template>

<script setup>
import { ref } from "vue";
const show = ref(false);
</script>

<style scoped>
.title {
  font-weight: bold;
}

p {
  font-size: 1.25rem;
  /* font-weight: bold; */
}

.copyright {
  background-color: #1a252f;
}

.fixed-bottom-right {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}
</style>
