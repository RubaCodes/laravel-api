<template>
  <header class="p-5 bg-primary text-white">
    <div class="row">
      <div class="col d-flex align-items-center">
        logo bel blog
        <ul class="d-flex">
          <li>
            <router-link class="btn btn-info border" :to="{ name: 'home' }"
              >Home</router-link
            >
          </li>
        </ul>
      </div>
      <div class="col">
        <ul class="d-flex justify-content-end align-items-center">
          <li><a class="btn btn-info border" href="/login">Login</a></li>
        </ul>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "BaseHeader",
};
</script>

<style lang="scss" scoped>
ul {
  margin-bottom: 0;
  list-style: none;
  gap: 0.5rem;
}
</style>
