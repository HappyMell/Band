import $ from 'jquery';


var accordion =

    $(document).ready(function () {

        $('.accordion-toggle').on('click', function (event) {

            event.preventDefault();

            var accordion = $(this);

            var accordionContent = accordion.next('#accordion-content');

            accordion.toggleClass("open");

            accordionContent.slideToggle("slow");
        });

    });


export default accordion;