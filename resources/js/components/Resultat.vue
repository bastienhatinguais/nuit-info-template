<template>
  <div>
    <div class="w-80 grid grid-cols-2 gap-3 border-2 border-black bg-white">
      
      <div v-if="type==='bateau'">
        <img src="\image\bateau.png" class="m-3 w-25 h-25"/>
      </div>
      <div v-if="type==='civil'">
        <img src="\image\civil.png" class="m-3 w-25 h-25" />
      </div>
      <div v-if="type==='marin'">
        <img src="\image\marin.png" class="m-3 w-25 h-25" />
      </div>
      <div class="ml-5 grid grid-row-2 flex items-center">
        <p>{{ nom }} <br/>
        {{ prenom }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    nom: String,
    prenom: String,
    type: String,
    //sauveteur, civil ou bateau
  },
};
</script>

<style>
</style>