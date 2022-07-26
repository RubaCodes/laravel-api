<template>
  <section></section>
</template>

<script>
import axios from "axios";
export default {
  name: "PostFeed",
  data() {
    return {
      posts: null,
    };
  },
  created() {
    axios
      .get("/api/posts")
      .then((res) => {
        console.log(res.data);
        this.posts = res.data;
      })
      .catch((err) => {
        console.log(err);
      });
  },
};
</script>

<style></style>
