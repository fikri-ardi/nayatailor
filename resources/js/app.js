import './bootstrap';
import '../css/app.css';
import {
    Livewire,
    Alpine
} from '../../vendor/livewire/livewire/dist/livewire.esm';
import Slider from './Slider.js';

Alpine.data('Slider', Slider)

Livewire.start();
