import './core/popper.min';
import './core/bootstrap.min';
const PerfectScrollbar = require('./plugins/perfect-scrollbar.min');
import './plugins/smooth-scrollbar.min';

var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}

import './soft-ui-dashboard.min';