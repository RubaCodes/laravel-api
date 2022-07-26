<template>
  <main>
    <BaseHeader />
    <router-view></router-view>
    <BaseFooter />
  </main>
</template>

<script>
import BaseFooter from "../components/BaseFooter.vue";
import BaseHeader from "../components/BaseHeader.vue";
export default {
  name: "App",
  components: {
    BaseFooter,
    BaseHeader,
  },
};
</script>

<style lang="scss" scoped></style>
