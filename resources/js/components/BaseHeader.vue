<template>
  <header class="p-5">
    <div class="row">
      <div class="col">logo bel blog</div>
      <div class="col">
        <ul class="d-flex justify-content-end">
          <li>link di nav</li>
          <li>link di nav</li>
          <li>link di nav</li>
          <li>link di nav</li>
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
