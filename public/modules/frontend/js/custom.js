
var splide = new Splide( '.splide-banner-slide', {
  direction: 'ttb',
  autoHeight: true,
  heightRatio: 0.3345153846153846,
  type    : 'loop',
  autoplay: true,
  arrowPath: 'M4.34372 17.5C2.65621 17.5 1.48371 16.7337 0.826214 15.2012C0.168713 13.6687 0.434961 12.31 1.62496 11.125L11.375 1.375C11.75 1 12.1562 0.718753 12.5937 0.531253C13.0312 0.343753 13.5 0.25 14 0.25C14.5 0.25 14.9687 0.343753 15.4062 0.531253C15.8437 0.718753 16.25 1 16.625 1.375L26.375 11.125C27.5625 12.3125 27.8275 13.6725 27.17 15.205C26.5125 16.7375 25.3412 17.5025 23.6562 17.5H4.34372Z',
  pagination:true,
  perPage: 2,
  perMove: 1,

} );

splide.on( 'pagination:mounted', function ( data ) {
  // You can add your class to the UL element
  data.list.classList.add( 'splide__pagination--custom' );

  // `items` contains all dot items
  data.items.forEach( function ( item) {
    item.button.textContent =  String(item.page+1).padStart(2, '0');
  } );
} );


splide.mount();

multipleSplide( '.splide-products', {
    pagination:true,
    perPage: 4,
  perMove:4,
  breakpoints: {
    1199: {
      perPage: 2,
      perMove: 2,
    },
    767: {
      perPage: 1,
      perMove: 1,
    },
  },
} );


