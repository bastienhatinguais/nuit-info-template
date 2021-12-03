<template>
  <div class="relative">
    <img class="w-8 h-auto cursor-pointer " src="\image\flecheOuverture.png" alt="" @click="show" />
    <div v-if="afficher" class="w-40 h-40 bg-blue-500">
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      afficher: false,
    };
  },

  methods: {
    show: function () {
      this.afficher = !this.afficher;
    },
  },
};
</script>
