<template>
  <div class="post">
    <div class="container">
      <h1>{{ post.title }}</h1>
      <p>{{ post.content }}</p>
      <h2>categoria: {{ post.category.name }}</h2>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Post",
  data() {
    return {
      post: null,
    };
  },
  created() {
    axios
      .get(`/api/posts/test-di-prova-numero-2`)
      .then((res) => {
        //console.log(res.data);
        this.post = res.data;
      })
      .catch((err) => {
        console.log(err);
      });
  },
};
</script>

<style lang="scss" scoped></style>
