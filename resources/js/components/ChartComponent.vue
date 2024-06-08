<template>
  <div ref="chart"></div>
</template>

<script>
import ApexCharts from 'apexcharts';

export default {
  name: 'ChartComponent',
  props: {
    salesData: {
      type: Array,
      required: true
    }
  },
  mounted() {
    const categories = this.salesData.map(sale => sale.month);
    const data = this.salesData.map(sale => sale.amount);

    const options = {
      chart: {
        type: 'line'
      },
      series: [{
        name: 'Sales',
        data: data
      }],
      xaxis: {
        categories: categories
      }
    };

    const chart = new ApexCharts(this.$refs.chart, options);
    chart.render();
  }
}
</script>

<style scoped>
/* Tambahkan gaya CSS jika diperlukan */
</style>
