window.addEventListener('gamepadconnected', event => {});

function vib() {
  var pad = navigator.getGamepads()[0];
  pad.vibrationActuator.playEffect('dual-rumble', { duration: 1000, strongMagnitude: 1.0 })
;}

$(document).ready(()=>{
    $('#btnGamepadVibration').on('click', ()=>{vib()})
});