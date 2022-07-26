<template>
  <main>
    <div class="container">
      <h1>
        Questa e' la home del mio blog, se vuoi vedere i post clicca qui sotto
      </h1>
      <router-link :to="{ name: 'posts' }">Visualizza i posts</router-link>
    </div>
  </main>
</template>

<script>
export default {
  name: "Home",
};
</script>

<style></style>
