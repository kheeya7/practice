import _ from 'lodash';
import './style.css';
import CakeImage from './bacon-pancake.jpg';
import printMe from './print.js';

function component() {
    var element = document.createElement('div');

    element.innerHTML = _.join(['Hello', 'webpack'], ' ');
    element.classList.add('hello');

    var cakePic = new Image();
    cakePic.src = CakeImage;

    element.appendChild(cakePic);

    return element;
}

document.body.appendChild(component());
printMe();