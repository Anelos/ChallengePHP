$(function() {
    var rangeValues = new Array(16);
    var range = $('input').filter(function() {
        return this.type == 'range'
    });

    range.each(function() {
        var $slider = $(this),
            $text_box = $('#' + $(this).attr('link-to'));
        $text_box.val(this.value);
        $slider.change(function() {
            $text_box.val(this.value);
        });
        $text_box.change(function() {
            $slider.val($text_box.val());
        });
    });

    range.change(function() {
        for (var i = 0; i < 16; i++) {
            rangeValues[i] = range.eq(i).val();
        }
        $('h1').css('color', 'rgba(' + rangeValues[0] + ',' + rangeValues[1] + ',' + rangeValues[2] + ',' + rangeValues[3] + ')');
        $('.navbar').each(function() {
                this.style.setProperty('background-color', 'rgba(' + rangeValues[4] + ',' + rangeValues[5] + ',' + rangeValues[6] + ',' + rangeValues[7] + ')', 'important');
        });
        $('a').each(function() {
                this.style.setProperty('color', 'rgba(' + rangeValues[8] + ',' + rangeValues[9] + ',' + rangeValues[10] + ',' + rangeValues[11] + ')', 'important');
        });
        $('.btn').each(function() {
                this.style.setProperty('background-color', 'rgba(' + rangeValues[12] + ',' + rangeValues[13] + ',' + rangeValues[14] + ',' + rangeValues[15] + ')', 'important');
        });
    });

    $('#selectTag').change(function() {
        var selectValue = $('#selectTag option:selected').val();
        $('h1').css('font-family', selectValue);
    });
});
