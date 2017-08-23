import './style.css';
import '../node_modules/bootstrap';
import '../node_modules/bootstrap/dist/css/bootstrap.css';
import RootPage from './rootpage/rootpage.js';

var rootpage = new RootPage();
var rootpageHtml = rootpage.render();

$('body').append(rootpageHtml);