import './bootstrap';
import '../src/js/main';
// import.meta.glob(["../src/assets/img/**", "../fonts/**"]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

console.log('root js file here');