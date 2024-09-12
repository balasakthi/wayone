<template>
  <section id="contact" class="section m-6">
    <div class="container">
      <h2 class="title is-2 has-text-centered">Contact</h2>
      <div class="divider">
        <hr class="has-background-dark" />
        <span class="divider-icon"><i class="fas fa-star"></i></span>
        <hr class="has-background-dark" />
      </div>
      <div class="columns is-centered mt-6">
        <div class="column is-7">
          <form @submit.prevent="submitForm" accept-charset="UTF-8">
            <div class="field">
              <div class="control">
                <input
                  class="input is-large"
                  type="text"
                  placeholder="Full Name"
                  id="fullName"
                  v-model="formData.fullName"
                  required
                />
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input
                  class="input is-large"
                  type="email"
                  placeholder="Email Address"
                  id="email"
                  v-model="formData.email"
                  required
                />
              </div>
            </div>
            <div class="field">
              <div class="control">
                <textarea
                  class="textarea is-large"
                  placeholder="Message"
                  id="message"
                  v-model="formData.message"
                  required
                ></textarea>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <button class="button is-medium is-link" type="submit">
                  <span class="icon is-small">
                    <i class="fa-solid fa-paper-plane"></i>
                  </span>
                  <span>Send</span>
                </button>
              </div>
            </div>
          </form>
          <div
            class="notification mt-5 is-size-5"
            :class="type"
            v-if="isVisible"
          >
            <button class="delete" @click="closeNotification"></button
            >{{ status }}
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, watchEffect } from "vue";

const isVisible = ref(false);
const formData = ref({
  fullName: "",
  email: "",
  message: "",
});
const status = ref(null);
const type = ref(null);

function closeNotification() {
  isVisible.value = false;
}

watchEffect(() => {
  if (isVisible.value) {
    setTimeout(() => {
      isVisible.value = false;
    }, 5000);
  }
});

const submitForm = async () => {
  const response = await fetch("/send-email.php", {
    method: "POST",
    body: JSON.stringify(formData.value),
    headers: {
      "Content-Type": "application/json",
    },
  });

  isVisible.value = true;

  if (response.ok) {
    status.value =
      "Your message has been sent. We appreciate your feedback and will respond to your inquiry soon.";
    type.value = "is-success";
  } else {
    status.value =
      "We're experiencing technical difficulties and are unable to send your message at this time. Please try again later.";
    type.value = "is-danger";
  }
  // Clear the form data
  formData.value.fullName = "";
  formData.value.email = "";
  formData.value.message = "";
};
</script>

<style scoped>
.title {
  font-weight: bold;
}
</style>
