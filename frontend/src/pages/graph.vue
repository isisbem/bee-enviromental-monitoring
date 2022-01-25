<template>
  <div>
    <apexchart class="mx-auto" width="900" type="area" :options="options" :series="series"></apexchart>
  </div>
</template>


<script setup>



const options = {
  chart: {
    height: 350
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
