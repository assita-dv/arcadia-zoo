const menuIcon = document.querySelector('.menu-icon');
const sedebar = document.querySelector('#sedebar');
const header = document.querySelector('.header');

menuIcon.addEventListener('click', toggleSidebar);

function toggleSidebar(){
 if (sidebar.classList.contains('sidebar-responsive')){
    sidebar.classList.remove('sidebar-responsive');
    menuIcon.querySelector('span').innerText = 'keyboard_double_arrow_right';
    header.classList.remove('header-responsive');
 } else{
    sidebar.classList.add('sidebar-responsive')
    menuIcon.querySelector('span').innerText = 'menu';
    header.classList.add('header-responsive');
 }

 
}
let options = {
    series: [{
    data: [400, 430, 448, 470, 540 , 580, 690, 1100, 1200, 1380]
  }],
    chart: {
    type: 'bar',
    height: 350,
   toolbar: {
        show: false,
    }
  },
  Colors: ['#608202','#1c0284', '#bc1e51', '#eba91d' ],
  plotOptions: {
    bar: {
     borderRadius: 4,
      borderRadiusApplication: 'end',
      horizontal: false,
      distributed: true,
      colunmWidth:'40%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
   show: false,
},
  xaxis: {
    categories: ['lion', 'Dragon-komodo', 'Nasique', 'Bec-en-sabot', 'Loutre', 'Koalla', 'Faucon pèlerin',
      'orang-outan', 'Tigre', 'Guépard'
    ],
  },
  yaxix: {
    title: {
        text: "quantite",
    }
  },
  };

  let chartBar = new ApexCharts(document.querySelector("#chart-bar"), options);
  chartBar.render();

  // le charst area
  
      
  let mixdOptions = {
    series: [{
    name: 'visite',
    type: 'column',
    data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
  }, {
    name: 'animaux',
    type: 'area',
    data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
  }, {
    name: 'habitat',
    type: 'line',
    data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]
  }],
    chart: {
    height: 350,
    stacked: false,
    toolbar: {
        show: false,
    }
  },
  stroke: {
    width: [0, 2, 3],
    curve: 'smooth'
  },
  plotOptions: {
    bar: {
      columnWidth: '50%'
    }
  },
  
  fill: {
    opacity: [0.85, 0.25, 1],
    gradient: {
      inverseColors: false,
      shade: 'light',
      type: "vertical",
      opacityFrom: 0.85,
      opacityTo: 0.55,
      stops: [0, 100, 100, 100]
    }
  },
  labels: ['janvier', 'février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
    'aout', 'Sept', 'oct', 'nov', 'dec',
  ],
  markers: {
    size: 0
  },
 
  yaxis: {
    title: {
      text: 'Quantite',
    }
  },
  tooltip: {
    shared: true,
    intersect: false,
  
  }
  };

  let chartMixed = new ApexCharts(document.querySelector("#chart-area"), mixdOptions);
  chartMixed.render();
