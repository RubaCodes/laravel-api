<template>
  <div class="post-card">
    <h1>{{ title }}</h1>
    <p>
      {{ content }}
    </p>
    <router-link :to="{ name: 'post', params: { slug: slug } }"
      >Visualizza post</router-link
    >
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: {
    title: String,
    content: String,
    slug: String,
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
