<template>
  <div class="post">
    <div v-if="test" class="container">
      <h1>{{ test.title }}</h1>
      <p>{{ test.content }}</p>
      <h2>categoria: {{ test.category.name }}</h2>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Post",
  data() {
    return {
      test: null,
    };
  },
  created() {
    axios
      .get(`/api/posts/${this.$route.params.slug}`)
      .then((res) => {
        console.log(res.data);
        this.test = res.data;
      })
      .catch((err) => {
        console.log(err);
      });
  },
};
</script>

//
<style lang="scss" scoped>
// [v-cloak] {
//   display: none;
// }
</style>
