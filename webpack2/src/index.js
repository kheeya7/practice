import _ from 'lodash';
import './style.css';
import CakeImage from './bacon-pancake.jpg';
import printMe from './print.js';
import '../node_modules/bootstrap';
import '../node_modules/bootstrap/dist/css/bootstrap.css';
import CoolItems from './cool-items/cool-items.js';


function component() {
    var element = document.createElement('div');

    var coolItemsPanel = document.createElement('div');

    var coolItems = new CoolItems();
    var coolItemsHtml = coolItems.render();

    coolItemsPanel.innerHTML = coolItemsHtml;

    element.appendChild(coolItemsPanel);

    return element;
}

document.body.appendChild(component());
printMe();