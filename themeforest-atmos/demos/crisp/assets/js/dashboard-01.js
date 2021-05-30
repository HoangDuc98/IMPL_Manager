(function ($) {
    'use strict';
    if($("#chart-01").length){

        var options = {
            chart: {
                height: 350,
                type: 'bar',
            },
            colors:["#1b2955"],
            plotOptions: {
                bar: {
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                    return val + "%";
                },
                offsetY: -20,
                style: {
                    fontSize: '12px',
                    colors: ["#304758"]
                }
            },
            series: [{
                name: 'Inflation',
                data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4, 0.8, 0.5, 0.2]
            }],
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                position: 'top',
                labels: {
                    offsetY: -18,

                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                crosshairs: {
                    fill: {
                        type: 'gradient',
                        gradient: {
                            colorFrom: '#D8E3F0',
                            colorTo: '#BED1E6',
                            stops: [0, 100],
                            opacityFrom: 0.4,
                            opacityTo: 0.5,
                        }
                    }
                },
                tooltip: {
                    enabled: true,
                    offsetY: -35,

                }
            },
            fill: {
                gradient: {
                    shade: 'light',
                    type: "horizontal",
                    shadeIntensity: 0.25,
                    gradientToColors: undefined,
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [50, 0, 100, 100]
                },
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                    formatter: function (val) {
                        return val + "%";
                    }
                }

            },
            title: {
                text: 'Monthly Inflation in Argentina, 2002',
                floating: true,
                offsetY: 320,
                align: 'center',
                style: {
                    color: '#444'
                }
            },
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-01"),
            options
        );

        chart.render();

    }
    if($("#chart-02").length){
        var options = {
            annotations: {
                yaxis: [{
                    y: 8200,
                    borderColor: colors[1],
                    label: {
                        borderColor: colors[1],
                        style: {
                            color: '#fff',
                            background: colors[1],
                        },
                        text: 'Followers',
                    }
                }],
                xaxis: [{
                    x: new Date('23 Nov 2017').getTime(),
                    strokeDashArray: 0,
                    borderColor: colors[0],
                    label: {
                        borderColor: colors[0],
                        style: {
                            color: '#fff',
                            background: colors[0],
                        },
                        text: 'Blog Redesign',
                    }
                }],
                points: [{
                    x: new Date('27 Nov 2017').getTime(),
                    y: 8506.9,
                    marker: {
                        size: 8,
                        fillColor: '#fff',
                        strokeColor: colors[6],
                        radius: 2
                    },
                    label: {
                        borderColor: colors[6],
                        offsetY: 0,
                        style: {
                            color: '#fff',
                            background: colors[6],
                        },

                        text: 'Insta Stories',
                    }
                }]
            },
            chart: {
                height: 350,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            colors: colors,
            stroke: {
                curve: 'straight'
            },
            grid: {
                padding: {
                    right: 30,
                    left: 20
                },
                strokeDashArray: '3',
            },
            series: [{
                data: [8107, 8496, 8600, 8881, 9340, 8128, 8122, 8165, 8340, 8423, 8423, 8514, 8481, 8487, 8506, 8626, 8668, 8602, 8607, 8512,]
            }],
            labels: ["13 Nov 2017", "14 Nov 2017", "15 Nov 2017", "16 Nov 2017", "17 Nov 2017", "20 Nov 2017", "21 Nov 2017", "22 Nov 2017", "23 Nov 2017", "24 Nov 2017", "27 Nov 2017", "28 Nov 2017", "29 Nov 2017", "30 Nov 2017", "01 Dec 2017", "04 Dec 2017", "05 Dec 2017", "06 Dec 2017", "07 Dec 2017", "08 Dec 2017"],
            xaxis: {
                type: 'datetime',
            },
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-02"),
            options
        );

        chart.render();

    }
    if ($("#chart-03").length) {


        var options = {
            colors: ["#00e08b", "#ff256e", "#3fbafc"],

            chart: {
                width: 250,
                type: 'donut',
            },
            series: [44, 55, 25],
            dataLabels: {
                enabled: false
            },
            legend: {
                position: 'bottom',
                show: false
            }

        }

        var chart = new ApexCharts(
            document.querySelector("#chart-03"),
            options
        );

        chart.render();

    }
})(window.jQuery);

