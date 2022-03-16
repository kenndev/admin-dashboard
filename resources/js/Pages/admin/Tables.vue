<template>
<Admin>
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <card-table />
    </div>
    <div class="w-full mb-12 px-4">
      <card-table color="dark" />
    </div>
  </div>
  </Admin>
</template>
<script>
import CardTable from "@/components/Cards/CardTable.vue";
import Admin from "@/Layouts/Admin.vue";
export default {
  components: {
    CardTable,
    Admin
  },
};
</script>
