<template>
  <footer class="bg-primary-main w-full h-60">
    <div class="container px-8 mx-auto py-4">
      <h1 class="text-grey-main text-2xl text-center font-bold mb-3">My Store</h1>
      <div class="mb-3">
        <ul class="flex justify-center gap-10">
          <li class="block mr-3 md:mr-5 text-md text-grey-main group">
              <router-link to="/home" class="py-2 group-hover:text-white">Home</router-link>
            </li>
            <li class="block mr-3 md:mr-5 text-md text-grey-main group">
              <router-link to="/about" class="py-2 group-hover:text-white">Product</router-link>
            </li>
            <li class="block mr-3 md:mr-5 text-md text-grey-main group">
              <router-link to="" class="py-2 group-hover:text-white">About Us</router-link>
            </li>
            <li class="block mr-3 md:mr-5 text-md text-grey-main group">
              <router-link to="" class="py-2 group-hover:text-white">Contact Us</router-link>
            </li>
        </ul>
      </div>
      <div class="social-media">
          <div class="flex justify-center">
              <ion-icon name="logo-facebook" class="text-grey-main mr-8" size="large"></ion-icon>
              <ion-icon name="logo-instagram" class="text-grey-main mr-8" size="large"></ion-icon>
              <ion-icon name="logo-twitter" class="text-grey-main " size="large"></ion-icon>
          </div>
      </div>
       <div class="mx-auto text-center text-grey-main text-sm mt-14">
        Copyright &copy; 2021 Design By <a href="#">Muhammad Wisnu Hidayat</a> - v1.0.0
      </div>
    </div>
  </footer>
</template>