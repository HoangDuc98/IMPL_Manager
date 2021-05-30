(function ($) {
    'use strict';
    if ($("#chart-04").length) {

        var options = {
            chart: {
                height: 450,
                type: 'line',
                stacked: false
            },
            colors: ["#00e08b", "#ff256e", "#3fbafc","#407cff","#ffb700"],
            dataLabels: {
                enabled: false
            },
            series: [{
                name: 'Income',
                type: 'column',
                data: [1.4, 2, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
            }, {
                name: 'Cashflow',
                type: 'column',
                data: [1.1, 3, 3.1, 4, 4.1, 4.9, 6.5, 8.5]
            }, {
                name: 'Revenue',
                type: 'line',
                data: [20, 29, 37, 36, 44, 45, 50, 58]
            }],
            stroke: {
                width: [1, 1, 4]
            },

            xaxis: {
                categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016],
            },
            yaxis: [
                {
                    axisTicks: {
                        show: true,
                    },
                    axisBorder: {
                        show: true,
                        color: '#008FFB'
                    },
                    labels: {
                        style: {
                            color: '#008FFB',
                        }
                    },
                    title: {
                        text: "Income (thousand Dollars)",
                        style: {
                            color: '#008FFB',
                        }
                    },
                    tooltip: {
                        enabled: true
                    }
                },

                {
                    seriesName: 'Income',
                    opposite: true,
                    axisTicks: {
                        show: true,
                    },
                    axisBorder: {
                        show: true,
                        color: '#ff256e'
                    },
                    labels: {
                        style: {
                            color: '#ff256e',
                        }
                    },

                },
                {
                    seriesName: 'Revenue',
                    opposite: true,
                    axisTicks: {
                        show: true,
                    },
                    axisBorder: {
                        show: true,
                        color: '#407cff'
                    },
                    labels: {
                        style: {
                            color: '#407cff',
                        },
                    },

                },
            ],
            tooltip: {
                fixed: {
                    enabled: true,
                    position: 'topLeft', // topRight, topLeft, bottomRight, bottomLeft
                    offsetY: 30,
                    offsetX: 60
                },
            },
            legend: {
                horizontalAlign: 'left',
                offsetX: 40
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-04"),
            options
        );


        chart.render();

    }
    if ($("#chart-05").length) {


        var options = {
            colors: ["#00e08b", "#ff256e", "#3fbafc","#407cff","#ffb700"],

            chart: {
                width: "100%",
                type: 'donut',
            },

            plotOptions: {
                pie: {
                    size: 120,
                    donut: {
                        size: '45%'
                    }
                }
            },
            series: [44, 55, 25,16,20],
            dataLabels: {
                enabled: false
            },
            legend: {
                position: 'bottom',
                show: true
            }

        }

        var chart = new ApexCharts(
            document.querySelector("#chart-05"),
            options
        );

        chart.render();

    }
})(window.jQuery);
