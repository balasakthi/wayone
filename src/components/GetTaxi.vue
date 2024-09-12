<template>
  <section id="gettaxi" class="section">
    <div class="container p-6">
      <h2 class="title is-2 has-text-centered">Get Taxi</h2>
      <div class="divider">
        <hr class="has-background-dark" />
        <span class="divider-icon"><i class="fas fa-star"></i></span>
        <hr class="has-background-dark" />
      </div>
      <div class="columns is-centered mt-6">
        <div class="column is-7">
          <form>
            <div class="field">
              <div class="control">
                <input
                  class="input is-large"
                  type="text"
                  placeholder="Pickup location"
                />
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input
                  class="input is-large"
                  type="text"
                  placeholder="Drop location"
                />
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input
                  class="input is-large"
                  type="text"
                  placeholder="Full name"
                />
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input
                  class="input is-large"
                  type="tel"
                  placeholder="Mobile number"
                />
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input
                  class="input is-large"
                  type="email"
                  placeholder="Email"
                />
              </div>
            </div>
            <div class="columns">
              <div class="column">
                <div class="field">
                  <div class="control">
                    <input
                      class="input is-large"
                      type="date"
                      placeholder="Pickup date"
                    />
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <div class="control">
                    <input
                      class="input is-large"
                      type="time"
                      placeholder="Pickup time"
                    />
                  </div>
                </div>
              </div>
            </div>

            <div class="field">
              <div class="control">
                <button class="button is-medium is-link">
                  <span class="icon is-small">
                    <i class="fa-solid fa-calculator"></i>
                  </span>
                  <span>Get Estimate</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {};
</script>

<style scoped>
.title {
  font-weight: bold;
}
</style>
