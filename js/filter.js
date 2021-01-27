document.addEventListener('DOMContentLoaded', function () {
    var range = document.getElementById('range');
    var input0 = document.getElementById('input-with-keypress-0');
    var input1 = document.getElementById('input-with-keypress-1');
    var inputs = [input0, input1];

    noUiSlider.create(range, {
        start: [0, 1000],
        connect: true,
        range: {
            'min': 0,
            'max': 1000
        },
        behaviour: 'tap-drag',
        tooltips: true,
        format: {
            from: function (value) {
                return Math.trunc(value);
            },
            to: function (value) {
                return Math.trunc(value);
            }
        }
    });

    range.noUiSlider.on('update', function (values, handle) {
        inputs[handle].value = values[handle];
    });

    inputs.forEach(function (input, handle) {

        input.addEventListener('change', function () {
            range.noUiSlider.setHandle(handle, this.value);
        });

        // input.addEventListener('keydown', function (e) {

        //     var values = range.noUiSlider.get();
        //     var value = Number(values[handle]);

        //     // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
        //     var steps = range.noUiSlider.steps();

        //     // [down, up]
        //     var step = steps[handle];

        //     var position;

        //     // 13 is enter,
        //     // 38 is key up,
        //     // 40 is key down.
        //     switch (e.which) {

        //         case 13:
        //             range.noUiSlider.setHandle(handle, this.value);
        //             break;

        //         case 38:

        //             // Get step to go increase slider value (up)
        //             position = step[1];

        //             // false = no step is set
        //             if (position === false) {
        //                 position = 1;
        //             }

        //             // null = edge of slider
        //             if (position !== null) {
        //                 range.noUiSlider.setHandle(handle, value + position);
        //             }

        //             break;

        //         case 1000:

        //             position = step[0];

        //             if (position === false) {
        //                 position = 1;
        //             }

        //             if (position !== null) {
        //                 range.noUiSlider.setHandle(handle, value - position);
        //             }

        //             break;
        //     }
        // });
    });
});