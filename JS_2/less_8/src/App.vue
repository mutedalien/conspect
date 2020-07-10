<template>
  <h1>{{ test }} h1</h1>
</template>

<script>
export default {
  data(){
    return {
      test: 'test'
    }
  }
}
</script>

<style scoped>
h1 {
  color: red;
}
</style>