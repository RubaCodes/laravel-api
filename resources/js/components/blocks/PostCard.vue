<template>
  <div class="post-card">
    <h1>{{ title }}</h1>
    <p>
      {{ content }}
    </p>
    <a class="bg-white btn" href="">vai alla pagina del post</a>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: {
    title: String,
    content: String,
  },
};
</script>

<style lang="scss" scoped>
.post-card {
  border-radius: 1rem;
  background-color: lightblue;
  padding: 1rem;
}
h1 {
  text-align: center;
}
</style>
