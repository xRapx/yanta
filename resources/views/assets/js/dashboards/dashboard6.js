// -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 6 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function () {
  "use strict";
  // -----------------------------------------------------------------------
  // Sales overview
  // -----------------------------------------------------------------------

  var sales_overview = {
    series: [
      {
        name: "Pixel ",
        data: [9, 5, 3, 7, 5, 10, 3],
      },
      {
        name: "Ample ",
        data: [6, 3, 9, 5, 4, 6, 4],
      },
    ],
    chart: {
      fontFamily: "inherit",
      type: "bar",
      height: 330,
      offsetX:-15,
      offsetY: 10,
      toolbar: {
        show: false,
      },
    },
    grid: {
      show: true,
      strokeDashArray: 2,
      borderColor: "rgba(0,0,0,0.2)",

  
    },
    colors: ["var(--bs-primary", "var(--bs-secondary"],
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "30%",
        endingShape: "flat",
        borderRadius: 5,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 5,
      colors: ["transparent"],
    },
    xaxis: {
      type: "category",
      categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      tickAmount: "16",
      tickPlacement: "on",
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
      labels: {
        style: {
          colors: "#a1aab2",
        },
      },
    },
    yaxis: {
      labels: {
        style: {
          colors: "#a1aab2",
        },
      },
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      theme: "dark",
    },
    legend: {
      show: false,
    },
  };

  var chart_column_basic = new ApexCharts(
    document.querySelector("#sales-overview"),
    sales_overview
  );
  chart_column_basic.render();

  // -----------------------------------------------------------------------
  // Our visitor
  // -----------------------------------------------------------------------

  var product_sales = {
    series: [50, 40, 30, 10],
    labels: ["Mobile", "Tablet", "Other", "Desktop"],
    chart: {
      type: "donut",
      height: 230,
      fontFamily: "inherit",
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 0,
    },
    plotOptions: {
      pie: {
        expandOnClick: true,
        donut: {
          size: "83",
          labels: {
            show: true,
            name: {
              show: true,
              offsetY: 7,
            },
            value: {
              show: false,
            },
            total: {
              show: true,
              color: "#a1aab2",
              fontSize: "13px",
              label: "Yearly Sales",
            },
          },
        },
      },
    },
    colors: ["var(--bs-primary", "var(--bs-secondary", "#eceff1", "var(--bs-indigo"],
    tooltip: {
      show: true,
      fillSeriesColor: false,
    },
    legend: {
      show: false,
    },
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
        },
      },
    ],
  };

  var chart_pie_donut = new ApexCharts(
    document.querySelector("#product-sales"),
    product_sales
  );
  chart_pie_donut.render();

  // -----------------------------------------------------------------------
  // sparkline charts
  // -----------------------------------------------------------------------
  //  var sparklineLogin = function() {


  var Product_A_Sales = {
    series: [
      {
        name: "",
        data: [4, 5, 2, 10, 9, 12, 4, 9, 4, 5, 3, 10],
      },
    ],
    chart: {
      type: "bar",
      fontFamily: "inherit",
      height: 60,
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    colors: ["var(--bs-primary)"],
    grid: {
      show: false,
    },
    plotOptions: {
      bar: {
          horizontal: false,
          columnWidth: "65%",
          borderRadius: 2,
          endingShape: "rounded",
      },
  },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 6,
      colors: ["transparent"],
    },
    xaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      labels: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        show: false,
      },
    },
    axisBorder: {
      show: false,
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      theme: "dark",
      style: {
        fontSize: "12px",
        fontFamily: "inherit",
      },
      x: {
        show: false,
      },
      y: {
        formatter: undefined,
      },
    },
  };

  var chart_column_basic = new ApexCharts(
    document.querySelector("#product-a-sales"),
    Product_A_Sales
  );
  chart_column_basic.render();





  var Product_B_Sales = {
    series: [
      {
        name: "",
        data: [4, 5, 2, 10, 9, 12, 4, 9, 4, 5, 3, 10],
      },
    ],
    chart: {
      type: "bar",
      fontFamily: "inherit",
      height: 60,
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    colors: ["var(--bs-secondary)"],
    grid: {
      show: false,
    },
    plotOptions: {
      bar: {
          horizontal: false,
          columnWidth: "65%",
          borderRadius: 2,
          endingShape: "rounded",
      },
  },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 6,
      colors: ["transparent"],
    },
    xaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      labels: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        show: false,
      },
    },
    axisBorder: {
      show: false,
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      theme: "dark",
      style: {
        fontSize: "12px",
        fontFamily: "inherit",
      },
      x: {
        show: false,
      },
      y: {
        formatter: undefined,
      },
    },
  };

  var chart_column_basic = new ApexCharts(
    document.querySelector("#product-b-sales"),
    Product_B_Sales
  );
  chart_column_basic.render();








  var Product_C_Sales = {
    series: [
      {
        name: "",
        data: [4, 5, 2, 10, 9, 12, 4, 9, 4, 5, 3, 10],
      },
    ],
    chart: {
      type: "bar",
      fontFamily: "inherit",
      height: 60,
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    colors: ["var(--bs-danger)"],
    grid: {
      show: false,
    },
    plotOptions: {
      bar: {
          horizontal: false,
          columnWidth: "65%",
          borderRadius: 2,
          endingShape: "rounded",
      },
  },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 6,
      colors: ["transparent"],
    },
    xaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      labels: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        show: false,
      },
    },
    axisBorder: {
      show: false,
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      theme: "dark",
      style: {
        fontSize: "12px",
        fontFamily: "inherit",
      },
      x: {
        show: false,
      },
      y: {
        formatter: undefined,
      },
    },
  };

  var chart_column_basic = new ApexCharts(
    document.querySelector("#product-c-sales"),
    Product_C_Sales
  );
  chart_column_basic.render();





  var download_count = {
    series: [
      {
        name: "",
        data: [4, 5, 2, 10, 9, 12, 4, 9, 4, 5, 3, 10],
      },
    ],
    chart: {
      type: "bar",
      fontFamily: "inherit",
      height: 70,
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true,
      },
    },
    colors: ["rgba(255, 255, 255, 0.5)"],
    grid: {
      show: false,
    },
    plotOptions: {
      bar: {
        horizontal: false,
        startingShape: "flat",
        endingShape: "flat",
        columnWidth: "60%",
        barHeight: "100%",
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 6,
      colors: ["transparent"],
    },
    xaxis: {
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      labels: {
        show: false,
      },
    },
    yaxis: {
      labels: {
        show: false,
      },
    },
    axisBorder: {
      show: false,
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      theme: "dark",
      style: {
        fontSize: "12px",
        fontFamily: "inherit",
      },
      x: {
        show: false,
      },
      y: {
        formatter: undefined,
      },
    },
  };

  var chart_column_basic = new ApexCharts(
    document.querySelector("#download-count"),
    download_count
  );
  chart_column_basic.render();


  // ==============================================================
  // Collapsable cards
  // ==============================================================
  $('a[data-action="collapse"]').on("click", function (e) {
    e.preventDefault();
    $(this)
      .closest(".card")
      .find('[data-action="collapse"] i')
      .toggleClass("ti-minus ti-plus");
    $(this).closest(".card").children(".card-body").collapse("toggle");
  });
  // Toggle fullscreen
  $('a[data-action="expand"]').on("click", function (e) {
    e.preventDefault();
    $(this)
      .closest(".card")
      .find('[data-action="expand"] i')
      .toggleClass("mdi-arrow-expand mdi-arrow-compress");
    $(this).closest(".card").toggleClass("card-fullscreen");
  });
  // Close Card
  $('a[data-action="close"]').on("click", function () {
    $(this).closest(".card").removeClass().slideUp("fast");
  });



});
