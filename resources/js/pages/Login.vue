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
              'url(images/marcus-loke-xXJ6utyoSw0-unsplash-min.jpg)',
          }"
        ></div>
        <div class="px-3 py-4">
          <div class="flex-col flex ml-auto mr-auto items-center w-full">
            <h1 class="text-2xl md:my-8 mb-1">Login</h1>
            <div
              id="alert-2"
              v-if="loginAlert"
              class="
                flex
                p-3
                w-10/12
                mb-1
                mt-1
                bg-red-100
                rounded-lg
                dark:bg-red-200
              "
              role="alert"
            >
              <ion-icon
                name="alert-circle-outline"
                class="text-red-700 w-5 h-5"
              ></ion-icon>
              <div
                class="ml-3 text-sm font-medium text-red-700 dark:text-red-800"
              >
                <p
                  class="font-light hover:text-red-800 dark:hover:text-red-900"
                >
                  Login error
                </p>
              </div>
              <button
                type="button"
                class="
                  ml-auto
                  -mx-1.5
                  -my-1.5
                  bg-red-100
                  text-red-500
                  rounded-lg
                  focus:ring-2 focus:ring-red-400
                  p-1.5
                  hover:bg-red-200
                  inline-flex
                  h-8
                  w-8
                  dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300
                "
                data-dismiss-target="#alert-2"
                aria-label="Close"
                @click="hiddenAlert()"
              >
                <span class="sr-only">Close</span>
                <ion-icon
                  name="close-circle-outline"
                  class="w-5 h-5"
                ></ion-icon>
              </button>
            </div>
            <form action="" class="mt-2 flex flex-col w-10/12">
              <div
                class="
                  flex flex-wrap
                  items-stretch
                  w-full
                  relative
                  h-full
                  bg-white
                  shadow-sm
                  rounded-lg
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
              <span
                class="
                  flex
                  items-center
                  font-light
                  tracking-wide
                  text-red-500 text-xs
                  mt-1
                  ml-3
                "
                v-if="errors.email"
              >
                {{ errors.email[0] }}
              </span>
              <div
                class="
                  flex flex-wrap
                  items-stretch
                  w-full
                  relative
                  h-full
                  mt-4
                  bg-white
                  shadow-sm
                  rounded-lg
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
                    <ion-icon v-if="showPassword" name="eye-outline"></ion-icon>
                    <ion-icon v-else name="eye-off-outline"></ion-icon>
                  </span>
                </div>
              </div>
              <span
                class="
                  flex
                  items-center
                  font-light
                  tracking-wide
                  text-red-500 text-xs
                  mt-1
                  ml-3
                "
                v-if="errors.password"
              >
                {{ errors.password[0] }}
              </span>
              <a
                href="#"
                class="text-base text-right leading-normal hover:underline mb-3 mt-3"
                >Forget Password ?</a
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
                  hover:bg-sec-primary
                  ease-in-out
                  duration-300
                "
                @click.prevent="loginUser"
                type="submit"
              >
                Login
              </button>
              <router-link
                to="/register"
                class="
                  text-base text-center
                  leading-normal
                  hover:underline
                  mt-3
                "
              >
                Don't have an account ?</router-link
              >
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import MiniNavbar from "../components/MiniNavbarComponent.vue";
// import axios from "axios";
export default {
  name: "login",
  components: {
    "mini-navbar": MiniNavbar,
  },
  data() {
    return {
      form: {
        email: "",
        password: "",
      },
      loginAlert: false,
      errors: [],
      showPassword: false,
      password: null,
    };
  },
  computed: {
    buttonLabel() {
      return this.showPassword ? "Hide" : "Show";
    },
  },
  methods: {
    loginUser() {
      this.$store
        .dispatch("login", this.form)
        .then(() => {
          this.$router.push({ name: "cart" });
        })
        .catch((error) => {
          var errorLength = Object.keys(error.response.data.errors).length
          if(errorLength > 1){
              this.errors = error.response.data.errors;
          }else{
              this.loginAlert = true;
          }
         
        });
    },
    toggleShow() {
      this.showPassword = !this.showPassword;
    },
    hiddenAlert() {
      this.loginAlert = false;
    },
  },
  mounted() {},
};
</script>