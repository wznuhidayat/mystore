<template>
  <nav class="h-36 bg-primary-main w-full">
    <div class="h-full flex flex-col justify-center px-8 container">
      <div class="flex justify-between mb-8">
        <div class="text-grey-main text-2xl font-bold">My Store</div>
        <div class="text-grey-main text-md">
          <h3 class="hidden lg:inline-block">Wisnu</h3>

          <img
            :src="'../../../images/'+image"
            alt=""
            class="ml-2 w-8 rounded-full inline"
          />
        </div>
      </div>
      <div class="flex justify-between">
        <div class="">
          <ul class="flex">
            <li class="block mr-5 text-md text-grey-main group">
              <router-link to="/home" class="py-2 group-hover:text-white">Home</router-link>
            </li>
            <li class="block mr-5 text-md text-grey-main group">
              <router-link to="/about" class="py-2 group-hover:text-white">Product</router-link>
            </li>
            <li class="block mr-5 text-md text-grey-main group">
              <router-link to="" class="py-2 group-hover:text-white">About Us</router-link>
            </li>
            <li class="block mr-5 text-md text-grey-main group">
              <router-link to="" class="py-2 group-hover:text-white">Contact Us</router-link>
            </li>
          </ul>
        </div>
        <div class="hidden lg:block">
          <div class="relative flex items-center justify-end">
            <input
              type="text"
              class="
                block
                w-60
                h-8
                rounded-2xl
                border-gray-300
                shadow-sm
                focus:border-indigo-300
                focus:ring
                focus:ring-indigo-200
                focus:ring-opacity-50
              "
              placeholder="  Search"
            />
            <ion-icon
              name="search-outline"
              class="absolute mr-5"
              size="small"
            ></ion-icon>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  name: "NavbarComponent",
  props: ["image"]
}
</script>