<template>
  <section>
    <navbar-component image="no-image.png"></navbar-component>
    <div class="carouserl-wrap">
      <div class="owl-carousel owl-theme">
        <div
          class="h-96 bg-center bg-cover"
          :style="{
            'background-image':
              'url(images/gabrielle-henderson-pL1qsBqCatk-unsplash-min.jpg)',
          }"
        >
          <div class="container mx-auto pt-24 w-4/6">
            <h1 class="text-4xl text-center text-white mb-2">
              Match your fashion
            </h1>
            <p class="text-center text-white">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
              autem magni consectetur provident eaque.
            </p>
            <div class="flex justify-center mt-10">
              <button
                class="
                  border
                  text-white
                  rounded-lg
                  px-4
                  py-1
                  hover:bg-sec-primary
                "
              >
                View
              </button>
            </div>
          </div>
        </div>
        <div
          class="h-96 bg-center bg-cover"
          :style="{
            'background-image':
              'url(images/keagan-henman-Won79_9oUEk-unsplash-min.jpg)',
          }"
        >
          <div class="container mx-auto pt-24 w-4/6">
            <h1 class="text-4xl text-center text-white mb-2">
              Match your fashion
            </h1>
            <p class="text-center text-white">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
              autem magni consectetur provident eaque.
            </p>
            <div class="flex justify-center mt-10">
              <button
                class="
                  border
                  text-white
                  rounded-lg
                  px-4
                  py-1
                  hover:bg-sec-primary
                "
              >
                View
              </button>
            </div>
          </div>
        </div>
        <div
          class="h-96 bg-center bg-cover"
          :style="{
            'background-image': 'url(images/mnz-ToLMORRb97Q-unsplash-min.jpg)',
          }"
        >
          <div class="container mx-auto pt-24 w-4/6">
            <h1 class="text-4xl text-center text-white mb-2">
              Match your fashion
            </h1>
            <p class="text-center text-white">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
              autem magni consectetur provident eaque.
            </p>
            <div class="flex justify-center mt-10">
              <button
                class="
                  border
                  text-white
                  rounded-lg
                  px-4
                  py-1
                  hover:bg-sec-primary
                "
              >
                View
              </button>
            </div>
          </div>
        </div>
        <div
          class="h-96 bg-center bg-cover"
          :style="{
            'background-image':
              'url(images/alyssa-strohmann-TS--uNw-JqE-unsplash-min.jpg)',
          }"
        >
          <div class="container mx-auto pt-24 w-4/6">
            <h1 class="text-4xl text-center text-white mb-2">
              Match your fashion
            </h1>
            <p class="text-center text-white">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet
              autem magni consectetur provident eaque.
            </p>
            <div class="flex justify-center mt-10">
              <button
                class="
                  border
                  text-white
                  rounded-lg
                  px-4
                  py-1
                  hover:bg-sec-primary
                "
              >
                View
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container px-8 mx-auto mt-4">
      <div class="head-category mb-4">
        <h2 class="text-lg font-bold">Category</h2>
      </div>
      <div class="flex flex-wrap gap-5 mx-auto">
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-xl hover:shadow-md
          "
        >
          <img
            :src="'css/icon/shirts.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Men’s Clothing
          </h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-xl hover:shadow-md
          "
        >
          <img
            :src="'css/icon/dress.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Women Clothing
          </h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-xl hover:shadow-md
          "
        >
          <img
            :src="'css/icon/rings.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">Jewelery</h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-xl hover:shadow-md
          "
        >
          <img
            :src="'css/icon/responsive-design.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Electronics
          </h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-xl hover:shadow-md
          "
        >
          <img
            :src="'css/icon/responsive-design.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Electronics
          </h3>
        </div>
        <div
          class="
            flex flex-col
            justify-center
            w-24
            md:w-40
            h-18
            md:h-36
            items-center
            hover:border hover:rounded-xl hover:shadow-md
          "
        >
          <img
            :src="'css/icon/responsive-design.png'"
            alt=""
            class="w-12 md:w-20"
          />
          <h3 class="text-xs text-center md:text-md mt-2 md:mt-3">
            Electronics
          </h3>
        </div>
      </div>
    </div>
     <div class="container px-8 mx-auto mt-4">
                <div class="head-product mb-4">
                    <h2 class="text-lg font-bold">Product</h2>
                </div>
                <div class="flex flex-wrap gap-5 mx-auto">
                    <div class="rounded-xl overflow-hidden shadow-md w-5/12 md:w-3/12 lg:w-2/12 border group hover:-translate-y-2 transition duration-300"  v-for="product in products">
                        <card-product :product="product" ></card-product>
                    </div>
                </div>
            </div>
  </section>
</template>
<script>
import NavbarComponent from "../components/NavbarComponent.vue";
import CardProduct from "../components/CardProduct.vue";
import axios from "axios";
export default {
  name: 'Home',
  data() {
    return {
      products: []
    }
  },
  components: {
    "navbar-component": NavbarComponent,
    "card-product": CardProduct,
  },
  methods: {
    setProduct(data) {
      this.products = data;
    }
  },
  mounted() {
    axios.get('http://localhost:3000/product')
      .then((response) => {
        this.setProduct(response.data)
      })
      .catch(function (error) {
        console.log(error);
      });
  }
};
</script>