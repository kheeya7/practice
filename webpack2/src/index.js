import _ from 'lodash';
import './style.css';
import CakeImage from './bacon-pancake.jpg';
import printMe from './print.js';
import template from './first.pug';

function component() {
    var element = document.createElement('div');

    element.innerHTML = _.join(['Hello', 'webpack'], ' ');
    element.classList.add('hello');

    // var cakePic = new Image();
    // cakePic.src = CakeImage;

    // element.appendChild(cakePic);

    var element2 = document.createElement('div');

    var itemData = [
    {
        title: 'This is the title, yo',
        description: 'This is the spot for description.',
        price: 100,
        buttonDescription: 'Pick me'
    },
    {
        title: 'This is another title, yo',
        description: 'This is the spot for another description.',
        price: 800,
        buttonDescription: 'choose me'
    },
    {
        title: 'This is the last title, yo',
        description: 'This is the spot for the last description.',
        price: 1000,
        buttonDescription: 'Pick me up'
    }    
];

    element2.innerHTML = template({items: itemData});

    element.appendChild(element2);

    return element;
}

document.body.appendChild(component());
printMe();