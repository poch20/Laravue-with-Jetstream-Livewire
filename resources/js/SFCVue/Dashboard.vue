<template lang="html">
  <head>
    <link rel="shortcut icon" type="image/png" href="https://datatables.net/media/images/favicon.png">
  </head>
  <body class="wide comments example dt-example-bootstrap">
    <p>{{ greeting }} World!</p>
    <profile />
  </body>
</template>

<script scoped>
import Profile from './Profile.vue'
export default {
  components: {
    Profile
  },

  data() {
    return {
      greeting: "Hello"
    }
  }
}
</script>

<style lang="css" scoped>
</style>
