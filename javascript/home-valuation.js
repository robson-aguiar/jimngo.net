///////////////////////////////////////////////////////////////////////////////
// Delay images                                                               /
///////////////////////////////////////////////////////////////////////////////

function init() {
    var imgDefer = document.getElementsByTagName('img');
    for (var i = 0; i < imgDefer.length; i++) {
        if (imgDefer[i].getAttribute('data-src')) {
            imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
            var src = imgDefer[i].getAttribute('data-src');
        }
    }
}

init();

///////////////////////////////////////////////////////////////////////////////
// Slide Show                                                                 /
///////////////////////////////////////////////////////////////////////////////

onload = slideshow;

function slideshow() {
    setInterval(function () {
        nextSlide('hv-ss');
    }, 2000);
}

function nextSlide(id) {
    var elems = document.getElementById(id).getElementsByClassName('slide');
    elems.index = elems.index || 0;
    elems[elems.index].className = 'slide';
    elems.index = (elems.index + 1) % elems.length;
    elems[elems.index].className = 'slide showing';
}

////////////////////////////////////////////////////////////////////////////////
// Animated Collapsible - Event Listener --------------------------------------/
////////////////////////////////////////////////////////////////////////////////

function collapsible(idName, className, className2) {
    const array = document.getElementById(idName).getElementsByClassName(className);
    const contents = document.getElementById(idName).getElementsByClassName(className2);
    for (let i = 0; i < array.length; i++) {
        array[i].addEventListener("click", function () {
            // Hide all elements with class content
            for (let j = 0; j < contents.length; j++) {
                contents[j].style.height = '0px';
            }
            if (this.classList.contains("active")) {
                this.classList.remove("active");
            } else {
                // Remove current active class
                for (let k = 0; k < array.length; k++) {
                    array[k].classList.remove("active");
                }
                // Add active class to clicked element
                this.classList.toggle("active");
                // Display content for only active element            
                var content = this.nextElementSibling;
                content.style.height = content.scrollHeight + "px";
            }
        });
    }

}

collapsible('tips', 'collapsible', 'content');