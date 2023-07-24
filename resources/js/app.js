import './bootstrap';

import.meta.glob([
    '../images/**',
    '../icons/**',
  ]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
