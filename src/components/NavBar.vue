<template>
  <section class="section">
    <nav
      class="navbar is-fixed-top is-dark"
      :class="{ 'is-scrolled': isScrolled }"
      role="navigation"
      aria-label="main navigation"
    >
      <div class="container">
        <div class="navbar-brand">
          <RouterLink class="navbar-item" to="/">
            <img src="../assets/img/logo.svg" class="logo" />
          </RouterLink>

          <a
            role="button"
            class="navbar-burger"
            aria-label="menu"
            aria-expanded="false"
            data-target="nav-links"
            :class="{ 'is-active': isActive }"
            @click="isActive = !isActive"
          >
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div
          id="nav-links"
          class="navbar-menu has-background-dark"
          :class="{ 'is-active': isActive }"
          @click="isActive = !isActive"
        >
          <div class="navbar-end">
            <RouterLink
              v-for="navItem in navItems"
              :key="navItem.title"
              :to="navItem.to"
              class="navbar-item has-text-white"
              >{{ navItem.title }}</RouterLink
            >
            <a
              href="https://wa.me/6374053738"
              class="navbar-item has-text-white"
              >Chat Now</a
            >
          </div>
        </div>
      </div>
    </nav>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";
const isScrolled = ref(false);
const isActive = ref(false);
const navItems = ref([
  { title: "Tariff", to: "/#tarrif" },
  { title: "About", to: "/#about" },
]);

const handleScroll = () => {
  isScrolled.value = window.scrollY > 100;
};

onMounted(() => {
  window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
  window.removeEventListener("scroll", handleScroll);
});
</script>

<style scoped>
.navbar {
  height: 100px;
  transition: height 0.5s ease;
}

.navbar-item:hover {
  background-color: #2b3c4e;
}
.logo {
  max-height: 58px;
}
.is-scrolled {
  height: 75px;
}
</style>
