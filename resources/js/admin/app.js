import './core/popper.min';
import './core/bootstrap.min';
import './plugins/smooth-scrollbar.min';
import './soft-ui-dashboard.min';

const PerfectScrollbar = require('./plugins/perfect-scrollbar.min');

var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}

