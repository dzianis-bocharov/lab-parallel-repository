$( document ).ready(function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020'],
            datasets: [{
                //label: 'График изменения цены на золото с 2001 по 2020 гг.',
                data: [276.50, 342.75, 417.25, 438.00, 513.00, 635.70, 836.50, 865.00, 1104.00, 1410.25, 1574.50, 1664.00, 1201.50, 1199.25, 1060.20, 1151.70, 1296.50, 1281.65, 1523.00, 1895.10],
                fill: false,
                borderColor: 'red',
              }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            title: {
                display: true,
                fontColor: 'green',
                text: 'Цены на золото с 2001 по 2020 гг.',
            },
            legend: {
                display: false
            },
            animation: {
                duration: 0
            }
         }
    });
});