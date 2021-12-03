<template>
  <div>
    <div
      class="
        grid-column-3
        border-2 border-gray-300
        bg-white
        rounded-lg
        text-gray-600
        flex
      "
    >
      <div class="flex">
        <div class="flex-1">
          <input
            class="pl-2 mb-1 text-sm focus:outline-none"
            type="recherche"
            name="recherche"
            placeholder="recherche"
          />
        </div>
        <div class="pr-4 flex-1">
          <img
            src="\image\bouttonRecherche.png"
            class="mt-1 h-5 w-5 cursor-pointer"
          />
        </div>
      </div>
    </div>
    <div v-if="afficher" class="w-100 h-40 bg-blue-500"></div>
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

<style>
</style>