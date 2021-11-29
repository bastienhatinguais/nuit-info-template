<template>
  <div class="container">
    <h2>Total : {{ compteur }}</h2>
    <button
      class="
        bg-blue-500
        hover:bg-blue-700
        text-white
        font-bold
        py-2
        px-4
        rounded
      "
      @click="incrementation"
    >
      +1
    </button>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data: function () {
    return {
      compteur: 0,
    };
  },

  methods: {
    incrementation: function () {
      this.compteur++;
    },
  },
};
</script>
