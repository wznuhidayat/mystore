<template  >
  <div class="flex">
    <div class="w-4/6 px-2 py-4 flex gap-3">
      <div
        class="
          flex-none
          w-20
          h-20
          md:w-24 md:h-24
          overflow-hidden
          border
          rounded-lg
        "
      >
        <img
          :src="product.product.image"
          alt=""
          class="w-20 h-20 md:w-24 object-cover object-center md:h-24"
        />
      </div>
      <div class="py-2">
        <h3 class="line-clamp-1 mb-2 text-xs md:text-sm">
          {{ product.product.title }}
        </h3>
        <ion-icon name="star" class="text-yellow-400 w-4 h-4"></ion-icon>
        <ion-icon name="star" class="text-yellow-400 w-4 h-4"></ion-icon>
        <ion-icon name="star" class="text-yellow-400 w-4 h-4"></ion-icon>
        <ion-icon name="star" class="text-yellow-400 w-4 h-4"></ion-icon>
        <h3 class="mt-2 text-xs md:text-sm font-bold">
          {{ this.formatRupiah(product.product.price) }}
        </h3>
      </div>
    </div>
    <div class="w-1/6 m-auto">
      <div class="qty mx-auto pl-5">
        <button
          class="
            w-8
            h-8
            border
            rounded-lg
            bg-grey-main
            hover:bg-primary-main hover:text-grey-main
            ease-in-out
            duration-300
          "
          size="large"
          @click="minus()"
        >
          <ion-icon
            class="text-center align-middle"
            name="remove-circle-outline"
          ></ion-icon>
        </button>
        <input
          type="num"
          :value="product.qty"
          class="w-5 text-center align-middle"
        />
        <button
          class="
            w-8
            h-8
            border
            rounded-lg
            bg-grey-main
            hover:bg-primary-main hover:text-grey-main
            ease-in-out
            duration-300
          "
          size="large"
          @click="plus()"
        >
          <ion-icon
            class="text-center align-middle"
            name="add-circle-outline"
          ></ion-icon>
        </button>
      </div>
    </div>
    <div class="w-1/6 text-center my-auto font-bold text-xs md:text-sm">
      {{ this.formatRupiah(product.product.price*product.qty) }}
    </div>
  </div>
</template>
<script>
export default {
  name: "ListCart",
  props: ["product"],
  methods: {
    plus() {
      this.product.qty = this.product.qty + 1;
    },
    minus() {
      if (this.product.qty > 1) {
        this.product.qty = this.product.qty - 1;
      }
    },
    formatRupiah(numb) {
      const format = numb.toString().split('').reverse().join('');
      const convert = format.match(/\d{1,3}/g);
      const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
      return rupiah;
    },
  },
};
</script>
<style >
</style>