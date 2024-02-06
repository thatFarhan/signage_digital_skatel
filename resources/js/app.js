import './bootstrap';
import Splide from '@splidejs/splide';

var splide = new Splide( '.splide', {
    //type    : 'fade',
    //rewind     : true,
    //rewindSpeed: 1000,
    autoplay: true,
    type    : 'loop',
    perPage : 1,
    speed : 1000,
    easing : 'ease-in-out',
    interval : 10000,
    pauseOnHover : false,
} );

splide.mount();