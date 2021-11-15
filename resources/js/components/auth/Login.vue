<template>
    <main>
      <section class="relative w-full h-full py-40 min-h-screen">
        <div
          class="absolute top-0 w-full h-full bg-gray-800 bg-cover bg-no-repeat"
          style="background-image: url('http://127.0.0.1:8000/img/register_bg_2.png')"
        ></div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
            <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white border-0"
              >
              <br>

              <br>
               
                <div class="flex-auto px-4 bg-white lg:px-10 py-10 pt-0">
                  <div class="text-blueGray-400 text-center mb-3 font-bold">
                    <small>Sign in with credentials</small>
                  </div>
                  <form @submit.prevent="tryLogin">
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        for="grid-password"
                        >Email</label
                      ><input
                        type="email"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" v-model="email"
                        placeholder="Email"
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        for="grid-password"
                        >Password</label
                      ><input
                        type="password"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" v-model="password"
                        placeholder="Password"
                      />
                    </div>
                    <p v-if="!formIsValid" class="font-bold text-red-600 text-center">Please enter valid email and password.</p>
 <!--                    <div>
                      <label class="inline-flex items-center cursor-pointer"
                        ><input
                          id="customCheckLogin"
                          type="checkbox"
                          class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"
                        /><span
                          class="ml-2 text-sm font-semibold text-blueGray-600"
                          >Remember me</span
                        ></label
                      >
                    </div> -->
                    <div class="text-center mt-6">
                      <button
                        class="bg-gray-800 text-white active:bg-gray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        Sign In
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="flex flex-wrap mt-6">
                <div class="w-1/2">
                  <a href="#pablo" class="text-blueGray-200"
                    ><small>Forgot password?</small></a
                  >
                </div>
                <div class="w-1/2 text-right">
                  <a href="./register.html" class="text-blueGray-200"
                    ><small>Create new account</small></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="absolute w-full bottom-0 bg-blueGray-800 pb-6">
          <div class="container mx-auto px-4">
            <hr class="mb-6 border-b-1 border-blueGray-600" />
            <div
              class="flex flex-wrap items-center md:justify-between justify-center"
            >
              <div class="w-full md:w-4/12 px-4">
                <div
                  class="text-sm text-white font-semibold py-1 text-center md:text-left"
                >
                  Copyright © <span id="get-current-year"></span>
                  <a
                    href=""
                    class="text-white hover:text-blueGray-300 text-sm font-semibold py-1"
                    >Imrania</a
                  >
                </div>
              </div>
          <!--     <div class="w-full md:w-8/12 px-4">
                <ul
                  class="flex flex-wrap list-none md:justify-end justify-center">
                  <li>
                    <a
                      href="https://www.creative-tim.com?ref=njs-login"
                      class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3"
                      >Creative Tim</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.creative-tim.com/presentation?ref=njs-login"
                      class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3"
                      >About Us</a
                    >
                  </li>
                  <li>
                    <a
                      href="http://blog.creative-tim.com?ref=njs-login"
                      class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3"
                      >Blog</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-login"
                      class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3"
                      >MIT License</a
                    >
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </footer>
      </section>
    </main>
</template>

<script>
export default {

    data(){
      return {
        email: null,
        password: null,
        formIsValid: true
      }
    },

    methods:{



           tryLogin(){



                this.formIsValid = true;
                if (this.email === null || !this.email.includes('@') || this.password.length < 0) {
                this.formIsValid = false;


                }
          



           }
    }





};
</script>
<style scoped>
  

</style>