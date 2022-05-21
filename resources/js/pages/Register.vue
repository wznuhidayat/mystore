<template>
  <section>
    <mini-navbar image="no-image.png"></mini-navbar>
    <div class="w-8/12 mx-auto mt-5">
      <div
        class="
          grid grid-cols-1
          md:grid-cols-2 md:h-106
          mt-2
          border
          rounded-lg
          overflow-hidden
          shadow-sm
        "
      >
        <div
          class="bg-cover bg-center bg-no-repeat h-106 p-3 hidden md:block"
          :style="{
            'background-image':
              'url(images/thom-bradley-mwa_nzFpnJw-unsplash-min.jpg)',
          }"
        ></div>
        <div class="px-3 py-4 ">
          <div
            class="
              flex-col flex
              ml-auto
              mr-auto
              items-center
              w-full
              
            "
          >
            <h1 class="text-2xl my-2">Register</h1>
            <form action="" class="mt-2 flex flex-col w-10/12">
              <div
                class="
                  flex flex-wrap
                  items-stretch
                  w-full
                  mb-4
                  relative
                  h-full
                  bg-white
                  shadow-sm
                  items-center
                  rounded-lg
                  mb-6
                  pr-10
                "
              >
                <div class="flex -mr-px justify-center w-10 p-3">
                  <span
                    class="
                      flex
                      items-center
                      leading-normal
                      bg-white
                      px-2
                      border-0
                      rounded rounded-r-none
                      text-2xl text-gray-600
                    "
                  >
                    <ion-icon name="person-circle-outline"></ion-icon>
                  </span>
                </div>
                <input
                  type="text"
                  class="
                    flex-shrink flex-grow flex-auto
                    leading-normal
                    w-px
                    flex-1
                    border-0
                    h-10
                    border-grey-light
                    rounded rounded-l-none
                    px-3
                    self-center
                    relative
                    text-md
                    outline-none
                  "
                  v-model="form.username"
                  placeholder="Username"
                />
              </div>
              <div
                class="
                  flex flex-wrap
                  items-stretch
                  w-full
                  mb-4
                  relative
                  h-full
                  bg-white
                  shadow-sm
                  items-center
                  rounded-lg
                  mb-6
                  pr-10
                "
              >
                <div class="flex -mr-px justify-center w-10 p-3">
                  <span
                    class="
                      flex
                      items-center
                      leading-normal
                      bg-white
                      px-2
                      border-0
                      rounded rounded-r-none
                      text-2xl text-gray-600
                    "
                  >
                    <ion-icon name="mail-outline"></ion-icon>
                  </span>
                </div>
                <input
                  type="text"
                  class="
                    flex-shrink flex-grow flex-auto
                    leading-normal
                    w-px
                    flex-1
                    border-0
                    h-10
                    border-grey-light
                    rounded rounded-l-none
                    px-3
                    self-center
                    relative
                    text-md
                    outline-none
                  "
                  v-model="form.email"
                  placeholder="Email"
                />
              </div>
              <div
                class="
                  flex flex-wrap
                  items-stretch
                  w-full
                  relative
                  h-full
                  bg-white
                  shadow-sm
                  items-center
                  rounded-lg
                  mb-4
                "
              >
                <div class="flex -mr-px justify-center w-10 p-3">
                  <span
                    class="
                      flex
                      items-center
                      leading-normal
                      bg-white
                      rounded rounded-r-none
                      text-xl
                      px-2
                      whitespace-no-wrap
                      text-gray-600
                    "
                  >
                    <ion-icon name="lock-closed-outline"></ion-icon>
                  </span>
                </div>
                 <input
                  v-if="showPassword"
                  type="text"
                  class="
                    flex-shrink flex-grow flex-auto
                    leading-normal
                    w-px
                    flex-1
                    border-0
                    h-10
                    rounded rounded-l-none
                    px-3
                    relative
                    self-center
                    text-md
                    outline-none
                  "
                   v-model="form.password"
                  placeholder="Password"
                />
                <input
                  v-else
                  type="password"
                  class="
                    flex-shrink flex-grow flex-auto
                    leading-normal
                    w-px
                    flex-1
                    border-0
                    h-10
                    rounded rounded-l-none
                    px-3
                    relative
                    self-center
                    text-md
                    outline-none
                  "
                   v-model="form.password"
                  placeholder="Password"
                />
                <div class="flex -mr-px" @click="toggleShow">
                  <span
                    class="
                      flex
                      items-center
                      leading-normal
                      bg-white
                      rounded-lg rounded-lg-l-none
                      border-0
                      px-3
                      whitespace-no-wrap
                      text-gray-600
                    "
                  >
                    <ion-icon v-if="showPassword" name="eye-outline" ></ion-icon>
                    <ion-icon v-else name="eye-off-outline" ></ion-icon>
                  </span>
                </div>
              </div>
              <router-link
                to="/login"
                class="
                  text-base text-right
                  leading-normal
                  hover:underline
                  mb-3
                "
                >Already an account ?</router-link
              >
              <button
                href="/"
                class="
                  bg-primary-main
                  py-2
                  text-center
                  md:px-12 md:py-4
                  text-white
                  rounded-lg
                  text-xl
                  md:text-base
                  hover:bg-sec-primary ease-in-out duration-300
                "
                @click.prevent="saveForm"
                type="submit"
              >
                Register
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import axios from 'axios';
import MiniNavbar from "../components/MiniNavbarComponent.vue";
// import axios from "axios";
export default {
  name: "register",
  components: {
    "mini-navbar": MiniNavbar,
  },
  data() {
    return {
      form: {
        username: '',
        email: '',
        password: ''
      },
      error: [],
      showPassword: false,
      password: null
    };
  },
  computed: {
    buttonLabel() {
      return (this.showPassword) ? "Hide" : "Show";
    }
  },
  methods: {
    saveForm(){
      axios.post('/auth/register', this.form).then(()=>{
        console.log('saved');
      }).catch((error) => {
        this.error = error.response.data.errors;
      })
    },
    toggleShow() {
      this.showPassword = !this.showPassword;
    }
  },
  mounted() {},
};
</script>