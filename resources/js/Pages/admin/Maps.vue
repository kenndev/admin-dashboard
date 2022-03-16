<template>
<Admin>
  <div class="flex flex-wrap">
    <div class="w-full px-4">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
      >
        <map-example />
      </div>
    </div>
  </div>
  </Admin>
</template>
<script>
import MapExample from "@/components/Maps/MapExample.vue";
import Admin from "@/Layouts/Admin.vue";
export default {
  components: {
    MapExample,
    Admin
  },
};
</script>
