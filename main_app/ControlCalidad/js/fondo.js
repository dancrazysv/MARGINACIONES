define(['jquery'], function($) {
    // ...
    function random(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    var spec = {
        backgrounds: [
           'bg1.jpg',
           'bg2.jpg',
           'bg3.jpg',
           'bg4.jpg',
           'bg5.jpg',
           'bg6.jpg'
         
        ]
    };

    var i = random(0, spec.backgrounds.length - 1);
    var b = spec.backgrounds[i];
    $('body').css('background-image', 'url("../img/' + b + '")');
    // ...
});
// JavaScript Document