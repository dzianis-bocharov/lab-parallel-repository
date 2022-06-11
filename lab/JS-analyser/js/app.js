import {controls} from './controls.js'; 
import {no_small_screen_error_window_for_unload, no_small_screen_error_window_for_resize} from './no-small-screen-error-window.js';

$(document).ready(()=>{
   controls();
   no_small_screen_error_window_for_unload();
   no_small_screen_error_window_for_resize();
});