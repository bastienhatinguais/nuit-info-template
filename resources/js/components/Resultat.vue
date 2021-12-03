<template>
    <div >
        <div class="w-80 border-2 border-blue-500">
      <h3>{{titre}}</h3>
      </div>
    </div>
</template>

<script>
export default {
  props: {
    titre: String,
    type: String,
    //sauveteur, civil ou bateau
  },
    
}
</script>

<style>

</style>