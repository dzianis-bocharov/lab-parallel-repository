$(document).ready(function(){

    const slider = (function () {

        const slideMover = document.getElementById('slideMover');
        const buttonPrev = document.getElementById('btnPrev');
        const buttonNext = document.getElementById('btnNext');
        const elements = document.getElementsByClassName('slideElement');

        const spanCurrentPage = document.getElementById('currentPage');
        const spanPagesAll = document.getElementById('pagesAll');

        const itemInfo = {
            position: {
                current: 0,
                min: 0,
                max: elements.length - 1
            },
            offset: 0,
            update: function(value) {
                this.position.current += value;
                this.offset -= value
            }
        };

        function _updatePageIndicator() {
            spanCurrentPage.innerHTML = itemInfo.position.current + 1;
            spanPagesAll.innerHTML = itemInfo.position.max + 1;
        };

        function _disableControls() {
            if (itemInfo.position.current > 0 && itemInfo.position.current < itemInfo.position.max) {
                buttonPrev.disabled = false;
                buttonNext.disabled = false;
            };
            if (itemInfo.position.current == 0) {
                buttonPrev.disabled = true;
                buttonNext.disabled = false;
            };
            if (itemInfo.position.current == itemInfo.position.max) {
                  buttonPrev.disabled = false;
                  buttonNext.disabled = true;
            };
        };

        function _slideMove(value) {
            itemInfo.update(value);

             var z = `${Math.round(itemInfo.offset) * 350-2}px`

             $("#slideMover").stop().animate({
                  left: z
               }, 700);

            _disableControls();
            _updatePageIndicator();
        };
        
        function _controlsActivate() {
            buttonPrev.addEventListener('click', () => _slideMove(-1));
            buttonNext.addEventListener('click', () => _slideMove(1));
        };

        function init() {
            _slideMove(0);
            _controlsActivate();
        }

        return { init };

    }()); 

    slider.init();

});