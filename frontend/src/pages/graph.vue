<template>
  <div class="border border-3 rounded-lg m-5 shadow-2xl border border-black bg-white">
    <apexchart class="mt-4 mr-3" height="500" width="1200" type="area" :options="options" :series="series"></apexchart>
  </div>
  <div class="mt-20 border border-black" width="800" height="800">
    <iframe class="mx-auto" src="https://giphy.com/embed/U3BTX5PTN8UwJGZid0" width="800" height="800" frameBorder="0" allowFullScreen></iframe>
  </div>
  <div class="mt-10 mx-auto border border-black">
    <img class="mx-auto" width="1000" src="../assets/images/ape-animazione.gif">
  </div>
</template>

<script setup>
  const options = {
    chart: {
      height: 350,
      width: "100%"
    },
    plotOptions: {
      bar: {
        horizontal: true
      }
    },
    dataLabels: {
      enabled: true
    }
  }

  const series = [{
    data: [{
      x: 'Ape A',
      y: [1, 5]
    }, {
      x: 'Ape B',
      y: [4, 6]
    }, {
      x: 'Ape C',
      y: [5, 8]
    }, {
      x: 'Ape D',
      y: [3, 11]
    }]
  }, {
    data: [{
      x: 'Ape A',
      y: [2, 6]
    }, {
      x: 'Ape B',
      y: [1, 3]
    }, {
      x: 'Ape C',
      y: [7, 8]
    }, {
      x: 'Ape D',
      y: [5, 9]
    }]
  }, {
    data: [{
      x: 'Ape A',
      y: [3, 1]
    }, {
      x: 'Ape B',
      y: [7, 1]
    }, {
      x: 'Ape C',
      y: [3, 1]
    }, {
      x: 'Ape D',
      y: [9, 5]
    }]
  }]
</script>
