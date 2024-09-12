<template>
  <section class="section mt-6">
    <div class="container">
      <div class="columns reverse-row-order">
        <div class="column is-inline-block has-text-centered">
          <figure class="image">
            <img
              src="../assets/img/page-not-found.svg"
              style="max-height: 512px"
            />
          </figure>
        </div>
        <div class="column has-text-centered">
          <h2 class="title is-size-1 has-text-weight-bold">404</h2>
          <h2 class="subtitle is-size-3 has-text-weight-bold">
            Page Not Found
          </h2>
          <p class="paragraph is-size-4">
            We're sorry, the page you requested could not be found
          </p>
          <p class="paragraph is-size-4">Please go back to the homepage</p>
          <RouterLink class="button is-primary mt-4 is-medium" to="/"
            >Go Home</RouterLink
          >
        </div>
      </div>
      <hr />
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style scoped></style>
