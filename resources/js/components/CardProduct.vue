<template  >
  <!-- <div class="rounded-xl overflow-hidden shadow-md w-1/6"> -->
  <div class="group-hover:relative">
    <div class="bg-gray-700 w-full h-40">
      <img
        :src="product.image"
        alt=""
        class="w-full h-full object-cover group-hover:mix-blend-overlay"
      />
      <div
        class="
          group-hover:absolute
          w-full
          transform
          ease-in
          duration-300
          group-hover:-translate-y-10
        "
      >
        <div class="hidden group-hover:flex justify-end w-full gap-2 pr-3">
          <router-link :to="'/products/'+product.id">
            <ion-icon
              name="eye-outline"
              class="text-grey-main hover:text-sec-primary"
              size="large"
             ></ion-icon>
          </router-link>
          <button>
            <ion-icon
              name="heart-outline"
              class="text-grey-main hover:text-sec-primary"
              size="large"
            ></ion-icon>
          </button>
            <button type="submit" @click.prevent="addToCart(product.id,userId)">
            <ion-icon
              name="cart-outline"
              class="text-grey-main hover:text-sec-primary"
              size="large"
            ></ion-icon>
          </button>
        </div>
      </div>
    </div>
    <div class="w-full h-20 px-3 py-3 justify-between">
      <h3 class="line-clamp-2 text-xs mb-1">{{ product.title }}</h3>
      <div class="flex justify-between">
        <h3 class="align-bottom text-xs font-bold">$ {{ product.price }}</h3>
        <div class="">
          <h3 class="align-top text-xs text-gray-500 inline">
            {{ product.ratings.rate }} | {{ product.ratings.count }} sold
          </h3>
          <ion-icon
            name="star-outline"
            class="text-yellow-400 text-right align-top"
          ></ion-icon>
        </div>
      </div>
    </div>
  </div>
  <!-- </div> -->
</template>
<script>
import { mapGetters } from 'vuex'
// console.log(product);
export default {
  name: "CartProduct",
  props: ["product","userId"],
  data(){
    return {
      form: {
        product_id: '',
        user_id: '',
      },
      errors: [],
    }
  },
  methods: {
    addToCart(productid,userid){
      this.form.product_id = productid
      this.form.user_id = userid
      this.$store.dispatch('addToCart', this.form).then(()=>{
        // this.$router.push({ name: "cart" });
      }).catch((error) => {
        this.$router.push({ name: "login" });
        this.errors = error.response.data.errors;
      })
    },
  }
};
</script>
<style >
</style>