<template>
  <section class="post-feed py-5">
    <div class="container">
      <div class="row">
        <div v-for="post in posts" :key="post.id" class="col-6">
          <PostCard
            class="my-2"
            :title="post.title"
            :content="post.content"
            :slug="post.slug"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import PostCard from "../components/blocks/PostCard.vue";
import axios from "axios";
export default {
  name: "PostFeed",
  components: {
    PostCard,
  },
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
