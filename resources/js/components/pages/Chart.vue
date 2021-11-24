<template>
	<div class="px-4 md:px-10 mx-auto w-full -m-24">
          <div class="flex flex-wrap">
            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
              <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-700">
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                      <h6 class="uppercase text-white mb-1 text-xs font-semibold">
                        Overview
                      </h6>
                      <h2 class="text-white text-xl font-semibold">
                        Sales value
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative h-350-px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="line-chart" style="display: block; height: 350px; width: 725px;" width="906" height="437" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full xl:w-4/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                      <h6 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold">
                        Performance
                      </h6>
                      <h2 class="text-blueGray-700 text-xl font-semibold">
                        Total orders
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative h-350-px"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="bar-chart" width="412" height="437" style="display: block; height: 350px; width: 330px;" class="chartjs-render-monitor"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <the-footer></the-footer>
        </div>
</template>
<script>

import TheFooter from '../headers/Footer.vue';

export default {
  components: {
    TheFooter
  }
}

</script>
<style>
</style>